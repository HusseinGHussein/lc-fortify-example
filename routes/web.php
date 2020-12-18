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

Route::middleware(['auth'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth', 'password.confirm'])->get('/profile', function () {
    return view('profile');
})->name('profile');

Route::middleware(['auth'])->get('/password', function () {
    return view('password');
})->name('password');

Route::middleware(['auth'])->get('/two-factor-auth', function () {
    return view('two-factor-auth');
})->name('two-factor-auth');
