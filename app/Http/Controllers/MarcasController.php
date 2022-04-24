<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;
use App\Models\Fornecedor;
use App\Models\Produto;

class MarcasController extends Controller
{
    function cadastro_novo(){
        $fornecedores = Fornecedor::all();
        return view('marca.novo_marca', compact('fornecedores'));
    }
    function novo(Request $req){
        #dd($req);
        $nome = $req->input('nome');
        $fornecedor = $req->input('fornecedor');

        $marca = new Marca();
        $marca->nome = $nome;
        $marca->fornecedor_id = $fornecedor;

        $marca->save();
        

        return redirect()->route('marcas_listar');
    }
    function listar(){
        $fornecedores = Fornecedor::all();
        $marcas = Marca::all();
        return view('marca.lista_marcas', ['marcas' => $marcas], compact('fornecedores'));
    }

    function alterar($id){
        $fornecedores = Fornecedor::all();

        $marca = Marca::findOrFail($id);
        return view('marca.altera_marca',['marca' => $marca], compact('fornecedores'));
    }

    function salvar(Request $req){
        $id = $req->input('id');
        $nome = $req->input('nome');
        $fornecedor_id = $req->input('fornecedor');

        $marca = Marca::findOrFail($id);
        $marca->nome = $nome;
        $marca->fornecedor_id = $fornecedor_id;

        $marca->save();


        return redirect()->route('marcas_listar');
    }

    function excluir($id){
        $marca = Marca::findOrFail($id);
        $marca->delete();

        return redirect()->route('marcas_listar');

    }
}
