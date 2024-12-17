<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;


use Illuminate\Http\Request;

class NotificationController extends Controller
{
    
    public function sendEmail(Request $request)
{
    $validated = $request->validate([
        'email' => 'required|email',
        'subject' => 'required|string',
        'message' => 'required|string',
    ]);

    Mail::raw($validated['message'], function ($message) use ($validated) {
        $message->to($validated['email'])
            ->subject($validated['subject']);
    });

    return response()->json(['message' => 'Email sent successfully.']);
}
}
