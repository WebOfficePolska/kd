<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Stone;
use App\Mail\OrderForm;

class OrderController extends Controller
{


	public function index() {

		return view("zamowienie.index");
	}
    //


    public function form(){
        $stones = Stone::all();
        return view("zamowienie.form", ['stones'=>$stones]);
    }


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



        Mail::to('klaudek@wop.pl')->send(new ContactForm($request->mail_name, $request->mail_address, $request->mail_phone, $request->mail_busines_name, $request->mail_title, $request->mail_text));

        //return View('kontakt.confirm');
		return back()->with('success', 'Dziękujemy. Wiadomość została wysłana.');

	}


}
