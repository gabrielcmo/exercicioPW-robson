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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/produtos', function () {
    return view('produtos');
})->name('produtos');

Route::get('/produto/{id}', function (){
    $product['id'] = 1;
    $product['name'] = "Magnum";
    $product['price'] = "9999.99";
    $product['details'] = "Magnum Taurus .357";
    $product['description'] = "Revólver Taurus RT 608 Inox – .357 Magnum – 8 tiros";

    return view('produto')->with('product', $product);
});

Route::get('/sobre', function () {
    return view('sobre');
})->name('sobre');
