<?php

use App\Http\Controllers\Frontend\AjaxController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\PageHomeController;
use App\Http\Middleware\SiteSettingMiddleware;
use Illuminate\Support\Facades\Route;

Route::middleware([SiteSettingMiddleware::class])->group(function () {

    Route::get('/', [PageHomeController::class, "index"])->name("index");

    Route::get('/products', [PageController::class, "products"])->name("products");
    Route::get('/kishi-geyim', [PageController::class, "products"])->name("kishi-geyim");
    Route::get('/qadin-geyim', [PageController::class, "products"])->name("qadin-geyim");
    Route::get('/ushaq-geyim', [PageController::class, "products"])->name("ushaq-geyim");
    Route::get('/endirimli-mehsullar', [PageController::class, "saleProducts"])->name("endirimli-mehsullar");
    Route::get('/product/{slug}', [PageController::class, "productDetails"])->name("product_detail");

    Route::get('/about', [PageController::class, "about"])->name("about");

    Route::get('/contact', [PageController::class, "contact"])->name("contact");
    Route::post('/contact/create', [AjaxController::class, "contactCreate"])->name("contact.store");

    Route::get('/cart', [PageController::class, "cart"])->name("cart");

});
