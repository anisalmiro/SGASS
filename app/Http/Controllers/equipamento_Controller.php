<?php

namespace Gestao_Assistencias\Http\Controllers;

use Illuminate\Http\Request;
use Gestao_Assistencias\modelo;
use Gestao_Assistencias\cliente;
use Gestao_Assistencias\equipamento;
use Redirect;

class equipamento_Controller extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $ls_clientes = cliente::all();
        $modelo = modelo::all();
        $selectedModelo = modelo::first()->id;
        return view("formularios.form_equipamento", compact('ls_clientes', 'modelo'));
    }

    public function store(Request $request) {
        equipamento::create([
            'nr_serie' => $request['nr_serie'],
            'model_id' => $request['modelo_id'],
            'cliente_id' => $request['cliente_id'],
        ]);

        return Redirect::to('v_equipamento');
    }

    public function edit($id) {
        
    }

}
