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

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');

Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@salvar')->name('site.contato');

Route::get('/login/{erro?}', 'LoginController@index')->name('site.login');
Route::post('/login', 'LoginController@autenticar')->name('site.login');


// /app
Route::middleware('autenticacao:padrao,visitante')->prefix('/app')->group(function(){
    Route::get('/home', 'HomeController@index')
        ->name('app.home');
    Route::get('/sair', 'LoginController@sair')
        ->name('app.sair');
    Route::get('/cliente', 'ClienteController@index')
        ->name('app.cliente');
    Route::get('/fornecedores','FornecedorController@index')
        ->name('app.fornecedore');
    Route::get('/produto', 'ProdutoController@index')
        ->name('app.produto');
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
/* Route::get('/rota1', function(){ 
    echo 'Rota 1'; 
})->name('site.rota1'); */

/* Route::get('/rota2', function(){ 
    return redirect()->route('/site.rota1'); 
})->name('site.rota2'); */

// Route::redirect('/rota2', 'rota1');

Route::get('/teste/{param1?}/{param2?}', 
'TesteController@teste')->name('site.teste');

Route::fallback(function(){
    echo 'Não encontrado! :( </br><a href="'.route('site.index').'">Clique aqui</a> '; 
});
