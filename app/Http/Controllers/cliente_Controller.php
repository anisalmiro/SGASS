<?php

namespace Gestao_Assistencias\Http\Controllers;

use Illuminate\Http\Request;
use Gestao_Assistencias\cliente;
use Gestao_Assistencias\distrito;
use Gestao_Assistencias\provincia;
use Gestao_Assistencias\equipamento;
use Gestao_Assistencias\ls_equipament;
use DB;
use Redirect;



class cliente_Controller extends Controller
{

    public function __construct()
    
    {
        $this->middleware('auth');
    }


     public function index()
    {
       $ls_clientes = DB::table('cliente as cli')
           ->leftjoin('distrito as dt', 'dt.id', '=', 'cli.distri_id')
           ->leftjoin('provincia as pv', 'pv.id', '=', 'dt.prov_id')
           ->select("cli.*", "pv.*","dt.*" )            
            ->paginate(4);
         
    	      $provincia = provincia::pluck('nomepv', 'id');
             
              return view('formularios.form_cliente', compact('ls_clientes','provincia'));
    }

    public function getDistrito(Request $request, $id){
      if($request->ajax()){
        $distrito = cliente::distritos($id);
        return response()->json($distrito);
      }

    }


   public function store(Request $request){
            cliente::create([
               'nomeemp'   =>$request['nomeemp'],
               'tipo'   =>$request['tipo'],
               'email'   =>$request['email'],
               'nuit'   =>$request['nuit'],
               'tel'   =>$request['tell'],
               'bairro'   =>$request['bairro'], 
               'avenida'   =>$request['avenida'],
               'distri_id'   =>$request['distrito'],  
         	]);

      return Redirect::to('v_cliente');
    }
}
