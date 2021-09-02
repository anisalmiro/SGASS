<?php

namespace Gestao_Assistencias\Http\Controllers;

use Illuminate\Http\Request;
use Gestao_Assistencias\stock;
use Gestao_Assistencias\movimento;
use DB;
use Session;
use Redirect;
use PDF;

class stock_Controller extends Controller
{
        public function index() {
        $consumivl = movimento::paginate(5);
        //$query="select st.*, sum(mov.entrada) as total from stock as st inner join movimento as mov where mov.stock_id=st.id group by st.id";
        $query="select st.*, sum(mov.entrada)-sum(mov.saida) as total from stock as st inner join movimento as mov where mov.stock_id=st.id group by st.id";
        $stock_sl = DB::select($query);
                
        return view("formularios.form_consumivel", compact('stock_sl'));
    }

    public function store(Request $request) {
        stock::create([
            'tipo' => $request['tipo'],
            'descricao' => $request['nome'],
            'partN' => $request['partn'],
            'cor' => $request['cor'],
        ]);
        
        return Redirect::to('v_consumivel');
    }

    public function __construct() {
        $this->middleware('auth');
    }
}
