<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriasController extends Controller
{
    function cadastro_novo(){
        return view('categoria.novo_categoria');
    }
    function novo(Request $req){
        #dd($req);
        $nome = $req->input('nome');

        $categoria = new Categoria();
        $categoria->nome = $nome;

        $categoria->save();
        

        return redirect()->route('categorias_listar');
    }
    function listar(){
        $categorias = Categoria::all();
        return view('categoria.lista_categorias', ['categorias' => $categorias]);
    }

    function alterar($id){

        $categoria = Categoria::findOrFail($id);
        return view('categoria.altera_categoria',['categoria' => $categoria]);
    }

    function salvar(Request $req){
        $id = $req->input('id');
        $nome = $req->input('nome');

        $categoria = Categoria::findOrFail($id);
        $categoria->nome = $nome;

        $categoria->save();


        return redirect()->route('categorias_listar');
    }

    function excluir($id){
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();

        return redirect()->route('categorias_listar');

    }
}
