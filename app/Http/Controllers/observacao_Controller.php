<?php

namespace Gestao_Assistencias\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use Gestao_Assistencias\alocacao;
use Gestao_Assistencias\solecitacao;
use Gestao_Assistencias\requisicoes;
use Gestao_Assistencias\log_solicitacao;

class observacao_Controller extends Controller {

    public function edit($id) {

//Selecionar stock itens para flexibilisar a escolha do iten no stock
        $stock_sl = DB::table('stock as st')
                ->leftjoin('movimento as m', 'm.stock_id', '=', 'st.id')
                ->select("st.*", "m.*")
                ->get();

//selecao de tecnico para alocacao
        $soltecn = DB::table('users as usr')
                ->leftjoin('especificacao as esp', 'esp.id', '=', 'usr.nivel')
                ->where('esp.nome', '=', 'Tecnico')
                ->select("usr.*", "esp.nome")
                ->get();

        $st = solecitacao::find($id);

        return view('formularios.form_tecnico_observacao', ['st' => $st]);
    }

//secao de emitir estado da avaria se esta resolvida ou nao
    public function store(Request $request) {
        log_solicitacao::create([
            'descricao' => $request['descricao'],
            'estado' => 'fechado',
            'seccaoAvariada' => $request['av_reparacao'],
            'descSolucao' => $request['descsolucao'],
            'user_id' => $request['usuarioSys'],
            'solec_id' => $request['id'],
        ]);
        DB::table('alocacao')
                ->where("alocacao.solec_id", '=', $request['id'])
                ->update(['alocacao.estado' => 'fechado']);

        // update estado
        DB::table('solecitacao')
                ->where("solecitacao.id", '=', $request['id'])
                ->update(['descricao' => $request['descricao'],
                    'solecitacao.estado' => 'fechado']);
        
                // update estado Requisicoes
        DB::table('requisicoes')
                ->where("solec_id", '=', $request['id'])
                ->update(['requisicoes.estado' => 'em_espera']);
        return Redirect::to('v_alocacao');
    }

// FIM O METODO DE INSERCAO NA BASE DE DADOS


    public function __construct() {
        $this->middleware('auth');
    }

}
