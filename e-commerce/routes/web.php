<?php

use App\Http\Controllers\Frontend\PageHomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageHomeController::class, 'index'])->name("anasehife");
