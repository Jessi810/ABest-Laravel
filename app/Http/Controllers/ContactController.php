<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ContactForm;
use App\Http\Requests\ContactFormRequest;

use App\Mail\ContactEmail;
use Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function message(ContactFormRequest $request)
    {
        $contact = new ContactForm();
        $contact->firstname = $request->get('firstname');
        $contact->lastname = $request->get('lastname');
        $contact->email = $request->get('email');
        $contact->subject = $request->get('subject');
        $contact->message = $request->get('message');
        $contact->save();

        Mail::to('info@abesttransport.com')->send(new ContactEmail($contact));

        return 0;
    }
}
