<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Mail::send('emails.contact', ['data' => $validated], function ($message) use ($validated) {
            $message->to('joya.andres23@gmail.com') // tu correo real
                    ->subject($validated['subject'])
                    ->from($validated['email'], $validated['name']);
        });

        return back()->with('success', '¡Mensaje enviado correctamente!');
    }
}
