<?php

namespace Gestao_Assistencias\Http\Controllers;

use Illuminate\Http\Request;
use Gestao_Assistencias\User;
use Gestao_Assistencias\especif;
use Session;
use Redirect;
use DB;

class user_Controller extends Controller
{

     public function __construct()
    
    {
        $this->middleware('auth');
    }

    public function create()
    {

      $especif = especif::all();
      $selectedEspecif = especif::first()->id;

      $users= DB::table('users as us')
                ->leftjoin('especificacao as esp', 'esp.id', '=', 'us.nivel')
                ->select('esp.*','us.*')
                ->paginate(4);
              return view('formularios.form_usuario',compact('users','especif'));
    }

    public function store(Request $request){
            User::create([
               'nameapelido'   =>$request['nameapelido'],
               'username'      =>$request['username'],
               'email'         =>$request['email'],
               'password'      =>$request['password'],
               'status'        =>$request['estado'],
               'nivel'         =>$request['nivel'],      

         	]);

      return Redirect::to('usuario');
    }

    public function edit($id)
    {
        $especif = especif::all();
        $selectedEspecif = especif::first()->id;
        $user = User::find($id);
        return view('edicao.form_user_edit', ['user' => $user], compact('especif'));
    }


    public function update(Request $request, $id)
    {

        $user=User::find($id);
        $user->fill($request->all());
        $user->save();
        Session::flash('message','Usuario Actualisado com Sucesso');
        return Redirect::to('/usuario'); 
    }
}
 