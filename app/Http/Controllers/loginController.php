<?php

namespace Gestao_Assistencias\Http\Controllers;

use Auth;
use Session;
use Redirect;
use Illuminate\Http\Request;
use Gestao_Assistencias\Http\Requests\LoginRequest;
use Gestao_Assistencias\equipamento;

class LoginController extends Controller {

    public function index() {
        return view('form_login');
    }

    public function store(LoginRequest $request) {
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return Redirect::to('PainelInicial');
        }else
        Session::flash('message-error', 'Dados introduzidos sao incorectos');
        return Redirect::to('/');
    }

    
    public function logout() {
        Auth::logout();
        return Redirect::to('/');
    }

    public function update(Request $request, $id) {
        //
    }

}
