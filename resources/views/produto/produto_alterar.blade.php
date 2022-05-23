@extends('template')

@section('conteudo')
<div id="cadTransp" style="padding-top: 15px;">
  
    <div class="container">
        <div class="row">

          <div class="col-2">
          </div>

          <div class="col-8">
    
            <form action="{{ route('produto_salvar') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="modal-header p-5 pb-4 border-bottom-0">
                        <!-- <h5 class="modal-title">Modal title</h5> -->
                        <h2 class="fw-bold mb-0">Alteração de Produtos</h2>
                    </div>
                <input type="hidden" name="id" value="{{ $produto->id }}">
                    
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="{{ $produto->nome }}" placeholder="Nome">
                    </div>
                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descricao</label>
                        <input type="text" class="form-control" id="descricao" name="descricao" value="{{ $produto->descricao }}" placeholder="Descricao">
                    </div>
                    <div class="mb-3">
                        <label for="valor" class="form-label">Preco Unitario</label>
                        <input type="text" class="form-control" id="valor" name="valor" value="{{ $produto->valor }}" placeholder="R$">
                    </div>
                    <div class="mb-3">
                        <label for="categoria" class="form-label">Categoria</label>
                        <select name="categoria">
                            @foreach($categorias as $categoria)
                                @if($categoria->id == $produto->categoria_id)
                                    <option value="{{$categoria->id}}" selected>{{$categoria->nome}}</option>
                                @else
                                    <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                        <div class="form-group">
                            <label for="arquivo">Anexar Imagem do Produto</label>
                            <input type="file" class="arquivo" name="arquivo" id="arquivo">
                        </div>
                
                    <button class="w-100 py-2 mb-2 btn-gray btn-outline-dark rounded-3" type="submit">
                        Alterar Produto
                    </button>
                </form>
            </div>
  
            <div class="col-2">
            </div>
  
          </div>
        </div>
  
  
  </div>
  @endsection