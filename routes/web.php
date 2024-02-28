<?php

use App\Http\Controllers\HomeController;
use App\Http\Livewire\Website\About;
use App\Http\Livewire\Website\Home;
use App\Http\Livewire\Website\Stock;
use Illuminate\Support\Facades\Route;




// =============================== DESKTOP ================================


Route::group(['middleware' => 'preventBackButton'], function () {



    // 1: home
    Route::get('/', Home::class)->name('website.home');




    // 2: stock
    Route::get('/stock', Stock::class)->name('website.stock');




    // 3: about
    Route::get('/about', About::class)->name('website.about');


});
