<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[CustomerController::class,'index'])->name('index');
Route::post('/photo',[CustomerController::class,'store']);
// Route::post('/photo');