<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/store',[AppointmentController::class,'store']);
Route::get('/appointment',[AppointmentController::class,'appointment']);

// Route::get('/admin',[AdminController::class,'index']);
// Route::get('/delete/{id}', [AdminController::class, 'destroy']);
Route::get('/delete/{id}', [App\Http\Controllers\HomeController::class, 'destroy']);