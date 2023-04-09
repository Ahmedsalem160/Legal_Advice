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
############################# Auth User ################################
Route::get('/user/login', [HomeController::class, 'login'])->name('get.user.login');
Route::get('/user/register', [HomeController::class, 'register']);
Route::post('/user/login', [HomeController::class, 'postLogin'])->name('user.login');
Route::post('/user/register', [HomeController::class, 'postRegister'])->name('user.register');
############################# End Auth User ############################
Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=>'auth:web'], function(){
    //test
    Route::get('/user/logout', [HomeController::class, 'userLogout'])->name('user.logout');
    Route::get('/main', function () {
        return view('user.main');
    });
    Route::get('/legalAdvice', [HomeController::class, 'index'])->name('user.home');
    Route::get('/lawer/{id}', [HomeController::class, 'showLawer'])->name('show.lawer');
    Route::get('/lawer/chatting/{id}', [HomeController::class, 'chat'])->name('lawer.chat');
    Route::post('/lawer/chatting/{id}', [AdviceController::class, 'store'])->name('advice.store');
    //test
});


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


################################# users Routes ###################################

    
