<?php

use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/messages', function () {
    return 'Hello World';
 });

Route::get('/test', function () {
    return view('master'); 
});

Route::get('/collection', function () {
    return view('collection
'); 
});
