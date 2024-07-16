<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('footer.contacts.contact');
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['name', 'email',  'content']);
        return view('footer.contacts.confirm', compact('contact'));
    }

    public function store(Request $request)
    {
        $contact = $request->only(['name', 'email', 'content']);
        return view('footer.contacts.store');
    }


}
