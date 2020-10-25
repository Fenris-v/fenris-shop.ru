<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('main');

Route::get('/category', [MainController::class, 'index'])->name('category');

Auth::routes();
