<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;
use App\Models\Produto;

class FornecedoresController extends Controller
{
    function cadastro(){
        return view('fornecedor.fornecedor_novo');
    }

    function novo(Request $req){
        $nome = $req->input('nome');
        $cep = $req->input('cep');
        $cnpj = $req->input('cnpj');
        $logradouro = $req->input('logradouro');
        $bairro = $req->input('bairro');
        $cidade = $req->input('cidade');
        $estado = $req->input('estado');
        

        $fornecedor = new Fornecedor();
        $fornecedor->nome = $nome;
        $fornecedor->cep = $cep;
        $fornecedor->cnpj = $cnpj;
        $fornecedor->logradouro = $logradouro;
        $fornecedor->bairro = $bairro;
        $fornecedor->cidade = $cidade;
        $fornecedor->estado = $estado;

        $fornecedor->save();

        return redirect()->route('fornecedores_listar');
    }
    


    function listar(){
        $fornecedores = Fornecedor::all();

        return view('fornecedor.fornecedores_listar', ['fornecedores' => $fornecedores]);
    }
    function produtos_Fornecedor($id){
        $fornecedor = Fornecedor::findOrFail($id);

        $produtos = $fornecedor->produtos;
        return view('fornecedor.fornecedor_lista_produtos', ['produtos' => $produtos], ['fornecedor' => $fornecedor]);
    }

    function alterar($id){
        $fornecedor = Fornecedor::findOrFail($id);

        return view('fornecedor.fornecedor_alterar',['fornecedor' => $fornecedor]);
    }

    function salvar(Request $req){
        $id = $req->input('id');
        $nome = $req->input('nome');
        $cep = $req->input('cep');
        $cnpj = $req->input('cnpj');
        $logradouro = $req->input('logradouro');
        $bairro = $req->input('bairro');
        $cidade = $req->input('cidade');
        $estado = $req->input('estado');

        $fornecedor = Fornecedor::findOrFail($id);
        $fornecedor->nome = $nome;
        $fornecedor->cep = $cep;
        $fornecedor->cnpj = $cnpj;
        $fornecedor->logradouro = $logradouro;
        $fornecedor->bairro = $bairro;
        $fornecedor->cidade = $cidade;
        $fornecedor->estado = $estado;

        $fornecedor->save();


        return redirect()->route('fornecedores_listar');
    }

    function excluir($id){
        $fornecedor = Fornecedor::findOrFail($id);
        $fornecedor->delete();

        return redirect()->route('fornecedores_listar');

    }
}
