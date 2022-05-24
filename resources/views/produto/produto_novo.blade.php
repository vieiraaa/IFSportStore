@extends('template')

@section('conteudo')
<div id="cadTransp" style="padding-top: 15px;">
  
    <div class="container">
        <div class="row">

          <div class="col-2">
          </div>

          <div class="col-8">
                <form action="{{ route('produtos_novo') }}" method="post" enctype="multipart/form-data">
                @csrf

                    <div class="modal-header p-5 pb-4 border-bottom-0">
                        <!-- <h5 class="modal-title">Modal title</h5> -->
                        <h2 class="fw-bold mb-0">Cadastro de Produtos</h2>
                    </div>

                    <div class="modal-body p-5 pt-0">
                        
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                        </div>
                        <div class="mb-3">
                            <label for="descricao" class="form-label">Descricao</label>
                            <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descricao">
                        </div>
                        <div class="mb-3">
                            <label for="valor" class="form-label">Preco Unitario</label>
                            <input type="text" class="form-control" id="valor" name="valor" placeholder="R$">
                        </div>
                        <div class="mb-3">
                            <label for="categoria" class="form-label">Categoria</label>
                            <select name="categoria">
                                @foreach($categorias as $categoria)
                                    <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                                @endforeach
                            </select>
                        </div>
                            <div class="form-group">
                                <label for="arquivo">Anexar Imagem do Produto</label>
                                <input type="file" class="arquivo" name="arquivo" id="arquivo">
                            </div>
                    
                        <button class="w-100 py-2 mb-2 btn-gray btn-outline-dark rounded-3" type="submit">
                            Cadastrar
                        </button>
                        
                    </div>
                    </div>
                </div>
                </div>
@endsection