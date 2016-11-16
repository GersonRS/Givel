<?php

namespace Givel\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Givel\Http\Requests\ContactRequest;

class ContactController extends Controller
{
	public function index()
	{

	}
    public function sendEmail()
    {
        Mail::send('emails.reminder', ['request' => 'aaaa'], function ($m) {
            $m->from('hello@app.com', 'Your Application');

            $m->to('gersonrs@live.com', 'eu mesmo')->subject('Your Reminder!');
        });
        return redirect()->route('home');
    }
}
