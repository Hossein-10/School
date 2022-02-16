<?php

use App\Http\Controllers\Authentication\LoginController;
use App\Http\Controllers\Authentication\LogoutController;
use App\Http\Controllers\Authentication\RegisterController;
use Illuminate\Support\Facades\Route;

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
Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/dashboard' , function (){return view('dashboard.dashboard');});

    Route::get('/home' , function (){return view('home');});

    Route::get('/register', [RegisterController::class, 'Show']);
    Route::post('/register', [RegisterController::class, 'Register'])->name('register');

    Route::get('/login' , [LoginController::class, 'Show']);
    Route::post('/login' , [LoginController::class, 'Login'])->name('login');

    Route::get('/logout' , [LogoutController::class, 'Logout']);

});


//Route::get('/register' , '\App\Http\Controllers\Authentication\RegisterController@ShowRegister')->name('register.show');
//Route::post('/register' , '\App\Http\Controllers\Authentication\RegisterController@StoreRegister')->name('register.perform');

//Route::post('/register' , function (){
//    return view('authentication.register');
//});


