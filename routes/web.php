<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

// main page
Route::get('/', [FrontendController::class, 'index'])->name('index');
