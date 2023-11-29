<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group(['middleware' => 'auth'], function () {
Route::get('/', function () {
    return view('welcome');
});
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/membre',[MembreController::class,'index'])->name('membre.index');
Route::post('/membre/store',[MembreController::class,'store'])->name('membre.store');
