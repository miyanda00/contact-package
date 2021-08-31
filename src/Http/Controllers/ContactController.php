<?php

namespace Yottabit\Contact\Http\Controllers;
use App\Http\Controllers\Controller;
use Yottabit\Contact\Mail\ContactMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Yottabit\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index ()
    {
        return view('contact::contact');
    }
    public function send (Request $request){
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name));
        Contact::create($request->all());
        return redirect(route('contact'));

    }
}
