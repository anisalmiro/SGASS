<?php

namespace Gestao_Assistencias\Http\Controllers;

use Illuminate\Http\Request;
use Gestao_Assistencias\modelo;
use Gestao_Assistencias\marca;
use Redirect;

class modeloController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $marca = marca::all();
        $selectedMarca = marca::first()->id;
        return view("formularios.form_modelo", compact('marca'));
    }

    public function store(Request $request) {
        modelo::create([
            'nome' => $request['nome'],
            'marca_id' => $request['marc'],
        ]);

        return Redirect::to('modelov');
    }

}
