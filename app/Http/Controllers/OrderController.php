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

            // 'customer_name' => 'required|min:2|max:150',
            // 'customer_mail' => 'required|email',
            // 'mail_phone' => 'required|numeric',            

        ], [

            // 'customer_name.required' => 'Pole "Imię, Nazwisko" jest wymagane.',
            // 'customer_name.min' => 'Przynajmniej dwa znaki.',
            // 'customer_name.max' => 'Maksymalnie 150 znaków.',

            // 'customer_mail.required' => 'Pole "Email" jest wymagane.',            

        ]);


        //Mail::to('klaudek@wop.pl')->send(new OrderForm($request));

        return View('zamowienie.confirmorder');
		

	}



    public function upload(Request $request){
        
        $request->validate([
             //'project_file' => 'image|mimes:jpmax:22048000000000',
        ]);


        $fileName = "fileName".time().'.'.request()->project_file->getClientOriginalExtension();

        $request->project_file->storeAs('projects',$fileName);

        ///'message' => $request->get('customer_name')

        return response()->json([
            'project_file' => $fileName
        ]);

    }



}
