<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard' , function (){
    return view('dashboard.dashboard');
});
Route::get('/home' , function (){
    return view('home');
});

Route::get('/register', [\App\Http\Controllers\Authentication\RegisterController::class, 'ShowRegister']);
Route::post('/register', [\App\Http\Controllers\Authentication\RegisterController::class, 'StoreRegister'])->name('register');

//Route::get('/register' , '\App\Http\Controllers\Authentication\RegisterController@ShowRegister')->name('register.show');
//Route::post('/register' , '\App\Http\Controllers\Authentication\RegisterController@StoreRegister')->name('register.perform');

//Route::post('/register' , function (){
//    return view('authentication.register');
//});

Route::get('/login' , function (){
    return view('authentication.login');
});