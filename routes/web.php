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

Route::get('/about', function () {
    return view('/about');
});

//Route::get('/staff', function () {
//    return view('/staff');
//});

Route::get('/parents', function () {
    return view('/parents');
});

Route::get('/events', function () {
    return view('/events');
});

Route::get('/tuition', function () {
    return view('/tuition');
});

Route::get('/recital', function () {
    return view('/recital');
});

Route::get('/classes', function () {
    return view('/classes');
});

Route::get('/competition-teams', function () {
    return view('/competition-teams');
});

Route::get('/parties', function () {
    return view('/parties');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
