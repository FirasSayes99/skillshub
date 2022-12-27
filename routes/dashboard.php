<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Dashboard\CatsController;




/* dashboard Controller */
//Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth'])->name('dashboard');

Route::get('dashboard/cats/archive',[CatsController::class,'archive'])->name('cats.archive');
Route::get('dashboard/cats/restore/{id}',[CatsController::class,'restore'])->name('cats.restore');
Route::get('dashboard/cats/force/{id}',[CatsController::class,'force'])->name('cats.force');

Route::resource('/dashboard/cats',CatsController::class);


?>