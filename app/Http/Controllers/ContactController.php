<?php

namespace Givel\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Givel\Http\Requests\ContactRequest;

class ContactController extends Controller
{
	public function index()
	{
        return view('contact');
	}
    public function sendEmail(ContactRequest $request)
    {
        Mail::send('emails.contact', ['request' => $request], function ($m) {
            $m->to('gersonrs@live.com', 'eu mesmo')->subject('teste');
        });
        return redirect()->route('contato')->with('status', 'Profile updated!');
    }
}
