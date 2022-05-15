@extends('template')

@section('titulo')
Produto - Novo
@endsection

@section('conteudo')
<form action="{{ route('produtos_salvar') }}" method="post" enctype="multipart/form-data">
    <div class="modal modal-signin position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalSignin">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
        <div class="modal-header p-5 pb-4 border-bottom-0">
            <!-- <h5 class="modal-title">Modal title</h5> -->
            <h2 class="fw-bold mb-0">Cadastro de Produtos</h2>
        </div>

        <div class="modal-body p-5 pt-0">
            <form class="">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" placeholder="Nome">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Descricao</label>
                <input type="text" class="form-control" id="descricao" placeholder="Descricao">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Preco Unitario</label>
                <input type="text" class="form-control" id="preco" placeholder="R$">
            </div>
            <form>
                <div class="form-group">
                    <label for="arquivo">Anexar Imagem do Produto</label>
                    <input type="file" class="arquivo" id="arquivo">
                </div>
            </form>
            <button class="w-100 py-2 mb-2 btn btn-outline-dark rounded-3" type="submit">
                Cadastrar
            </button>
            </form>
        </div>
        </div>
    </div>
    </div>
</form>
@endsection