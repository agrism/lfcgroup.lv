<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->route('locale') 
            ?? Session::get('locale') 
            ?? $request->cookie('locale') 
            ?? config('app.locale', 'lv');

        if (!in_array($locale, ['en', 'lv', 'ru'])) {
            $locale = config('app.locale', 'lv');
        }

        App::setLocale($locale);
        Session::put('locale', $locale);

        return $next($request);
    }
}
