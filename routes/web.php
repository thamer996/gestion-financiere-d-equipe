<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\workerController;
use App\Http\Controllers\playerController;
use App\Http\Controllers\earnController;
use App\Http\Controllers\paymentController;
use App\Http\Controllers\mainController;

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

/*Route::view('addplayer','addplayer');
Route::post('submit','App\Http\Controllers\playerController@save');
Route::get('player','App\Http\Controllers\playerController@index');
Route::delete('player/{id}','App\Http\Controllers\playerController@destroy');
*/




Route::get('/auth/logout',[mainController::class,'logout'])->name('auth.logout');

Route::post('/auth/save',[mainController::class,'save'])->name('auth.save');
Route::post('/auth/check',[mainController::class,'check'])->name('auth.check');

Route::group(['middleware'=>['AuthCheck']],function(){
    Route::get('/home',[mainController::class,'home']);
    Route::get('/auth/login',[mainController::class,'login'])->name('auth.login');
    Route::get('/auth/register',[mainController::class,'register'])->name('auth.register');
    Route::resource('workers', workerController::class);
    Route::resource('players', playerController::class);
    Route::resource('earns', earnController::class);
    Route::resource('payments', paymentController::class);
    Route::get('/players.index',[mainController::class,'player']);
});

//Route::post('editworker','App\Http\Controllers\workerController@update');



//Route::view('home','home');


/*Route::view('addearns','addearns');
Route::post('submitearns','App\Http\Controllers\earnController@save');
Route::get('earns','App\Http\Controllers\earnController@index');
Route::delete('earns/{id}','App\Http\Controllers\earnController@destroy');



Route::view('addpayments','addpayments');
Route::post('submitpayments','App\Http\Controllers\paymentController@save');
Route::get('payments','App\Http\Controllers\paymentController@index');
Route::delete('payments/{id}','App\Http\Controllers\paymentController@destroy');
*/



