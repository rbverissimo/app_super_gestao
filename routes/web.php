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

Route::get('/', 'PrincipalController@principal')->name('site.index');

/* Route::get('/sobre-nos', function () {
    return 'Somos lorem ipsum etc';
}); */

Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');

/* Route::get('/contato', function () {
    return 'Contato via cartas apenas. Caixa postal: 666-6969';
}); */

Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', function(){ return 'Login'; })->name('site.login');


// /app
Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){ return 'Clientes'; })->name('app.clientes');
    Route::get('/fornecedores', function(){ return 'Fornecedores'; })->name('app.fornecedores');
    Route::get('/produtos', function(){ return 'Produtos'; })->name('app.produtos');
});
// os names são usados apenas dentro da aplicação

/* Route::get('/contato/{nome}/{categoria_id}', 
function(
    string $nome = 'Desconhecido', 
    int $categoria_id = 1
) {
    echo "Estamos aqui, $nome   -  $categoria_id"; 
})-> where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+'); */

// Route::get($uri, $callback);

//Redirecionamento
Route::get('/rota1', function(){ 
    echo 'Rota 1'; 
})->name('site.rota1');

Route::get('/rota2', function(){ 
    return redirect()->route('/site.rota1'); 
})->name('site.rota2');

// Route::redirect('/rota2', 'rota1');

Route::fallback(function(){
    echo 'Não encontrado! :( </br><a href="/">Clique aqui</a> '; 
});
