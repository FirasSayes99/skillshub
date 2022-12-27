<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Dashboard\CatsController;




/* dashboard Controller */
Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth'])->name('dashboard');


Route::resource('/dashboard/cats',CatsController::class);


?>