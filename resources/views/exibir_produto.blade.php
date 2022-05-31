@extends('template')

@section('conteudo')

<body>
    <form method="POST" action="{{ route('session_novo') }}">
        @csrf
        <input type="text" name='id' value="{{ $produto->id }}">
        <input type="text" name='valor' value="{{ $produto->valor }}">
    
        <main class="flex-fill">
            <div class="container">
                <div class="row g-3">
                    <div class="col-12 col-sm-6">
                        <img src="{{ $produto->caminho }}" class="img-thumbnail" id="imgProduto">
                        <br class="clearfix">
                        <div class="row my-3 gx-3">
                            <div class="col-3">
                                <img src="{{ $produto->caminho }}" class="img-thumbnail" onclick="trocarImagem(this)">
                            </div>
                            <div class="col-3">
                                <img src="{{ $produto->caminho }}" class="img-thumbnail" onclick="trocarImagem(this)">
                            </div>
                            <div class="col-3">
                                <img src="{{ $produto->caminho }}" class="img-thumbnail" onclick="trocarImagem(this)">
                            </div>
                            <div class="col-3">
                                <img src="{{ $produto->caminho }}" class="img-thumbnail" onclick="trocarImagem(this)">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <h1>{{ $produto->nome }}</h1>
                        <p>
                        {{ $produto->descricao }}
                        </p>
                        <br>
                        <label for="quantidade">Quantidade</label>
                        <input type="number" name='quantidade'>
                        <h5>R$: {{ $produto->valor }} </h5>
                        <h7>Em ate 6x sem juros no cartao IFSport</h7>
                        <br>
                        <p>
                            <div><button type="submit" class="btn btn-dark" value="Enviar">Compre Agora</button>
                            </div>
                        </p>
                        </form>
                    </div>
                </div>
            </div>
        </main>

    </div>
    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function trocarImagem(el) {
            var imgProduto = document.getElementById("imgProduto");
            imgProduto.src = el.src;
        }
    </script>
</body>

@endsection