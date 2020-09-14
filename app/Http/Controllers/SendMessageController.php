<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMessage;
use Illuminate\Support\Facades\Mail;


class SendMessageController extends Controller
{
    public function send(Request $request)
    {

	    Mail::to('mickael.souza.if@gmail.com')->send(new SendMessage ($request['name'], $request['email'], $request['message']));
	 
		if(Mail::failures()) {
			return response()->error("Não foi possível enviar a sua mensagem, tente novamente mais tarde");
		}

    }
}
