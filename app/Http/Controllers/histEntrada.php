<?php

namespace Gestao_Assistencias\Http\Controllers;

use Illuminate\Http\Request;

class histEntrada extends Controller {

    public function index() {
        $consumivl = consumivel::paginate(5);
        $stock_sl = DB::table('stock as st')
                ->leftjoin('consumivel as cons', 'cons.idcons', '=', 'st.cons_id')
                ->select("cons.*", "st.*")
                ->get();
        return view("formularios.form_consumivel", compact('stock_sl'));
    }

    public function __construct() {
        $this->middleware('auth');
    }

}
