<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transportadora;
use App\Models\Categoria;
use App\Models\Produto;

class TransportadorasController extends Controller
{
    function cadastro(){
        return view('transportadora.transportadora_novo');
    }

    function novo(Request $req){
        $nome = $req->input('nome');
        $cep = $req->input('cep');
        $cnpj = $req->input('cnpj');
        $logradouro = $req->input('logradouro');
        $bairro = $req->input('bairro');
        $cidade = $req->input('cidade');
        $estado = $req->input('estado');
        

        $transportadora = new Transportadora();
        $transportadora->nome = $nome;
        $transportadora->cep = $cep;
        $transportadora->cnpj = $cnpj;
        $transportadora->logradouro = $logradouro;
        $transportadora->bairro = $bairro;
        $transportadora->cidade = $cidade;
        $transportadora->estado = $estado;

        $transportadora->save();

        return redirect()->route('transportadoras_listar');
    }
    


    function listar(){
        $transportadoras = Transportadora::all();

        return view('transportadora.transportadoras_listar', ['transportadoras' => $transportadoras]);
    }
    function produtos_Tornecedor($id){
        $transportadora = Transportadora::findOrFail($id);

        $produtos = $transportadora->produtos;
        return view('transportadora.lista_produtos_transportadora', ['produtos' => $produtos], ['transportadora' => $transportadora]);
    }

    function alterar($id){
        $transportadora = Transportadora::findOrFail($id);

        return view('transportadora.transportadora_alterar',['transportadora' => $transportadora]);
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

        $transportadora = Transportadora::findOrFail($id);
        $transportadora->nome = $nome;
        $transportadora->cep = $cep;
        $transportadora->cnpj = $cnpj;
        $transportadora->logradouro = $logradouro;
        $transportadora->bairro = $bairro;
        $transportadora->cidade = $cidade;
        $transportadora->estado = $estado;

        $transportadora->save();


        return redirect()->route('transportadoras_listar');
    }

    function excluir($id){
        $transportadora = Transportadora::findOrFail($id);
        $transportadora->delete();

        return redirect()->route('transportadoras_listar');

    }
}
