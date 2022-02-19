<?php

use App\Http\Controllers\Authentication\LoginController;
use App\Http\Controllers\Authentication\LogoutController;
use App\Http\Controllers\Authentication\RegisterController;
use App\Http\Controllers\DashboardController;
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
    Route::get('/', function () {return view('welcome');});
    Route::get('/home' , function (){return view('home');});

    Route::get('/dashboard' , [DashboardController::class,'Show']);
    Route::get('/admin-dashboard' , [DashboardController::class,'admin']);

    Route::get('/register', [RegisterController::class, 'Show']);
    Route::post('/register', [RegisterController::class, 'Register'])->name('register');

    Route::get('/login' , [LoginController::class, 'Show']);
    Route::post('/login' , [LoginController::class, 'Login'])->name('login');

    Route::get('/logout' , [LogoutController::class, 'Logout']);
});





