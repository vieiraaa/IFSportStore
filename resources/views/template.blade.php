<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <title>IFSports</title>
  </head>
  <body>
        <header id="navbar-netshoes" class="p-3 bg-dark text-white">

            <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
              <div class="col-2"><a href="{{ route('produtos_vitrine') }}" class="nav-link px-2 fw-bold text-white">IFSports</a></div>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center text-middle mb-md-0">
                
                <li><div class="dropdown">
                  <a class="nav-link px-2 text-white dropdown-toggle mr-5" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categorias
                  </a>
                
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    @foreach($categorias as $ct)
                        <a class="dropdown-item" href="/ifsport/produtos/categoria/{{ $ct->id }}">{{ $ct->nome }}</a>
                    @endforeach
                  </div>
                </div></li>
                @if(Auth::user())
                  @if(Auth::user()-> nivel == 1)
                    <li><a href="{{ route('transportadoras_listar') }}" class="nav-link mx-2 text-white pr-5">Transportadoras</a></li>
                    <li><a href="{{ route('fornecedores_listar') }}" class="nav-link mx-2 text-white pr-5">Fornecedores</a></li>
                    <li><a href="{{ route('produtos_listar') }}" class="nav-link mx-2 text-white pr-5">Produtos</a></li>
                  @endif
                @endif
                </ul>
                @if(Auth::user())
                <div class="dropdown">
                  <a class="nav-link px-2 text-white dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                  </a>
                @endif
                @if(Auth::user())
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <form action="{{ route('enderecos_listar') }}">
                      <a class="dropdown-item" href="route('enderecos_listar')"
                          onclick="event.preventDefault();
                              this.closest('form').submit();">
                          {{ __('Endereços') }}
                      </a>
                  </form>
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a class="dropdown-item" href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Desconectar') }}
                  </a>
                </form>
                  </div>
                </div>
                @else
                  <div class="text-end">
                  <a href="{{ Route('login') }}" class="btn btn-outline-light me-2">Entrar</a>
                  <a href="{{ Route('register') }}" class="btn btn-outline-light me-2">Registrar</a>
                  </div>
                @endif
            </div>
            </div>        
        </header>
      
        

        @yield('conteudo')
    <!-- Optional Java; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>

</html>