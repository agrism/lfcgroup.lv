<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class EnterpriseController extends Controller
{
    public function __invoke(Request $request, ?string $locale = null): View
    {
        $activeLocale = $locale ?? Session::get('locale', $request->cookie('locale', 'lv'));
        if (!in_array($activeLocale, ['en', 'lv', 'ru'])) {
            $activeLocale = 'lv';
        }

        App::setLocale($activeLocale);
        Session::put('locale', $activeLocale);
        cookie()->queue('locale', $activeLocale, 60 * 24 * 365);

        return view('enterprise');
    }
}
