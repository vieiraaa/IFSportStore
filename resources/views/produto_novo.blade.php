<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Transportadoras') }}
        </h2>

Produto - Novo
@endsection

@section('conteudo')
<form action="{{ route('produtos_salvar') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome">
    <label for="arquivo">Arquivo</label>
    <input type="file" name="arquivo" id="arquivo">
    <input type="submit">
</form>
@endsection