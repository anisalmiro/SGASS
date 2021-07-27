<?php

namespace Gestao_Assistencias\Http\Controllers;

use Illuminate\Http\Request;
use Gestao_Assistencias\requisicoes;
use Gestao_Assistencias\produto;
use Gestao_Assistencias\solecitacao;
use Gestao_Assistencias\req_Transacao;
use Gestao_Assistencias\stock;
use Gestao_Assistencias\logsaidas;
use Gestao_Assistencias\cliente;
use Gestao_Assistencias\movimento;
use Datatables;
use Redirect;
use Session;
use DB;

class abateController extends Controller {

    public function index() {
        $estadoa = 'em_espera';
        $estadof = 'fechado';
        $req_abate = DB::table('solecitacao as sol')
                ->leftjoin('cliente as cli', 'cli.id', '=', 'sol.clie_id')
                ->leftjoin('avaria as av', 'av.id', '=', 'sol.avaria_id')
                ->leftjoin('equipamento as eq', 'eq.id', '=', 'sol.equip_id')
                ->leftjoin('distrito as dis', 'dis.id', '=', 'sol.distrit_id')
                ->leftjoin('provincia as pv', 'pv.id', '=', 'dis.prov_id')
                ->leftjoin('modelo as mo', 'mo.id', '=', 'eq.model_id')
                ->leftjoin('alocacao as al', 'sol.id', '=', 'al.solec_id')
                ->leftjoin('users as usr', 'usr.id', '=', 'al.user_id')
                ->leftjoin('requisicoes as req', 'sol.id', '=', 'req.solec_id')
                ->select("sol.*", "usr.nameapelido", "usr.id as userid", "cli.nomeemp", "cli.tipo", "eq.nr_serie", "dis.nomedt", "pv.nomepv", "mo.nome")
                ->where('sol.estado', '=', $estadof, 'and', 'req.estado', '=', $estadoa)
                ->distinct()
                ->get();
//        
//        $query="SELECT * FROM requisicoes where estado ='em_espera'";
//        $req_abate=DB::selet($query);

        return view("Formstock.form_listopcoes_abate_req_stock", compact('req_abate'));
    }

    public function find($id) {

        $st = solecitacao::find($id);

        $listpecas = DB::table('produto as pro')
                ->leftjoin('requisicoes as req', 'req.id', '=', 'pro.req_id')
                ->where('req.solec_id', '=', $st->id)
                ->select("pro.*", "req.*")
                ->get();
        return response()->json(
                        $listpecas->toArray()
        );
    }

// get abate formulario abate invocacao inplicita
    public function show($id) {

        $st = solecitacao::find($id);

        $listpecas = DB::table('requisicoes as req')
                ->where('req.solec_id', '=', $st->id)
                ->select("req.*")
                ->get();

        return view("Formstock.form_list_stock_abater", ['st' => $st], compact('listpecas', 'st'));
    }

    public function create(Request $request) {
        $itens = array();
        $item = $request->all();
        $rules = array($item);

        $insItens = true;

        if (isset($item['tabpro_partN']) == null) {
          dd($rules);
        }

        if ($insItens) {
            DB::commit();
            Session::flash('message', 'Inserido Com Sucesso com Sucesso');
            return Redirect::to('/v_abate_requisicao');
        } else {
            DB::rollBack();
            Session::flash('message', 'Inserido com Exito');
//            return Redirect::to('v_alocacao');
        }
    }

    public function update(Request $request) {
        
    }

    public function __construct(Cliente $cliente) {
        $this->middleware('auth');
        $this->cliente = $cliente;
    }

}
