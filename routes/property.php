<?php

use App\Http\Controllers\PropertyController;

use Illuminate\Support\Facades\Route;


Route::get('property/{property}/accept',[PropertyController::class,'accept'])->name('property.accept');// defined GET for easy impelemntation

Route::resource('property',PropertyController::class)->only([
    'show','create','store','index'
]);



