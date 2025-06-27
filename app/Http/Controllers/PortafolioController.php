<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function sendContact(Request $request)
    {
        // Validar
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Aquí puedes enviar correo, guardar en base de datos, etc.
        return back()->with('success', '¡Mensaje enviado con éxito!');
    }

}
