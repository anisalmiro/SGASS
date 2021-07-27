<?php

namespace Gestao_Assistencias\Http\Controllers;

use Illuminate\Http\Request;
use Gestao_Assistencias\avaria;
use Redirect;

class avaria_Controller extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view("formularios.form_avaria");
    }

    public function store(Request $request) {
        avaria::create([
            'tipo' => $request['tipo'],
            'descricao' => $request['descricao'],
        ]);

        return Redirect::to('v_avaria');
    }

}
