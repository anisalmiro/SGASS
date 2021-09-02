<?php

namespace Gestao_Assistencias\Http\Controllers;

use Illuminate\Http\Request;
use Gestao_Assistencias\User;
use Session;
use Redirect;
use DB;

class user_Controller extends Controller
{
    public function create()
    {
      $usuarios = User::all();
              return view('formularios.form_usuario',compact('usuarios'));
    }

    public function __construct(){
       $this ->middleware('auth');
    }

    public function store(Request $request){
            User::create([
               'nameapelido'   =>$request['nome'],
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
        $user = User::find($id);
        return view('edicao.form_user_edit',['user'=>$user], compact('user'));
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
