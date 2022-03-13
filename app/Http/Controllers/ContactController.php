<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function contact()
    {
        return view('welcome');
    }

    public function contactSubmit(Request $request)
    {
        Mail::send('email.mail',[
            'name' => $request->name,
            'email' => $request->email,
            'msg' => $request->msg
        ],function($mail) use($request){
            $mail->from(env('MAIL_FROM_ADDRESS'),$request->email);
            $mail->to('contact@bocasdao.finance')->subject('BocasDao - Contact web');
            Session::flash('message', '	👋 Gracias por ponerte en contacto conmigo!! En breve le responderé.. ');
        });

        return redirect()->route('welcome');

    }



}
