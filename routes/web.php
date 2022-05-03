<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

    Route::get('/ifsport/store', [ClientesController::class, 'store']);

    Route::get('/ifsport/cadastro_cli', [ClientesController::class, 'cadcli']);

    Route::middleware(['auth'])->group(function(){

        
});
require __DIR__.'/auth.php';
