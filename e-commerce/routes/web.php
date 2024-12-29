<?php

use App\Http\Controllers\Frontend\PageHomeController;
use App\Http\Controllers\Frontend\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageHomeController::class, 'index'])->name("anasehife");

Route::get('/haqqimizda', [PageController::class, 'about'])->name("haqqimizda");

Route::get('/elaqe', [PageController::class, 'contact'])->name("elaqe");

Route::get('/mehsullar', [PageController::class, 'products'])->name("mehsullar");
Route::get('/kishi-geyim', [PageController::class, 'products'])->name("kishimehsullar");
Route::get('/qadin-geyim', [PageController::class, 'products'])->name("qadinmehsullar");
Route::get('/ushaq-geyim', [PageController::class, 'products'])->name("ushaqmehsullar");
Route::get('/endirimdekiler', [PageController::class, 'saleproducts'])->name("endirimlimehsullar");
Route::get('/mehsuldetal', [PageController::class, 'prdctdetail'])->name("mehsuldetal");

Route::get('/sebet', [PageController::class, 'cart'])->name("sebet");

