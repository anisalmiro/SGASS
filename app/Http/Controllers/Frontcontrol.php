<?php

namespace Gestao_Assistencias\Http\Controllers;

use Gestao_Assistencias\Requests;
use Illuminate\Http\Request;
use Gestao_Assistencias\equipamento;
use Gestao_Assistencias\alocacao;
use Gestao_Assistencias\solecitacao;
use DB;
class Frontcontrol extends Controller
{




    public function index(){
          $query="";
          $useraction = DB::table($query);

    //    return view('index', compact('useraction'));
    	//return view('Dashboard');
    }
    
    
}
