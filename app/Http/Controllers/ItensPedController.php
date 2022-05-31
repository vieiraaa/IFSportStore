<?php

namespace App\Http\Controllers;
use App\Models\Pedido;
use App\Models\ItensPedido;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\Http;

class ItensPedController extends Controller
{
    function novo (Request $req){
        session()->forget('carrinho');
       /* $usuario = Auth::user();
        $pedido = new Pedido();
        $pedido->status = 'Aguardando pagamento';
        $pedido->dataped = Carbon::now()->toDateTimeString();
        $pedido->dataent = Carbon::now()->toDateTimeString();
        $pedido->cliente_id = $usuario->id ;
        $pedido->endereco_id = 1;
        $pedido->transportadora_id = 1;
        $pedido->save();*/

        if(!session()->has('carrinho')){
            session()->put('carrinho',[]);
        }
        $carrinho = session()->get('carrinho');
        $carrinho[] = 
        [
            'produto_id' => $req->input('id'),
            'nome' => Produto::find($req->input('id'))->nome,
            'valunit' => Produto::find($req->input('id'))->valor,
            'quantidade' => $req->input('quantidade')
        ];
        session()->put('carrinho', $carrinho);
        return redirect()->route('pedidos_listar');
    }
    
    function listar(){
        $carrinho = session()->get('carrinho');
        return view('pedido.pedidos_listar', ['carrinho' => $carrinho]);
    }
    function fechar (Request $req){
        $carrinho = session()->get('carrinho');
        $usuario = Auth::user();
        $pedido = new Pedido();
        $pedido->status = 'Aguardando pagamento';
        $pedido->dataped = Carbon::now()->toDateTimeString();
        $pedido->dataent = Carbon::now()->toDateTimeString();
        $pedido->cliente_id = $usuario->id ;
        $pedido->endereco_id = 1;
        $pedido->transportadora_id = 1;
        $pedido->save();

        $pedidoId = $pedido->id;

        $valtot = 0;
        $item = 1;
        foreach ($carrinho as $pd){
            $item = $item + 1;
            $itensped = new ItensPedido();
            $itensped->item = $item;
            $itensped->pedido_id = $pedido->id;
            $itensped->produto_id = $pd['produto_id'];
            $itensped->dataent = Carbon::now()->toDateTimeString();
            $itensped->quantidade = $pd['quantidade'];
            $itensped->valunit = $pd['valunit'];
            $itensped->transportadora_id = $pedido->transportadora_id;
            $itensped->valtot = $pd['valunit'] * $pd['quantidade'];
            $itensped->save();
            $valtot += $pd['valunit'] * $pd['quantidade'];
        }
            $this->pagamentos($valtot,  $usuario->cpf,$pedidoId);
        session()->forget('carrinho');

    }
    function pagamentos($valtot,$cpf,$pedidoId){
        $json = [ 
            "token"=>"$2y$10$7RgfeO9uBr99KKo/aHpVrObqjCX.Ujd5/3TvJoiDykt5V0KW5M1gu",
            "CpfCliente"=>$cpf,
            "valor"=>$valtot
        ];
        $response = Http::post('http://10.41.1.4/api/pagamentos', $json);

       if ($response->status() == 201){
        $pedido = Pedido::find($pedidoId);
        $pedido->status = "Pagamento Feito"; 
        $pedido->save();
       }

        
    }


}
