<?php

namespace Gestao_Assistencias\Http\Controllers;

use Illuminate\Http\Request;
use Gestao_Assistencias\stock;
use Gestao_Assistencias\movimento;
use DB;
use Session;
use Redirect;
use PDF;

class movimento_Controller extends Controller {

    public function index() {
        $stock_list = $this->get_stock_list();
        //  $consumivl= consumivel::paginate(5);
        $stock_sl = DB::table('stock as st')
                ->leftjoin('movimento as mov', 'st.id', '=', 'mov.stock_id')
                ->select("st.*", "mov.*")
                ->paginate(100);
        return view("formularios.form_stock")->with('stock_sl', $stock_sl);
    }

//metodo para buscar a lista de dados a serem convertidos
    public function get_stock_list() {
        $stock_sl = DB::table('stock as st')
                ->leftjoin('movimento as mov', 'st.id', '=', 'mov.stock_id')
                ->select("st.*", "mov.*")
                ->get();
        return $stock_sl;
    }

    public function edit($id) {

        $st = stock::find($id);

        return view('edicao.form_stock_adicionar', ['st' => $st]);
    }

    public function show() {
        $sl_partN = stock::all();
       
        return view("edicao.form_stock_inicializar", compact('sl_partN'));
        
    }

public function getAutocompleteData(Request $request){
        if($request->has('term')){
            return stock::where('partN','like','%'.$request->input('term').'%')->get();
        }
    }

    public function store(Request $request) {
        //Insert tabela log
        movimento::create([
            'entrada' => $request['quant'],
            'saida' => 0,
            'numeroDu' => $request['numeroDu'],
            'estado' => 'entrada',
            'stock_id' => $request['id_iten'],
            'user_id' => $request['usuarioSys'],
        ]);

        Session::flash('message', 'Dados Actualisado com Sucesso');
        return Redirect::to('/inicial_stock');
    }

    public function update(Request $request, $id) {

        //Insert tabela log
        movimento::create([
            'entrada' => $request['quant'],
            'saida' => 0,
            'numeroDu' => $request['numeroDu'],
            'estado' => 'entrada',
            'stock_id' => $id,
            'user_id' => $request['usuarioSys'],
        ]);

        Session::flash('message', 'Dados Actualisado com Sucesso');
        return Redirect::to('/v_consumivel');
    }

    public function __construct() {
        $this->middleware('auth');
    }

}
