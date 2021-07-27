<?php

namespace Gestao_Assistencias\Http\Controllers;

use Illuminate\Http\Request;
use Gestao_Assistencias\equipamento;
use Redirect;
use DB;
use Gestao_Assistencias\solecitacao;
use Charts;
use Carbon\Carbon;

class dashController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        //equipamentos existentes
        $equipamento = DB::table('equipamento')->count();

        //soecitacoes abertas
        $solec_abertas = DB::table('solecitacao')
                ->where('estado', '<>', 'fechado')
                ->count();

        $peg_pedent = DB::table('solecitacao')
                ->where('estado', '=', 'pedente')
                ->count();

        return view('formularios.Dashboard', compact('equipamento', 'solec_abertas', 'peg_pedent'));
    }
    
        public function getApi() {

        $range = \Carbon\Carbon::now()->subDays(7);
        $stats = DB::table('solecitacao')
                ->where('created_at', '>=', $range)
                ->groupBy('date')
                ->orderBy('date', 'ASC')
                ->get([
                    DB::raw('Date(created_at) as date'),
                    DB::raw('COUNT(*) as value')
                ])
                ->toJSON();

        return $stats;
    }


}
