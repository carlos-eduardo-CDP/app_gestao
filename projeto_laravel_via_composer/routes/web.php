<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\SobreNosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;

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

Route::get('/', [PrincipalController::class, 'acrionPrincipal'])->name('site.index');
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', function (){return 'Login';})->name('site.login');

Route::prefix('/app')->group(function (){
    Route::get('/clientes', function (){return 'Clentes';})->name('app.clientes');
    Route::get('/fornecedores', [FornecedorController::class, 'actionIndex'])->name('app.fornecedores');
    Route::get('/produtos', function (){return 'Produtos';})->name('app.produtos');
});
Route::get('/testar-conexao', function () {
    try {
        DB::connection()->getPdo();
        return 'Conexão bem-sucedida!';
    } catch (\Exception $e) {
        return 'Erro na conexão: ' . $e->getMessage();
    }
});


Route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\TesteController::class, 'teste'])->name('teste');



Route::fallback(function (){
    echo 'A rota acessada não existe. <a href="'.\route('site.index').'"> CLIEQUE AQUI </a>';
});
