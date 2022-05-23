<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Models\Endereco;

class EnderecosController extends Controller
{
    function cadastro(){
        $usuario = Auth::user();
        return view('endereco.endereco_novo', compact('usuario'));
    }

    function novo(Request $req){
        $cep = $req->input('cep');
        $logradouro = $req->input('logradouro');
        $bairro = $req->input('bairro');
        $cidade = $req->input('cidade');
        $estado = $req->input('estado');
        $cliente_id = $req->input('cliente_id');
        

        $endereco = new Endereco();
        $endereco->cep = $cep;
        $endereco->logradouro = $logradouro;
        $endereco->bairro = $bairro;
        $endereco->cidade = $cidade;
        $endereco->estado = $estado;
        $endereco->cliente_id = $cliente_id;

        $endereco->save();

        return redirect()->route('enderecos_listar');
    }
    


    function listar(){
        $usuario = Auth::user();
        $enderecos = Endereco::where('cliente_id', $usuario->id)->get();

        return view('endereco.endereco_listar', ['enderecos' => $enderecos], compact('usuario'));
    }

    function alterar($id){
        $usuario = Auth::user();
        $endereco = Endereco::findOrFail($id);

        return view('endereco.endereco_alterar',['endereco' => $endereco], compact('usuario'));
    }

    function salvar(Request $req){
        $id = $req->input('id');
        $cep = $req->input('cep');
        $logradouro = $req->input('logradouro');
        $bairro = $req->input('bairro');
        $cidade = $req->input('cidade');
        $estado = $req->input('estado');
        $cliente_id = $req->input('cliente_id');

        $endereco = Endereco::findOrFail($id);
        $endereco->cep = $cep;
        $endereco->logradouro = $logradouro;
        $endereco->bairro = $bairro;
        $endereco->cidade = $cidade;
        $endereco->estado = $estado;
        $endereco->cliente_id = $cliente_id;

        $endereco->save();


        return redirect()->route('enderecos_listar');
    }

    function excluir($id){
        $endereco = Endereco::findOrFail($id);
        $endereco->delete();

        return redirect()->route('enderecos_listar');

    }
}
