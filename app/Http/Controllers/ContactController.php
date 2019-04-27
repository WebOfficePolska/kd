<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactForm;

class ContactController extends Controller
{


	public function index() {

		return view("kontakt.index");
	}
    //

	public function send(Request $request) {

        request()->validate([

            'mail_name' => 'required|min:2|max:50',
            'mail_address' => 'required|email',
            'mail_phone' => 'required|numeric',            

        ], [

            'mail_name.required' => 'Pole "Imię" jest wymagane.',
            'mail_name.min' => 'Przynajmniej dwa znaki.',
            'mail_name.max' => 'Maksymalnie 50 znaków.',

            'mail_address.required' => 'Pole "adres@mailowy" jest wymagane.',
            'mail_phone.required' => 'Pole "Telefon" jest wymagane.',

        ]);


        if ($request->mail_city==1) {
            $mail_to = "poznan@kamiendesign.pl";
        } elseif ($request->mail_city==2) {
            $mail_to = "gdansk@kamiendesign.pl";
        } elseif ($request->mail_city==3) {
            $mail_to = "gdynia@kamiendesign.pl";
        }



        Mail::to('klaudek@wop.pl')->send(new ContactForm($mail_to, $request->mail_name, $request->mail_address, $request->mail_phone, $request->mail_busines_name, $request->mail_title, $request->mail_text));

        Mail::to($mail_to)->send(new ContactForm($mail_to, $request->mail_name, $request->mail_address, $request->mail_phone, $request->mail_busines_name, $request->mail_title, $request->mail_text));


        //return View('kontakt.confirm');
		return back()->with('success', 'Dziękujemy. Wiadomość została wysłana.');

	}


}
