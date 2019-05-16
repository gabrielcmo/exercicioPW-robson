<?php

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

use App\Http\Controllers\AllController as AllC;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/produtos', function () {
    $products = AllC::populate();
    return view('produtos')->with('products', $products);
})->name('produtos');

Route::get('/sobre', function () {
    return view('sobre');
})->name('sobre');
