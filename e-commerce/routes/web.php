<?php

use App\Http\Controllers\Frontend\AjaxController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\PageHomeController;
use App\Http\Middleware\SiteSettingMiddleware;
use Illuminate\Support\Facades\Route;

Route::middleware([SiteSettingMiddleware::class])->group(function () {

    Route::get('/', [PageHomeController::class, "index"])->name("index");

    Route::get('/products', [PageController::class, "products"])->name("products");
    Route::get('/kişi-geyim', [PageController::class, "products"])->name("kişi-geyim");
    Route::get('/qadın-geyim', [PageController::class, "products"])->name("qadın-geyim");
    Route::get('/uşaq-geyim', [PageController::class, "products"])->name("uşaq-geyim");
    Route::get('/endirimli-məhsullar', [PageController::class, "saleProducts"])->name("endirimli-məhsullar");
    Route::get('/məhsul/detalı', [PageController::class, "productDetails"])->name("məhsul-detalı");

    Route::get('/about', [PageController::class, "about"])->name("about");

    Route::get('/contact', [PageController::class, "contact"])->name("contact");
    Route::post('/contact/create', [AjaxController::class, "contactCreate"])->name("contact.store");

    Route::get('/cart', [PageController::class, "cart"])->name("cart");

});
