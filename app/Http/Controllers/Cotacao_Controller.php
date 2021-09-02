<?php

namespace Gestao_Assistencias\Http\Controllers;

use Illuminate\Http\Request;

class Cotacao_Controller extends Controller {

    public function index() {

        return view("formularios.form_cotacaoEmp");
    }

    public function indexEP() {
        return view("formularios.form_cot");
    }

    public function store(Request $request) {
        
    }

    public function __construct() {
        $this->middleware('auth');
    }

}
