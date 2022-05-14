<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProdutosController;

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
});

    Route::get('/dashboard', function() {
        return view ('dashboard');
    })->middleware(['auth'])->name('dashboard');

        Route::middleware(['auth'])->group(function(){

            Route::get('/ifsport/store', [ClientesController::class, 'store']);

            Route::get('/ifsport/produtos/novo', [ProdutosController::class, 'cadastro'])->name('produtos_novo');
            Route::post('/ifsport/produtos/novo', [ProdutosController::class, 'novo'])->name('produtos_salvar');

            Route::get('/ifsport/produtos/listar', [ProdutosController::class, 'listar'])->name('produtos_listar');
            Route::get('/ifsport/produto/{slug}', [ProdutosController::class, 'exibir'])->name('produtos_exibir');
            
});
require __DIR__.'/auth.php';