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
    return view('home');
});


Route::get('/adoption', function () {
    return view('adoption');
});

// Route::get('/Home', function () {
//     return view('Home');
// });


Route::get('/signIn', function () {
    return view('signIn');
});

Route::get('/signUp', function () {
    return view('signUp');
});

Route::get('/adoptme', function () {
    return view('adoptme');
});