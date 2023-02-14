<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
            $message->to("vijoysniit@gmail.com");
            $message->subject('Aurega Corporate Service - New Message');
        });        
        return redirect()->back()->with('success','Thank you for contacting us. We will get back to you shortly');        
    }
}
