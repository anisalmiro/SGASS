<?php

namespace Gestao_Assistencias\Http\Controllers;

use Illuminate\Http\Request;
use Redirect,
    Response,
    DB,
    Config;
use Mail;

class EmailController extends Controller {

    public function sendEmail() {
        $data['title'] = "This is Test Mail Tuts Make";

        Mail::send('emails.email', $data, function($message) {

            $message->to('anisio.bule@gmail.com', 'anisio bule')
                    ->subject('anisio test email laravel');
        });

        if (Mail::failures()) {
            return response()->Fail('Sorry! Please try again latter');
        } else {
            return response()->success('Great! Successfully send in your mail');
        }
    }

}
