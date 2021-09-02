<?php

namespace Gestao_Assistencias\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Session;
use Mail;
use DB;
use Gestao_Assistencias\cliente;

class Relatorio_Controller extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {

        $query = "select COUNT(CASE WHEN estado = 'aberto' THEN 1 END ) AS aberto_count,
       COUNT(CASE WHEN estado = 'pendente' THEN 1 END ) AS pendente_count,
       COUNT(CASE WHEN estado = 'espera' THEN 1 END ) AS atendimento_count,
       COUNT(CASE WHEN estado = 'fechado' THEN 1 END ) AS fechado_count
        FROM solecitacao ";
        $sop = DB::select($query);
//        //solicitacoes 
//        $sop = DB::table('solecitacao')
//                ->select(DB::raw('count(*) as estado_count, estado'))
//                ->where('estado', '=', 'fechado')
//                ->groupBy('estado')
//                ->get();
        return view('formularios.form_balanco', compact('sop'));
    }

    public function roll() {
        $solpend = DB::table('solecitacao as sol')
                ->leftjoin('requisicoes as req', 'req.solec_id', '=', 'sol.id')
                ->leftjoin('cliente as cli', 'cli.id', '=', 'sol.clie_id')
                ->leftjoin('avaria as av', 'av.id', '=', 'sol.avaria_id')
                ->leftjoin('equipamento as eq', 'eq.id', '=', 'sol.equip_id')
                ->leftjoin('distrito as dis', 'dis.id', '=', 'sol.distrit_id')
                ->leftjoin('provincia as pv', 'pv.id', '=', 'dis.prov_id')
                ->leftjoin('modelo as mo', 'mo.id', '=', 'eq.model_id')
                ->select("sol.*", "cli.nomeemp", "cli.tipo", "eq.nr_serie", 'req.created_at as dped', "dis.nomedt", "pv.nomepv", "mo.nome")
                ->where('sol.estado', '=', 'pendente')
                ->distinct()
                ->paginate(4);

        $solesp = DB::table('solecitacao as sol')
                ->leftjoin('alocacao as alo', 'alo.solec_id', '=', 'sol.id')
                ->leftjoin('cliente as cli', 'cli.id', '=', 'sol.clie_id')
                ->leftjoin('avaria as av', 'av.id', '=', 'sol.avaria_id')
                ->leftjoin('equipamento as eq', 'eq.id', '=', 'sol.equip_id')
                ->leftjoin('distrito as dis', 'dis.id', '=', 'sol.distrit_id')
                ->leftjoin('provincia as pv', 'pv.id', '=', 'dis.prov_id')
                ->leftjoin('modelo as mo', 'mo.id', '=', 'eq.model_id')
                ->select("sol.*", "cli.nomeemp", "cli.tipo", "eq.nr_serie", 'sol.created_at as dsolec', 'alo.created_at as daloc', "dis.nomedt", "pv.nomepv", "mo.nome")
                ->where('sol.estado', '=', 'espera')
                ->distinct()
                ->paginate(4);

        //solicitacoes abertas
        $sop = DB::table('solecitacao as sol')
                ->where('sol.estado', '=', 'aberto')
                ->count();

        //solicitacoes pendentes
        $sp = DB::table('solecitacao as sol')
                ->where('sol.estado', '=', 'pendente')
                ->count();
        //solicitacoes espera
        $se = DB::table('solecitacao as sol')
                ->where('sol.estado', '=', 'espera')
                ->count();

        //solicitacoes fechadas
        $sf = DB::table('solecitacao as sol')
                ->where('sol.estado', '=', 'fechado')
                ->count();


        return view('formularios.form_Relat_estado_solic', compact('sop', 'sp', 'se', 'sf', 'solpend', 'solesp'));
    }

    public function getApi(Request $request) {

        $days = $request->input('days', 7);


        $range = \Carbon\Carbon::now()->subDays($days);
        $stats = DB::table('solecitacao')
                ->where('created_at', '>=', $range, 'and', 'estado', '=', 'pendente')
                ->groupBy('date')
                ->orderBy('date', 'ASC')
                ->get([
                    DB::raw('Date(created_at) as date'),
                    DB::raw('COUNT(*) as value')
                ])
                ->toJSON();

        return $stats;
    }

    public function getSol() {

        $range = \Carbon\Carbon::now()->subDays(60);
        $statsf = DB::table('log_solicitacao as sol')
                ->where('sol.created_at', '>=', $range)
                ->where('sol.estado', '=', 'fechado')
                ->groupBy('date')
                ->orderBy('date', 'ASC')
                ->get([
                    DB::raw('Date(created_at) as date'),
                    DB::raw('COUNT(*) as value')
                ])
                ->toJSON();

        return $statsf;
    }

}
