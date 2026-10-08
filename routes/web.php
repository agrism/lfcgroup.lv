<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\EnterpriseController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\RequestConsultationController;

Route::get('/lang/{locale}', LanguageController::class)->where('locale', 'en|lv|ru')->name('lang.switch');

// Main Index / Landing page
Route::get('/', IndexController::class)->name('index');
Route::get('/{locale}', IndexController::class)->where('locale', 'en|lv|ru')->name('index.locale');

// Enterprise & Business Solutions Subpage
Route::get('/enterprise', EnterpriseController::class)->name('enterprise');
Route::get('/enterprise/{locale}', EnterpriseController::class)->where('locale', 'en|lv|ru')->name('enterprise.locale');

// Consultation & Project Inquiry
Route::post('/request-consultation', RequestConsultationController::class)->name('request-consultation');
