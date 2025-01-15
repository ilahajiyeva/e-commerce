<?php

use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Frontend\PageHomeController;
use App\Http\Controllers\Frontend\PageController;


Route::group(['middleware'=>'sitesetting'], function() {

    Route::get('/', [PageHomeController::class, 'index'])->name("anasehife");

    Route::get('/haqqimizda', [PageController::class, 'about'])->name("haqqimizda");

    Route::get('/elaqe', [PageController::class, 'contact'])->name("elaqe");
    Route::post('/elaqe/save', [AjaxController::class, 'contactSave'])->name("elaqe.save");

    Route::get('/mehsullar', [PageController::class, 'products'])->name("mehsullar");
    Route::get('/mehsul/{slug}', [PageController::class, 'prdctdetail'])->name("mehsuldetal");

    Route::get('/kishi/{slug?}', [PageController::class, 'products'])->name("kisimehsullar");
    Route::get('/qadin/{slug?}', [PageController::class, 'products'])->name("qadinmehsullar");
    Route::get('/ushaq/{slug?}', [PageController::class, 'products'])->name("usaqmehsullar");
    Route::get('/endirimdekiler', [PageController::class, 'saleproducts'])->name("endirimlimehsullar");

    Route::get('/sebet', [CartController::class, 'index'])->name("sebet");
    Route::post('/sebet/add', [CartController::class, 'add'])->name("sebet.add");
    Route::post('/sebet/remove', [CartController::class, 'remove'])->name("sebet.remove");

    Auth::routes();

    Route::get('/logout', [AjaxController::class, 'logout'])->name("logout");
});
