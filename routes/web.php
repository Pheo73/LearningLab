<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\BookingController;

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
    return view('index');
})->name('home');

Route::post('/',[BookingController::class, 'storeForm'], function () {
    return view('index');
})->name('home.save');

Route::get('/learninglab', function () {
    return view('learninglab');
})->name('learninglab');

Route::get('/fablab', function () {
    return view('fablab');
})->name('fablab');

Route::post('/fablab',[BookingController::class, 'storeForm'], function () {
    return view('fablab');
})->name('fablab.save');

Route::get('/boxes', function () {
    return view('boxes');
})->name('boxes');

Route::post('/boxes',[BookingController::class, 'storeForm'], function () {
    return view('boxes');
})->name('boxes.save');


Route::get('/project', function () {
    return view('project');
})->name('project');
