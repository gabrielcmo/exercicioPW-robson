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

Route::get('/produtos', 'LivroController@index')->name('produtos');

Route::group(['middleware' => ['admin']], function (){
    Route::get('/produto/create', 'LivroController@formAdd')->name('create');
    Route::post('/produto/add', 'LivroController@add');

    Route::get('/produto/remove', 'LivroController@formRemove')->name('remove');
    Route::post('/produto/remove/post', 'LivroController@delete');
});
Route::get('/sobre', function () {
    return view('sobre');
})->name('sobre');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
