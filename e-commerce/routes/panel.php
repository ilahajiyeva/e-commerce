<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\SliderController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>['panelsetting','auth'], 'prefix'=>'panel', 'as'=>'panel.'], function() {

    Route::get('/', [DashboardController::class, 'index'])->name("index");

    Route::get('/slider', [SliderController::class, 'index'])->name("slider.index");

    Route::get('/slider/create', [SliderController::class, 'create'])->name("slider.create");
    Route::post('/slider/store', [SliderController::class, 'store'])->name("slider.store");

    Route::get('/slider/{id}/edit', [SliderController::class, 'edit'])->name("slider.edit");
    
    Route::put('/slider/{id}/update', action: [SliderController::class, 'update'])->name("slider.update");

    Route::delete('/slider/delete', action: [SliderController::class, 'delete'])->name("slider.delete");
    Route::post('/slider-status/update', [SliderController::class, 'status'])->name("slider.status");
});
