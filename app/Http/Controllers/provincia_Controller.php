<?php

namespace Gestao_Assistencias\Http\Controllers;

use Illuminate\Http\Request;
use Gestao_Assistencias\provincia;
use Redirect;

class provincia_Controller extends Controller
{


    
public function index(){
            return view("formularios.form_provincia");
    }

   public function store(Request $request){
            provincia::create([
               'nomepv'   =>$request['nome'],    
         	]);

            return Redirect::to('v_prov');
    }
    
    
    public function __construct() {
        $this->middleware('auth');
    }

}