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
    return view('auth/register');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])
    ->group(function () {
        Route::get('/dashboard', function () { return view('dashboard');
        })->name('dashboard');
        Route::view('/home','home')->name('home');
        Route::view('/academic_programs','academic_programs')->name('academic_programs');
        Route::view('/user_experience','user_experience')->name('user_experience');
});
