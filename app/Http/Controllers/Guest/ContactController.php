<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Mail\SendNewMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('guest.contact');
    }

    public function  contactMailSender(Request $request){
        Mail::to("admin@boolpress.it")->send(new SendNewMail($request->guestName,$request->guestEmail, $request->guestMessage));

        return redirect()->route('guest.contact')->with('message', "Grazie $request->guestName! Il messaggio è stato inviato correttamente.");

    }

    public function mailSent(){

        return redirect()->route('guest.contact')->with('message', 'Il messaggio è stato inviato correttamente.');
    }
}
