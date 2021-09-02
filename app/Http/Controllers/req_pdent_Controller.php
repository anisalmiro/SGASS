<?php

namespace Gestao_Assistencias\Http\Controllers;

use Illuminate\Http\Request;
use Gestao_Assistencias\requisicoes;
use Gestao_Assistencias\produto;
use Gestao_Assistencias\solecitacao;
use Gestao_Assistencias\req_Transacao;
use Gestao_Assistencias\stock;
use Gestao_Assistencias\logsaidas;
use Datatables;
use Redirect;
use Session;
use DB;

class req_pdent_Controller extends Controller {

    public function index() {
        $estadof = 'fechado';
        $estadoa = 'aberto';
        $estadoe = 'espera';
        $estadod = 'aprovado';
        $solecitacao = DB::table('solecitacao as sol')
                ->leftjoin('cliente as cli', 'cli.id', '=', 'sol.clie_id')
                ->leftjoin('avaria as av', 'av.id', '=', 'sol.avaria_id')
                ->leftjoin('equipamento as eq', 'eq.id', '=', 'sol.equip_id')
                ->leftjoin('distrito as dis', 'dis.id', '=', 'sol.distrit_id')
                ->leftjoin('provincia as pv', 'pv.id', '=', 'dis.prov_id')
                ->leftjoin('modelo as mo', 'mo.id', '=', 'eq.model_id')
                ->leftjoin('alocacao as al', 'sol.id', '=', 'al.solec_id')
                ->leftjoin('users as usr', 'usr.id', '=', 'al.user_id')
                ->select("sol.*", "usr.nameapelido", "cli.nomeemp", "cli.tipo", "eq.nr_serie", "dis.nomedt", "pv.nomepv", "mo.nome")
                ->where('sol.estado', '<>', $estadof)
                ->where('sol.estado', '<>', $estadoa)
                ->where('sol.estado', '<>', $estadoe)
                ->where('sol.estado', '<>', $estadod)
                ->distinct()
                ->paginate(4);

        return view("formularios.form_estado_Requisicao_pedent", compact('solecitacao'));
    }

    public function show($id) {

        $st = solecitacao::find($id);

        $listpecas = DB::table('produto as pro')
                ->leftjoin('requisicoes as req', 'req.id', '=', 'pro.req_id')
                ->where('req.solec_id', '=', $st->id)
                ->select("pro.*", "req.*")
                ->get();

        return view("formularios.form_list_stock_quant", ['st' => $st], compact('listpecas', 'st'));
    }

    public function create(Request $request) {

        DB::table('requisicoes')
                ->where("requisicoes.id", '=', $request['idrequis'])
                ->update(['requisicoes.estado' => 'aprovado']);
        
        DB::table('solecitacao')
               ->where("solecitacao.id", '=', $request['idsolec'])
                ->update(['solecitacao.estado' => 'aprovado']);
        
        return Redirect::to('/v_estado_requisicao');
        
    }

    public function update(Request $request) {
        
    }

    public function __construct() {
        $this->middleware('auth');
    }

}
