<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [
	'uses' => 'ProdutosController@index',
	'view' => 'welcome'
])->name('welcome');

Route::middleware('login')->group(function() {
	Route::get('/suporte', function() {
		return view('suporte');
    })->name('suporte');
});

Route::post('contatar', 'UsuarioController@contatar')->name('contatar');

Route::get('/produto/{id}', 'ProdutosController@show')->name('produto');

/* Administração */

Route::middleware('adminAccess')->group(function() {
	Route::prefix('admin')->group(function() {
		Route::get('/', function() {
			return view('admin/index');
		})->name('admin');
		
		Route::prefix('produtos')->group(function() {
			Route::get('/', [
				'uses' => 'ProdutosController@index',
				'view' => 'admin/produtos/index'
			])->name('admin.produtos.index');
			
			Route::get('/novo', function() {
				return view('admin/produtos/novo');
			})->name('admin.produtos.novo');
			
			Route::post('produto.cadastrar', 'ProdutosController@create')->name('produto.cadastrar');
			
			Route::get('/editar/{id}', 'ProdutosController@editar')->name('admin.produtos.editar');
			
			Route::post('produto.editar', 'ProdutosController@update')->name('produto.editar');
			
			Route::get('/apagar/{id}', 'ProdutosController@destroy')->name('admin.produtos.apagar');
		});
		
		Route::prefix('usuarios')->group(function() {
			Route::get('/', [
				'uses' => 'UsuariosController@index',
				'view' => 'admin/usuarios/index'
			])->name('admin.usuarios.index');
			
			Route::get('/novo', function() {
				return view('admin/usuarios/novo');
			})->name('admin.usuarios.novo');
			
			Route::get('/editar/{id}', 'UsuariosController@editar')->name('admin.usuarios.editar');
			
			Route::get('/apagar/{id}', 'UsuariosController@destroy')->name('admin.usuarios.apagar');
			
			Route::post('usuario.editar', 'UsuariosController@update')->name('usuario.editar');
		});
	});
});

/* Usuários */

Route::get('/login', function() {
    return view('login');
})->name('login');

Route::post('logar', 'UsuariosController@store')->name('logar');

Route::get('/logout', 'UsuariosController@logout')->name('logout');

Route::get('/cadastro', function() {
    return view('cadastro');
})->name('cadastro');

Route::post('cadastrar', 'UsuariosController@create')->name('cadastrar');

/* --- */
