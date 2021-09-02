<?php

namespace Gestao_Assistencias\Http\Controllers;

use Illuminate\Http\Request;
use Gestao_Assistencias\Http\Requests\RequisicaoRequest;
use Gestao_Assistencias\requisicoes;
use Gestao_Assistencias\solecitacao;
use Gestao_Assistencias\req_Transacao;
use Gestao_Assistencias\stock;
use Datatables;
use Redirect;
use Session;
use DB;

class requis_Controller extends Controller {

    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */
    public function store(Request $request) {
        $itens = array();
        $data = $request->except(['_token', 'tabpro_partN', 'tabpro_quant']);
        $item = $request->all();
        $rules = array();

        $insItens = true;

        if (isset($item['tabpro_partN'])) {
            for ($i = 0; $i < count($item['tabpro_partN']); $i++) {
                $itens[$i] = [
                    'nivelurgenc' => $request['tipoItenn'],
                    'quantidade' => $item['tabpro_quant'][$i],
                    'estado' => 'aberto',
                    'partN' => $item['tabpro_partN'][$i],
                    'user_id' => $request['userid'],
                    'solec_id' => $request['id'],
                ];
                $insItens = requisicoes::create($itens[$i]);
            }
        }

        DB::table('solecitacao')
                ->where("solecitacao.id", '=', $request['id'])
                ->update(['solecitacao.estado' => 'pendente']);


        if ($insItens) {
            DB::commit();
            Session::flash('message', 'Inserido Com Sucesso com Sucesso');
            return Redirect::to('v_alocacao');
        } else {
            DB::rollBack();
            Session::flash('message', 'Inserido com Exito');
//            return Redirect::to('v_alocacao');
        }
    }

    //Pesquisa Personalisada
//    public function Pesquisar() {
//        $texto = Input::get('partnumber');
//        $pesquisa = stock::where('partN', 'like', '%' . $texto . '%')
//                ->select("cons.*", "st.*")
//                ->groupBy('idcons')
//                ->orderBy('idcons')
//                ->get();
//        return View('formularios.form_tecnico_observacao', compact('pesquisa'));
//    }

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */
    public function edit($id) {
        //selecao de tecnico para alocacao

        $soltecn = DB::table('users as usr')
                        ->leftjoin('especificacao as esp', 'esp.id', '=', 'usr.nivel')
                        ->where('esp.nome', '=', 'Tecnico')
                        ->select("usr.*", "esp.nome")->get();

        $ass = solecitacao::where('id', $id)->first();
//        
//       $stoc_actual=DB::table('stock as st')
//                ->select('st.partN','st.descricao')
//                ->get();

        $query = "select st.* from stock as st inner join movimento as mov where mov.stock_id=st.id group by st.id";
        $stoc_actual = DB::select($query);

        return view('formularios.form_requisicao', compact('ass', 'soltecn', 'stoc_actual'));
    }

    public function getstockdetail($id) {

        $stock_d = DB::table('stock as st')
                ->rightjoin('consumivel as cons', 'cons.idcons', '=', 'st.cons_id')
                ->where('st.partN', $id)
                ->select('cons.*', 'st.partN')
                ->get();

        return $stock_d;
    }

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */
    public function destroy($id) {

        Product::find($id)->delete();



        return response()->json(['success' => 'Product deleted successfully.']);
    }

    public function __construct() {
        $this->middleware('auth');
    }

}
