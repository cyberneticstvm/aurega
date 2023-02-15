<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Config;
use Mail;

class EmailController extends Controller
{
    public function email(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email:filter',
            'contact' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $input = $request->all(); $to_email = Config::get('app.mail_to_address');
        Mail::send('email', ['user' => $input], function($message) use($to_email){
            $message->to($to_email);
            $message->subject('Aurega Corporate Service - New Message');
        });        
        return redirect()->back()->with('success','Thank you for contacting us. We will get back to you shortly');        
    }

    public function index(){ 
      Mail::to('vijoysasidharan@yahoo.com')->send(new ContactMail()); 
      if (Mail::failures()) {
           return response()->Fail('Sorry! Please try again latter');
      }else{
           return response()->success('Great! Successfully send in your mail');
         }
    } 
}
