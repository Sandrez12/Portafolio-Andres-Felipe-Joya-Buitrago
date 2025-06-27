<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Part\TextPart;

class ContactController extends Controller
{
public function send(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    Mail::send([], [], function ($message) use ($validated) {
        $body = "Nombre: {$validated['name']}\n" .
                "Correo: {$validated['email']}\n\n" .
                "Mensaje:\n{$validated['message']}";

        $message->to('joya.andres23@gmail.com')
                ->subject('📬 Nuevo mensaje desde tu portafolio')
                ->setBody($body, 'text/plain');
    });

    return back()->with('success', '¡Gracias, tu mensaje fue enviado correctamente!');
}
}
