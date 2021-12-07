<?php

namespace App\Http\Controllers;

use App\Mail\MailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth')->except('bar');
    }

    public function foo()
    {
        return view('test/foo');
    }
    public function bar()
    {
        if (!Gate::allows('access-admin')){
            abort(403);
        }

        return view('test/bar');
    }

    public function mailNotification()
    {
        Mail::to('test@users.com')->send(new MailNotification());
        return view('emails.mailNotification');
    }
}
