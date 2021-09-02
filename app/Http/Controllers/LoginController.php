<?php

namespace Gestao_Assistencias\Http\Controllers;

use Auth;
use Session;
use Redirect;
use Illuminate\Http\Request;
use sg_covid19\Http\Requests\LoginRequest;


class LoginController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('index');
    }

    public function store(LoginRequest $request) {
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return Redirect::to('dashb');
        }
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
