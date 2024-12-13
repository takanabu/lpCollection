<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('footer.contacts.contact');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['name', 'email',  'content']);
        return view('footer.contacts.confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['name', 'email', 'content']);
        contact::create($contact);
        return view('footer.contacts.store');
    }


}
