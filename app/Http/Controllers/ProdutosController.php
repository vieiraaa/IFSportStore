<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    function produtosCategoria($id){
        $produtos = Produto::where('categoria_id', $id)->get();
        return view('produtos_categorias',['produtos' => $produtos]);
    }
    function cadastro(){
        $categorias = Categoria::all();
        return view('produto_novo', compact('categorias')); 
    }

    function listar(){
        $produtos = Produto::all();
        return view('lista_produtos', ['produtos' => $produtos]);
    }

    function carrinho(){
        $produtos = Produto::all();
        return view('carrinho', ['produtos' => $produtos]);
    }

    function vitrine(){
        $produtos = Produto::all();
        return view('vitrine', ['produtos' => $produtos]);
    }

    function exibir($slug){
        $produto = Produto::where('slug', '=', $slug)->first();
        return view('exibir_produto', ['produto' => $produto]);
    }


    function novo (Request $req){
        $produto = new Produto();
        $produto->nome = $req->input('nome');
        $produto->valor = $req->input('valor');
        $produto->descricao = $req->input('descricao');
        $produto->categoria_id = $req->input('categoria');
        $produto->slug = "";
        $produto->caminho = "";
        $produto->save();
        
        $produto->slug = Str::slug("{$produto->nome} {$produto->id}");
        $produto->save();

        $imagem = $req->file('arquivo');
        $caminho_arquivo = $imagem->storeAs('produtos', "{$produto->id}.{$imagem->extension()}");
        $produto->caminho = "/storage/$caminho_arquivo";
        $produto->save();

        echo "<img src={$produto->caminho}>";
        dd($produto, $req);

        return redirect()->route('produtos_listar');
        
    }
}
