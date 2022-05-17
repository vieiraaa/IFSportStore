<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Produto;

class CategoriasController extends Controller
{
    function cadastro(){
        return view('categoria.categorias_novo');
    }
    /*function novo(Request $req){
        
        $nome = $req->input('nome');

        $categoria = new Categoria();
        $categoria->nome = $nome;
        $c1 = new Categoria();
        $c1->nome = "Calçados";
        $c1->save();

        $c2 = new Categoria();
        $c2->nome = "Roupas";
        $c2->save();

        $c3 = new Categoria();
        $c3->nome = "Acessórios";
        $c3->save();

        $c4 = new Categoria();
        $c4->nome = "Esporte";
        $c4->save();
        

        return redirect()->route('categorias_listar');
    }*/
    function listar(){
        $categorias = Categoria::all();
        return view('categoria.categorias_listar', ['categorias' => $categorias]);
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
