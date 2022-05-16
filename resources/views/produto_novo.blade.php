<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Transportadoras') }}
        </h2>
    </x-slot>    

    <form action="{{ route('produtos_salvar') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="modal modal-signin position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalSignin">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
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
           
            <button class="w-100 py-2 mb-2 btn btn-outline-dark rounded-3" type="submit">
                Cadastrar
            </button>
            
        </div>
        </div>
    </div>
    </div>

</x-app-layout>