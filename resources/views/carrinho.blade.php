@extends('template')

@section('conteudo')

<main class="flex-fill">
    <form action="{{ route('pedidos_novo') }}" method="post">
        @csrf
        <div class="container">
            <h1>Carrinho de Compras</h1>
            <ul class="list-group mb-3">
                <li class="list-group-item py-3">
                    <div class="row g-3">
                        <div class="col-4 col-md-3 col-lg-2">
                            <a href="#">
                                <img src="{{ $produto->caminho }}" class="img-thumbnail">
                            </a>
                        </div>
                        <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-center">
                            <h4>
                                <b><a href="#" class="text-decoration-none text-dark">
                                        {{ $produto->nome }}</a></b>
                            </h4>
                            <h5>
                                {{ $produto->descricao }}
                            </h5>
                        </div>
                        <div class="col-6 offset-6 col-sm-6 offset-sm-6 col-md-4 offset-md-8 col-lg-3 offset-lg-0 col-xl-2 align-self-center mt-3">
                            <div class="input-group">
                                <b><a href="#" class="text-decoration-none text-dark">
                                        Quantidade</a></b>
                                <button class="btn btn-outline-dark btn-sm" type="button">
                                    <i class="bi-caret-down" style="font-size: 16px; line-height: 16px;"></i>
                                </button>
                                <input type="text" class="form-control text-center border-dark" value="4">
                            </div>
                            <div class="text-end mt-2">
                                <span class="text-dark">Valor Item: R$ <span id="valor1">{{ $produto->valor }}</span></span>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item py-3">
                    <div class="text-end">
                        <h4 class="text-dark mb-3">
                            Valor Total: R$ {{ $produto->valor }}
                        </h4>
                        <button class="w-100 py-2 mb-2 btn btn-outline-dark rounded-3" type="submit">
                            Fechar Pedido
                        </button>
                    </div>
                </li>
            </ul>
        </div>
    </form>
</main>

@endsection