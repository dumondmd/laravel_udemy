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
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
})->name("rota.home");

Route::get('/home', function () {
    return view('home');
})->name("rota.bootstrap");

Route::get('/outras', function () {
    return view('outras.exemplo');
})->name("rota.exemplo");

//Route::get('produtos', 'MeuControlador@produtos')->name("rota.produtos");
Route::get('produtos', function() {
	return view('outras.produtos');
})->name("outras.produtos");

Route::get('departamentos', function() {
	return view('outras.departamentos');
})->name("outras.departamentos");

Route::get('nome', 'MeuControlador@getNome')->name("rota.nome");
Route::get('idade', 'MeuControlador@getIdade')->name("rota.idade");
Route::get('multiplicar/{n1}/{n2}', 'MeuControlador@multiplicar')->name("rota.multiplicar");

Route::resource('clientes', 'ClienteControlador');

Route::get('opcoes/{opcao?}', function($opcao=null) {
	return view('outras.opcoes', compact(['opcao']));		
})->name("outras.opcoes");