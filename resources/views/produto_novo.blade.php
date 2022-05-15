@extends('template')

@section('titulo')
Produto - Novo
@endsection

@section('conteudo') 
    <form action="{{ route('produtos_salvar') }}" method="post" enctype="multipart/form-data">
    @csrf
                    <div class="row">

                        <div class="col">
                          <label for="formFile" class="form-label">Nome do Produto:</label>
                          <input type="text" id="nome" class="form-control" placeholder="Nome do Produto" aria-label="First name" name="nome">
                        </div>

                        <div class="col">
                          <label for="formFile" class="form-label">Valor do produto:</label>
                          <input type="valor" id="valor" class="form-control" placeholder="R$ 000,00" aria-label="Last name" >
                        </div>
                    </div>

<br>

                    <div class="row">

                        <div class="col">
                          <label for="formFile" class="form-label">Descrição do produto: </label>
                          <input type="text" id="descricao" class="form-control" placeholder="Descrição do Produto: " aria-label="First name" name="nome">
                        </div>

                        
                    </div>

<br>

                    <div class="mb-3">
                    <label for="formFile" class="form-label">Escoha a Imagem do produto: </label>
                    <input class="form-control" type="file" id="arquivo">
 
<br>
                    </div>
                    <div class="col">
                    <input type="submit" class="btn btn-dark">
                    </div>
                    </form>
@endsection