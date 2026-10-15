<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortafolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortafolioController::class, 'home'])->name('home');

// Enlace antiguo: ahora todo el portafolio vive en la página principal.
Route::redirect('/portafolio', '/#projects')->name('portfolio');

Route::get('/lang/{lang}', [PortafolioController::class, 'locale'])
    ->whereIn('lang', config('portfolio.locales'))
    ->name('lang.switch');

Route::post('/contact', [ContactController::class, 'send'])
    ->middleware('throttle:5,1')
    ->name('contact.send');
