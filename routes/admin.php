<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\LawerController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CourtController;
use App\Http\Controllers\FileController;
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


Route::group(['prefix'=>'admin', 'middleware'=>'guest:admin'], function(){
    Route::get('/login', [AdminController::class, 'login'])->name('get.admin.login');
    Route::post('/login', [AdminController::class, 'postlogin'])->name('admin.login');
});

Route::group(['prefix'=>'admin', 'middleware'=>'auth:admin'], function(){
    //old get dash
    // Route::get('/dashboard', function () {
    //     return view('admin.dashboard');
    // })->name('admin.dash');
    // new get dash
    Route::get('/dashboard', [AdminController::class,'dashboard'])->name('admin.dash');
    Route::get('/logout', [AdminController::class,'adminLogout'])->name('admin.logout');

    
    ###################### Starting File Routes  ##############################
    
    Route::get('/file/create/{issue}', [FileController::class, 'create'])->name('file.create');
    Route::post('/file/upload/{issue}', [FileController::class, 'store'])->name('file.store');
    Route::post('/file/delete/{file}', [FileController::class, 'destroy'])->name('file.destroy');
    //##################  Starting Resource issue, lawer, client, court Routes   #########################
    Route::resource('issue', IssueController::class);
    Route::resource('lawer', LawerController::class);
    Route::resource('client', ClientController::class);
    Route::resource('court', CourtController::class);
    // Route::resource(['client'=> ClientController::class,
    //                 'lawer'=> LawerController::class,
    //                 'court'=> CourtController::class]); 


    
});


 
