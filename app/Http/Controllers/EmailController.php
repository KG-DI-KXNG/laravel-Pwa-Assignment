<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function create()
    {
        return view('pages.email');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'sender_name'  => 'required|string|max:120',
            'sender_email' => 'required|email',
            'subject'      => 'required|string|max:200',
            'message'      => 'required|string|max:2000',
        ]);

        $hodEmail = config('mail.hod_email', env('HOD_EMAIL', 'hod.it@ucc.edu.jm'));

        // Send via Laravel Mail (configure SMTP in .env)
        Mail::raw(
            "From: {$validated['sender_name']} <{$validated['sender_email']}>\n\n{$validated['message']}",
            function ($mail) use ($validated, $hodEmail) {
                $mail->to($hodEmail)
                     ->replyTo($validated['sender_email'], $validated['sender_name'])
                     ->subject($validated['subject']);
            }
        );

        return back()->with('success', 'Your message has been sent to the HOD.');
    }
}
