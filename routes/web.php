<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\MarcasController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\TransportadorasController;
use App\Http\Controllers\FornecedoresController;
use App\Http\Controllers\EnderecosController;



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
/*
Route::get('/', function () {
    //return view('welcome');
    return redirect()->route('produtos_vitrine');
});*/

    Route::get('/dashboard', function() {
        return view ('dashboard');
    })->middleware(['auth'])->name('dashboard');

        Route::middleware(['auth'])->group(function(){
            Route::get('/ifsport/store', [ClientesController::class, 'store'])->name('principal');
            /*  ---------------------------------------Endereços---------------------------------------------- */
            Route::get('/ifsport/enderecos/novo', [EnderecosController::class, 'cadastro'])->name('enderecos_cadastro');
            Route::post('/ifsport/enderecos/novo', [EnderecosController::class, 'novo'])->name('enderecos_novo');
            Route::get('/ifsport/enderecos/listar', [EnderecosController::class, 'listar'])->name('enderecos_listar');
            Route::get('/ifsport/enderecos/alterar/{id}', [EnderecosController::class, 'alterar'])->name('enderecos_alterar');
            Route::post('/ifsport/enderecos/alterar/', [EnderecosController::class, 'salvar'])->name('enderecos_salvar');
            Route::get('/ifsport/enderecos/excluir/{id}', [EnderecosController::class, 'excluir'])->name('enderecos_excluir');

/*
            Route::get('/ifsport/produtos/novo', [ProdutosController::class, 'cadastro'])->name('produtos_novo');
            Route::post('/ifsport/produtos/novo', [ProdutosController::class, 'novo'])->name('produtos_salvar');

            Route::get('/ifsport/produtos/listar', [ProdutosController::class, 'listar'])->name('produtos_listar');
            Route::get('/ifsport/produto/{slug}', [ProdutosController::class, 'exibir'])->name('produtos_exibir');*/
             /*  ---------------------------------------Categorias---------------------------------------------- */
            //Route::get('/ifsport/categorias/novo', [CategoriasController::class, 'cadastro'])->name('categorias_cadastro');
            Route::post('/ifsport/categorias/novo', [CategoriasController::class, 'novo'])->name('categorias_novo');
            Route::get('/ifsport/categorias/listar', [CategoriasController::class, 'listar'])->name('categorias_listar');
            Route::get('/ifsport/categorias/excluir/{id}', [CategoriasController::class, 'excluir'])->name('categorias_excluir');

            Route::middleware('verifica.nivel')->group(function () {
                /*  ---------------------------------------Produtos---------------------------------------------- */
                Route::get('/ifsport/produtos/novo', [ProdutosController::class, 'cadastro'])->name('produto_cadastro');
                Route::post('/ifsport/produtos/novo', [ProdutosController::class, 'novo'])->name('produtos_novo');
                Route::get('/ifsport/produtos/listar', [ProdutosController::class, 'listar'])->name('produtos_listar');
                Route::get('/ifsport/produtos/alterar/{id}', [ProdutosController::class, 'alterar'])->name('produto_alterar');
                Route::post('/ifsport/produtos/alterar/', [ProdutosController::class, 'salvar'])->name('produto_salvar');
                Route::get('/ifsport/produtos/excluir/{id}', [ProdutosController::class, 'excluir'])->name('produtos_excluir');
                Route::get('/ifsport/produto/{slug}', [ProdutosController::class, 'exibir'])->name('produtos_exibir');

                /*  ---------------------------------------Transportadoras---------------------------------------------- */
                Route::get('/ifsport/transportadoras/novo', [TransportadorasController::class, 'cadastro'])->name('transportadoras_cadastro');
                Route::post('/ifsport/transportadoras/novo', [TransportadorasController::class, 'novo'])->name('transportadoras_novo');
                Route::get('/ifsport/transportadoras/listar', [TransportadorasController::class, 'listar'])->name('transportadoras_listar');
                Route::get('/ifsport/transportadoras/alterar/{id}', [TransportadorasController::class, 'alterar'])->name('transportadoras_alterar');
                Route::post('/ifsport/transportadoras/alterar/', [TransportadorasController::class, 'salvar'])->name('transportadoras_salvar');
                Route::get('/ifsport/transportadoras/excluir/{id}', [TransportadorasController::class, 'excluir'])->name('transportadoras_excluir');
                /*  ---------------------------------------Fornecedoras---------------------------------------------- */
                Route::get('/ifsport/fornecedores/novo', [FornecedoresController::class, 'cadastro'])->name('fornecedores_cadastro');
                Route::post('/ifsport/fornecedores/novo', [FornecedoresController::class, 'novo'])->name('fornecedores_novo');
                Route::get('/ifsport/fornecedores/listar', [FornecedoresController::class, 'listar'])->name('fornecedores_listar');
                Route::get('/ifsport/fornecedores/alterar/{id}', [FornecedoresController::class, 'alterar'])->name('fornecedores_alterar');
                Route::post('/ifsport/fornecedores/alterar/', [FornecedoresController::class, 'salvar'])->name('fornecedores_salvar');
                Route::get('/ifsport/fornecedores/excluir/{id}', [FornecedoresController::class, 'excluir'])->name('fornecedores_excluir');
            });
            

});
Route::get('/ifsport/produtos/carrinho', [ProdutosController::class, 'carrinho'])->name('produtos_carrinho');
    Route::get('/', [ProdutosController::class, 'vitrine'])->name('produtos_vitrine');
    Route::get('/ifsport/produtos/categoria/{id}', [ProdutosController::class, 'produtosCategoria'])->name('produtos_categoria');

require __DIR__.'/auth.php';