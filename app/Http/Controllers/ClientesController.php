<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Endereco;

class ClientesController extends Controller
{
    function cadastro_novo(){
        return view('cliente.novo_cliente');
    }

    function store(){
        return view('navbars');
    }

    function novo(Request $req){
        $nome = $req->input('nome');
        $telefone = $req->input('telefone');
        $email = $req->input('email');
        $senha = $req->input('senha');

        $cliente = new Cliente();
        $cliente->nome = $nome;
        $cliente->telefone = $telefone;
        $cliente->email = $email;
        $cliente->senha = $senha;

        $cliente->save();

        return redirect()->route('clientes_listar');
    }

    function listar(){
        $clientes = Cliente::all();

        return view('cliente.lista_cliente', ['clientes' => $clientes]);
    }

    function alterar($id){
        $cliente = Cliente::findOrFail($id);

        return view('cliente.altera_cliente',['cliente' => $cliente]);
    }

    function salvar(Request $req){  
        $id = $req->input('id');
        $nome = $req->input('nome');
        $telefone = $req->input('telefone');
        $email = $req->input('email');
        $senha = $req->input('senha');

        $cliente = Cliente::findOrFail($id);
        $cliente->nome = $nome;
        $cliente->telefone = $telefone;
        $cliente->email = $email;
        $cliente->senha = $senha;

        $cliente->save();

        return redirect()->route('clientes_listar');
    }

    function excluir($id){
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return redirect()->route('clientes_listar');

    }
    
}
