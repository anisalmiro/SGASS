<?php

namespace Gestao_Assistencias\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use Auth;
use Gestao_Assistencias\alocacao;
use Gestao_Assistencias\solecitacao;
use Gestao_Assistencias\User;
use Session;

class alocacao_Controller extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {

        $usr = Auth::user()->id;
        if (Auth::user()->nivel == 3) {
            $query = "SELECT sol.*, usr.nameapelido, usr.id as userid, cli.nomeemp, cli.tipo, eq.nr_serie, dis.nomedt, pv.nomepv, mo.nome from solecitacao AS sol inner join cliente AS cli on sol.clie_id=cli.id  inner join avaria AS av on sol.avaria_id=av.id inner join equipamento AS eq on sol.equip_id=eq.id inner join distrito AS dis on sol.distrit_id=dis.id inner join provincia AS pv on dis.prov_id=pv.id inner join modelo AS mo on eq.model_id=mo.id inner join alocacao AS al on sol.id=al.solec_id inner join users AS usr on al.user_id=usr.id WHERE (usr.id='$usr') and (sol.estado = 'aberto' or sol.estado='espera') and (sol.estado<>'pendente' and sol.estado <> 'fechado')";
            $solecitacao = DB::select($query);
            return view("formularios.form_estado_alocacao", compact('solecitacao'));
        } else {
            $query = "SELECT sol.*, usr.nameapelido, usr.id as userid, cli.nomeemp, cli.tipo, eq.nr_serie, dis.nomedt, pv.nomepv, mo.nome from solecitacao AS sol inner join cliente AS cli on sol.clie_id=cli.id  inner join avaria AS av on sol.avaria_id=av.id inner join equipamento AS eq on sol.equip_id=eq.id inner join distrito AS dis on sol.distrit_id=dis.id inner join provincia AS pv on dis.prov_id=pv.id inner join modelo AS mo on eq.model_id=mo.id inner join alocacao AS al on sol.id=al.solec_id inner join users AS usr on al.user_id=usr.id WHERE sol.estado <> 'fechado'";
            $solecitacao = DB::select($query);
            return view("formularios.form_estado_alocacao", compact('solecitacao'));
        }
    }

    public function edit($id) {
        //selecao de tecnico para alocacao
        $soltecn = DB::table('users as usr')
                ->leftjoin('especificacao as esp', 'esp.id', '=', 'usr.nivel')
                ->where('esp.nome', '=', 'Tecnico')
                ->select("usr.*", "esp.nome")
                ->get();


        $st = solecitacao::find($id);

        return view('formularios.form_alocacao', ['st' => $st], compact('soltecn'));
    }

//secao de alocacao do tecnico para a solecitacao
    public function store(Request $request) {
        //abertura de um cal solecitado
        //   $idgetSol=DB::table('solecitacao as sol')
        //   ->max('id');

        alocacao::create([
            'descAvaria' => $request['descricao'],
            'estado' => 'espera',
            'nivelUrgenc' => $request['optionsRadiosInline'],
            'user_id' => $request['tecnico'],
            'solec_id' => $request['id'],
        ]);

// update estado tabbela solicitacao
        DB::table('solecitacao')
                ->where("solecitacao.id", '=', $request['id'])
                ->update(['solecitacao.descricao' => $request['descricao'], 'solecitacao.estado' => 'espera']);

        return Redirect::to('v_chamado');
    }

}
