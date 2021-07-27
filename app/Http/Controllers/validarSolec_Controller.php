<?php

namespace Gestao_Assistencias\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Session;
use Mail;
use DB;

class validarSolec_Controller extends Controller {

    public function index() {

        return view("formularios.form_ValidarSolec");
    }

    public function __construct() {
        $this->middleware('auth');
    }

}
