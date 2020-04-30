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

Route::get('ola/{nome}/{sobrenome}', function( $nome, $sobrenome) {
	echo "Ola! Seja bem vindo, $nome $sobrenome";
})->name("rota.nome.sobrenome");

Route::get('/seunome/{nome?}', function($nome="Sem nome") {
	echo "Ola! Seja bem vindo, $nome!";
})->name("rota.nome.opcional");

Route::get('/rotacomregras/{nome}/{n}', function($nome, $n) {
	for ($i=0; $i < $n; $i++) { 
		echo "Ola! Seja bem vindo, $nome! - $n<br>";
	}
})->where('nome','[A-Za-z]+')
  ->where('n', '[0-9]+')
  ->name("rota.regras");	



Route::prefix('/app')->group(function() {

	Route::get('/', function() {		
		return view('app');
	})->name('app');

	Route::get('/user', function() {
		return view('user');
	})->name("app.user");

	Route::get('/profile', function() {
		return view('profile');
	})->name("app.profile");

});

Route::get('/produtos', function() {
	echo "<h1>Produtos</h1>";
	echo "<ol>";
	echo "<li>Notebook</li>";
	echo "<li>Impressora</li>";
	echo "<li>Mouse</li>";
	echo "</ol>";
})->name('meusprodutos');

Route::get('/todosprodutos', function () {    

    return redirect()->route('meusprodutos');
})->name('redirecionamento');

//----REST----//

Route::get('/requisicoes', function(Request $request) {
	return 'Hello GET';
})->name("rest.get");

Route::post('/requisicoes', function(Request $request) {
	return 'Hello POST';
})->name("rest.post");

Route::delete('/requisicoes', function(Request $request) {
	return 'Hello DELETE';
})->name("rest.delete");

Route::put('/requisicoes', function(Request $request) {
	return 'Hello PUT';
})->name("rest.put");

Route::patch('/requisicoes', function(Request $request) {
	return 'Hello PATCH';
})->name("rest.patch");

Route::options('/requisicoes', function(Request $request) {
	return 'Hello OPTIONS';
})->name("rest.options");