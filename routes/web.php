<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\PortafolioController;
use App\Http\Controllers\ContactController;

// Página principal (home)
Route::get('/', [PortafolioController::class, 'index'])->name('home');

// Ruta para enviar el formulario de contacto
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// Cambio de idioma
Route::get('/lang/{lang}', function ($lang) {
    if (in_array($lang, ['es', 'en'])) {
        session(['locale' => $lang]);
        app()->setLocale($lang);
    }
    return redirect()->back();
})->name('lang.switch');

// Ruta de prueba para verificar correo
Route::get('/prueba-correo', function () {
    Mail::raw('Este es un correo de prueba desde Laravel.', function ($message) {
        $message->to('joya.andres23@gmail.com')
                ->subject('Correo de prueba');
    });

    return 'Correo enviado correctamente.';
});
