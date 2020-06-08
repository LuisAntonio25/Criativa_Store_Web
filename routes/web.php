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
})->name('welcome');

Route::group(['middleware' => 'auth'], function() {

    Route::get('/suporte', function() {
        return view('suporte');
    })->name('suporte');

});

Route::post('contatar', 'UsuarioController@contatar')->name('contatar');

Route::get('/produto/{id}', function($id) {
    return view('produto', ['id' => $id]);
})->name('produto');

/* Usuário */

Route::get('/login', function() {
    return view('login');
})->name('login');

Route::post('logar', 'UsuarioController@logar')->name('logar');

Route::get('/logout', 'UsuarioController@logout')->name('logout');

Route::get('/cadastro', function() {
    return view('cadastro');
})->name('cadastro');

Route::post('cadastrar', 'UsuarioController@cadastrar')->name('cadastrar');

/* --- */