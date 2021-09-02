<?php

namespace Gestao_Assistencias\Http\Controllers;

use Illuminate\Http\Request;
use Gestao_Assistencias\provincia;
use Gestao_Assistencias\distrito;
use Redirect;

class distrito_Controller extends Controller
{

       public function __construct()
    
    {
        $this->middleware('auth');
    }

    
public function index(){
   $provincia = provincia::all();
   $selectedProvincia = provincia::first()->id;
            return view("formularios.form_distrito",compact('provincia'));
    }


   public function store(Request $request){
            distrito::create([
               'nome'   =>$request['nome'],
               'prov_id'   =>$request['marc'],  
               
         	]);

     return Redirect::to('v_dist');
    }
}
