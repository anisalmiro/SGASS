<?php

namespace Gestao_Assistencias\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Session;
use Mail;
use DB;
use Gestao_Assistencias\avaria;
use Gestao_Assistencias\cliente;
use Gestao_Assistencias\distrito;
use Gestao_Assistencias\provincia;
use Gestao_Assistencias\solecitacao;
use Gestao_Assistencias\equipamento;
use Gestao_Assistencias\alocacao;

class abrir_solec_Controller extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {

        $solecitacao = DB::table('solecitacao as sol')
                ->leftjoin('cliente as cli', 'cli.id', '=', 'sol.clie_id')
                ->leftjoin('avaria as av', 'av.id', '=', 'sol.avaria_id')
                ->leftjoin('equipamento as eq', 'eq.id', '=', 'sol.equip_id')
                ->leftjoin('distrito as dis', 'dis.id', '=', 'sol.distrit_id')
                ->leftjoin('provincia as pv', 'pv.id', '=', 'dis.prov_id')
                ->leftjoin('modelo as mo', 'mo.id', '=', 'eq.model_id')
                ->select("sol.*", "cli.nomeemp", "cli.tipo", "eq.nr_serie", "dis.nomedt", "pv.nomepv", "mo.nome")
                ->where('sol.estado', '<>', 'espera')
                ->where('sol.estado', '<>', 'pendente')
                ->where('sol.estado', '<>', 'fechado')
                ->where('sol.estado', '<>', 'aprovado')
                ->distinct()
                ->paginate(4);


        $avaria = avaria::pluck('tipo', 'id');
        $cliente = cliente::pluck('nomeemp', 'id');
        $provincia = provincia::pluck('nomepv', 'id');
        return view("formularios.form_Abrir_solecitacao", compact('provincia', 'cliente', 'avaria', 'solecitacao'));
    }

    public function getDistrito(Request $request, $id) {
        if ($request->ajax()) {
            $distrito = cliente::distritos($id);
            return response()->json($distrito);
        }
    }

    public function getEquipamento(Request $request, $id) {
        if ($request->ajax()) {
            $equipamento = equipamento::equipamentos($id);
            return response()->json($equipamento);
        }
    }

    public function store(Request $request) {
        //abertura de um cal solecitado
        solecitacao::create([
            'descricao' => $request['descricao'],
            'estado' => 'aberto',
            'clie_id' => $request['cliente_action'],
            'avaria_id' => $request['avaria'],
            'equip_id' => $request['equip_action'],
            'distrit_id' => $request['distrito'],
        ]);

//        return Redirect::to('/v_alocacao');
        return redirect('/v_alocacao')->with( 'success', 'Ticket Aberta' );
    }

}
