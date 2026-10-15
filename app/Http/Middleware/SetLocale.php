<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        $locales = config('portfolio.locales');
        $locale = $request->session()->get('locale');

        // Primera visita: usa el idioma del navegador si lo soportamos; si no, el predeterminado.
        if (! in_array($locale, $locales, true)) {
            $locale = $request->getPreferredLanguage($locales) ?? config('app.locale');
        }

        app()->setLocale($locale);

        return $next($request);
    }
}
