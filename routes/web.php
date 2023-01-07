<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\CatsController;
use App\Http\Controllers\Web\ExamController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Web\SkilsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/', function () {
    return view('web.index');
});

*/


Route::get('/',[HomeController::class,'index'])->name('Home');

Route::get('cat/show/{id}',[catsController::class,'show'])->name('cat.show');

/* dashboard Controller */
//Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth'])->name('dashboard');
Route::get('/contact',[ContactController::class,'index'])->name('contact.create');
Route::POST('/contact/message',[ContactController::class,'send'])->name('contact.store');

Route::get('/skills/show/{id}',[SkilsController::class,'show'])->name('skills.show');

Route::get('/exams/show/{id}',[ExamController::class,'show'])->name('exams.show');
Route::get('/exams/questions/{id}',[ExamController::class,'questions'])->name('exams.questions');


