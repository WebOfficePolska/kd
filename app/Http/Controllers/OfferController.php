<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactForm;

class OfferController extends Controller
{
    
	public function index() {

		return view('oferta.index');
	}


	public function send(Request $request) {

        Mail::to('kontakt@wop.pl')->send(new ContactForm($request->email_from, $request->message_title, $request->message_text));


        return View('kontakt.confirm');

	}


}
