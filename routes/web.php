<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\IndexController::class)->name('index');
Route::post('/request-consultation', \App\Http\Controllers\RequestConsultationController::class)->name('request-consultation');



