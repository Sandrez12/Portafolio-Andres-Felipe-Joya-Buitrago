<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\PortafolioController;
use App\Http\Controllers\ContactController;

// Página principal (home)
Route::get('/', [PortafolioController::class, 'home'])->name('home');

// Ruta para la sección de portafolio
Route::get('/portafolio', [PortafolioController::class, 'portfolio'])->name('portfolio');

// Ruta para enviar el formulario de contacto
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::post('/contact/send', [App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');

Route::get('/lang/{lang}', function ($lang) {
    if (in_array($lang, ['en', 'es'])) {
        session(['locale' => $lang]);
        app()->setLocale($lang);
    }
    return redirect()->back();
})->name('lang.switch');


// Ruta de prueba para verificar correo
Route::get('/test-mail', function () {
    Mail::raw('Este es un correo de prueba enviado desde Laravel.', function ($message) {
        $message->to('joya.andres23@gmail.com')
                ->subject('📩 Prueba de correo desde Laravel');
    });

    return '✅ Correo enviado con éxito (si la configuración es correcta)';
});