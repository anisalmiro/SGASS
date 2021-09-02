<?php

namespace Gestao_Assistencias\Http\Controllers;

use Illuminate\Http\Request;
use Gestao_Assistencias\especif;
use Redirect;

class especif_Controller extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view("formularios.form_especificacao");
    }

    public function store(Request $request) {
        especif::create([
            'nome' => $request['nome'],
        ]);

        return Redirect::to('v_espec');
    }

}
