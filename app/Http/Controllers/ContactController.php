<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactedMessage;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email:filter'],
            'message' => ['required', 'min:10'],
        ]);

        Mail::to(config('mail.to.address'), config('mail.to.name'))
            ->send(new ContactedMessage($request->email, $request->message));

        return redirect('/')
            ->with('contacted', true);
    }
}
