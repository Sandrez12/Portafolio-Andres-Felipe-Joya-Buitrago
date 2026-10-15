<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    public function home(): View
    {
        return view('home', [
            'skills' => config('portfolio.skills'),
            'projects' => config('portfolio.projects'),
        ]);
    }

    public function locale(Request $request, string $lang): RedirectResponse
    {
        $request->session()->put('locale', $lang);

        return back(fallback: route('home'));
    }
}
