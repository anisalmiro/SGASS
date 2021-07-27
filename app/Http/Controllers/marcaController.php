<?php

namespace Gestao_Assistencias\Http\Controllers;

use Illuminate\Http\Request;
use Gestao_Assistencias\marca;
use Redirect;

class marcaController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view("formularios.form_marca");
    }

    public function store(Request $request) {
        marca::create([
            'nome' => $request['nome'],
        ]);

        return Redirect::to('v_prov');
    }

}
