<?php

namespace Gestao_Assistencias\Http\Controllers;

use Illuminate\Http\Request;
use Gestao_Assistencias\solecitacao;
use Gestao_Assistencias\logsaidas;
use Datatables;
use Redirect;
use Session;
use DB;

class aprovados_Controller extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $estadoa = 'aprovado';

        $solecitacao = DB::table('solecitacao as sol')
                ->leftjoin('cliente as cli', 'cli.id', '=', 'sol.clie_id')
                ->leftjoin('avaria as av', 'av.id', '=', 'sol.avaria_id')
                ->leftjoin('equipamento as eq', 'eq.id', '=', 'sol.equip_id')
                ->leftjoin('distrito as dis', 'dis.id', '=', 'sol.distrit_id')
                ->leftjoin('provincia as pv', 'pv.id', '=', 'dis.prov_id')
                ->leftjoin('modelo as mo', 'mo.id', '=', 'eq.model_id')
                ->leftjoin('alocacao as al', 'sol.id', '=', 'al.solec_id')
                ->leftjoin('users as usr', 'usr.id', '=', 'al.user_id')
                ->select("sol.*", "usr.nameapelido", "usr.id as userid", "cli.nomeemp", "cli.tipo", "eq.nr_serie", "dis.nomedt", "pv.nomepv", "mo.nome")
                ->where('sol.estado', '=', $estadoa)
                ->distinct()
                ->paginate(4);

        return view("formularios.form_aprovados", compact('solecitacao'));
    }

    public function show($id) {

        $st = solecitacao::find($id);

        $listpecas = DB::table('requisicoes as req')
                ->where('req.solec_id', '=', $st->id)
                ->select("req.*")
                ->get();

        return view("formularios.form_list_stock_quant", ['st' => $st], compact('listpecas', 'st'));
    }

    public function create(Request $request) {

        if (auth()->user()->id <> null) {
            
            //Aprovacao de Pedido de Peca
            $st = solecitacao::find($request['idsolec']);
            $st->estado = 'aprovado';
            $st->save();
            
            return redirect()
            ->route('v_estado_requisicao')
            ->with("success", "Aprovacao Efetuado com Successo!");
        } else {
            return redirect()
                            ->back()
                            ->with("error", "Erro na Aprovacao!");
        }
    }

}
