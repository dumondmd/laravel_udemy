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

Route::get('produtos', 'MeuControlador@produtos')->name("rota.produtos");

Route::get('nome', 'MeuControlador@getNome')->name("rota.nome");
Route::get('idade', 'MeuControlador@getIdade')->name("rota.idade");
Route::get('multiplicar/{n1}/{n2}', 'MeuControlador@multiplicar')->name("rota.multiplicar");

Route::resource('clientes', 'ClienteControlador');