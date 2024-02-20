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

Route::get('/about-us', function () {
    return view('/about-us');
});

//Route::get('/staff', function () {
//    return view('/staff');
//});

Route::get('/current-members', function () {
    return view('/current-members');
});

Route::get('/summer', function () {
    return view('/summer');
});

Route::get('/crystal-springs', function () {
    return view('/crystal-springs');
});

Route::get('/dance-studios-jackson-ms', function () {
    return view('/dance-studios-jackson-ms');
});

Route::get('/dance-lesson-ridgeland-ms', function () {
    return view('/dance-lesson-ridgeland-ms');
});

Route::get('/dance-madison-ms', function () {
    return view('/dance-madison-ms');
});

Route::get('/dance-clinton-ms', function () {
    return view('/dance-clinton-ms');
});

//Route::get('/tuition', function () {
//    return view('/tuition');
//});

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
Route::get('/contact', function () {
    return view('/contact');
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
