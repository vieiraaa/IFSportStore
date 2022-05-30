<?php

namespace App\Http\Controllers;
use App\Models\Pedido;
use App\Models\Categoria;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\User;
use Auth;

class PedidosController extends Controller
{
    function listar(){
        $pedidos = Pedido::all();
        return view('pedido.pedidos_listar', ['pedidos' => $pedidos]);
    }
    function novo (Request $req){
        $usuario = Auth::user();
        $pedido = new Pedido();
        $pedido->status = 'Aguardando pagamento';
        $pedido->dataped = Carbon::now()->toDateTimeString();
        $pedido->dataent = Carbon::now()->toDateTimeString();
        $pedido->cliente_id = $usuario->id ;
        $pedido->endereco_id = 1;
        $pedido->transportadora_id = 1;
        $pedido->save();

        return redirect()->route('pedidos_listar');
    }

    function excluir($id){
        $pedido = pedido::findOrFail($id);
        $pedido->delete();

        return redirect()->route('pedidos_listar');

    }
}
