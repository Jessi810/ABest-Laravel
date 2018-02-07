<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ContactForm;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function message(Request $request)
    {
        $contact = new ContactForm();
        $contact->firstname = $request->get('firstname');
        $contact->lastname = $request->get('lastname');
        $contact->email = $request->get('email');
        $contact->subject = $request->get('subject');
        $contact->message = $request->get('message');
        $contact->save();

        return 0;
    }
}