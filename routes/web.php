<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\RequestConsultationController;

Route::get('/lang/{locale}', LanguageController::class)->where('locale', 'en|lv|ru')->name('lang.switch');

Route::get('/', IndexController::class)->name('index');
Route::get('/{locale}', IndexController::class)->where('locale', 'en|lv|ru')->name('index.locale');

Route::post('/request-consultation', RequestConsultationController::class)->name('request-consultation');



