<?php

namespace Gestao_Assistencias\Http\Controllers;

use Illuminate\Http\Request;

class logSaidasStockController extends Controller {

    //

    public function __construct() {
        $this->middleware('auth');
    }

}
