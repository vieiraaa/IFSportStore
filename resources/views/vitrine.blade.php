@extends('template')

@section('conteudo')
<body>
        <div class="container">
            <hr class="mt-3">
        </div>
        <main class="flex-fill">
        
            <div class="container">

                <div class="row g-3">
                @foreach($produtos as $produto)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card text-center bg-light">
                            <a href="#" class="position-absolute end-0 p-2 text-danger">
                                <i class="bi-suit-heart" style="font-size: 24px; line-height: 24px;"></i>
                            </a>
                            <a href="{{ route('produtos_exibir', ['slug' => $produto->slug ]) }}">
                                <img src="{{ $produto->caminho }}" class="card-img-top">
                            </a>
                            <div class="card-header">
                            {{ $produto->valor }}
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $produto->nome }}</h5>
                                <p class="card-text truncar-3l">
                                {{ $produto->descricao }}
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="carrinho.html" class="btn btn-dark mt-2 d-block">
                                    Adicionar ao Carrinho
                                </a>
                                <small class="text-success">12 em estoque</small>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>

                <hr class="mt-3">

                <div class="row pb-3">
                    <div class="col-12">
                    </div>
                </div>
            </div>
        
        </main>
        
        <footer class="border-top text-muted bg-light">
            <div class="container">
                <div class="row py-3">
                    <div class="col-12 col-md-4 text-center">
                        &copy; 2022 - IFSport LTDA<br>
                        Av. Fahdo Thome, 3000, Cacador S/C <br>
                        CPNJ 99.999.999/0001-99
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <a href="/privacidade.html" class="text-decoration-none text-dark">
                            Política de Privacidade
                        </a><br>
                        <a href="/termos.html" class="text-decoration-none text-dark">
                            Termos de Uso
                        </a><br>
                        <a href="/quemsomos.html" class="text-decoration-none text-dark">
                            Quem Somos
                        </a><br>
                        <a href="/trocas.html" class="text-decoration-none text-dark">
                            Trocas e Devoluções
                        </a>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <a href="/contato.html" class="text-decoration-none text-dark">
                            Contato pelo Site
                        </a><br>
                        E-mail: <a href="mailto:email@dominio.com" class="text-decoration-none text-dark">
                            email@dominio.com
                        </a><br>
                        Telefone: <a href="phone:28999990000" class="text-decoration-none text-dark">
                            (28) 99999-0000
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
@endsection