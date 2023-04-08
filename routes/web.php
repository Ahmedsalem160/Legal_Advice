<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdviceController;
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
//test
Route::get('/main', function () {
    return view('user.main');
});
Route::get('/legalAdvice', function () {
    return view('user.home');
});
Route::get('/lawer/{id}', [HomeController::class, 'showLawer'])->name('show.lawer');
Route::get('/lawer/{id}', [HomeController::class, 'chat'])->name('lawer.chat');
Route::post('/lawer/chatting/{id}', [AdviceController::class, 'store'])->name('advice.store');
//test

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


################################# users Routes ###################################

    
