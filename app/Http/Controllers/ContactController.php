<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Throwable;

class ContactController extends Controller
{
    public function send(Request $request): RedirectResponse
    {
        // Campo trampa: las personas no lo ven; los bots suelen rellenarlo.
        if ($request->filled('website')) {
            return back()->with('success', __('site.contact.success'));
        }

        $data = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:190'],
            'subject' => ['required', 'string', 'max:160'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        try {
            Mail::to(config('portfolio.contact_email'))->send(new ContactMessage($data));
        } catch (Throwable $e) {
            Log::error('No se pudo enviar el mensaje de contacto', ['error' => $e->getMessage()]);

            return back()->withInput()->with('error', __('site.contact.error'));
        }

        return back()->with('success', __('site.contact.success'));
    }
}
