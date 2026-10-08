<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function __invoke(Request $request, string $locale): RedirectResponse
    {
        if (in_array($locale, ['en', 'lv', 'ru'])) {
            App::setLocale($locale);
            Session::put('locale', $locale);
            cookie()->queue('locale', $locale, 60 * 24 * 365);
            
            $previousUrl = url()->previous();
            if (str_contains($previousUrl, '/enterprise')) {
                return redirect()->route('enterprise.locale', ['locale' => $locale]);
            }

            return redirect()->route('index.locale', ['locale' => $locale]);
        }

        return redirect()->route('index');
    }
}
