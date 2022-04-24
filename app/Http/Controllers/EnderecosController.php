<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Endereco;

class EnderecosController extends Controller
{
    function cadastro_novo(){
        return view('endereco.novo_endereco');
    }

    function novo(Request $req){
        $cep = $req->input('cep');
        $logradouro = $req->input('logradouro');
        $bairro = $req->input('bairro');
        $cidade = $req->input('cidade');
        $estado = $req->input('estado');
        $cliente = $req->input('cliente');
        

        $endereco = new Endereco();
        $endereco->cep = $cep;
        $endereco->logradouro = $logradouro;
        $endereco->bairro = $bairro;
        $endereco->cidade = $cidade;
        $endereco->estado = $estado;
        $endereco->cliente_id = $cliente;

        $endereco->save();

        return redirect()->route('enderecos_listar');
    }
    


    function listar(){
        $enderecos = Endereco::all();

        return view('endereco.lista_endereco', ['enderecos' => $enderecos]);
    }

    function alterar($id){
        $endereco = Endereco::findOrFail($id);

        return view('endereco.altera_endereco',['endereco' => $endereco]);
    }

    function salvar(Request $req){
        $id = $req->input('id');
        $cep = $req->input('cep');
        $logradouro = $req->input('logradouro');
        $bairro = $req->input('bairro');
        $cidade = $req->input('cidade');
        $estado = $req->input('estado');
        $cliente = $req->input('cliente');

        $endereco = Endereco::findOrFail($id);
        $endereco->cep = $cep;
        $endereco->logradouro = $logradouro;
        $endereco->bairro = $bairro;
        $endereco->cidade = $cidade;
        $endereco->estado = $estado;
        $endereco->cliente_id = $cliente;

        $endereco->save();


        return redirect()->route('enderecos_listar');
    }

    function excluir($id){
        $endereco = Endereco::findOrFail($id);
        $endereco->delete();

        return redirect()->route('enderecos_listar');

    }
}
