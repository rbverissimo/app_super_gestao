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

/* Route::get('/', function () {
    return 'Olá, seja bem vindo ao curso!!';
}); */

Route::get('/', 'PrincipalController@principal');

/* Route::get('/sobre-nos', function () {
    return 'Somos lorem ipsum etc';
}); */

Route::get('/sobre-nos', 'SobreNosController@sobreNos');

/* Route::get('/contato', function () {
    return 'Contato via cartas apenas. Caixa postal: 666-6969';
}); */

Route::get('/contato', 'ContatoController@contato');

Route::get('/contato/{nome?}/{categoria?}/{assunto?}/{mensagem?}', 
function(string $nome = 'Desconhecido', 
string $categoria = 'Informação', 
string $assunto = 'Sem Assunto', 
string $mensagem = 'Mensagem não informada') {
    echo "Estamos aqui, $nome   -  $categoria  -  $assunto  -  $mensagem"; 
});

// Route::get($uri, $callback);
