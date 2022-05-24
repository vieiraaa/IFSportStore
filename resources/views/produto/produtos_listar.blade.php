@extends('template')

@section('conteudo')
    <div class="container">
        <div class="row">

            <div class="col-1">
            </div>

            <div class="col-10">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Preço</th>
                            <th>Categoria</th>
                            <th>Imagem</th>
                            <th>Operações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $po)
                            <tr>
                                <td>{{ $po->id }}</td>
                                <td>{{ $po->nome }}</td>
                                <td>{{ $po->descricao }}</td>
                                <td>{{ $po->valor }}</td>
                                <td>{{ $po->categoria_id }}</td>
                                <td><img src="{{ $po->caminho }}" width="50" alt="imgprod"></td>
                                <td>
                                    <a href="{{ route('produto_alterar', ['id' => $po->id]) }}"
                                        class="btn btn-warning">Alterar</a>
                                    <a href="#"
                                        onclick="excluir({{ $po->id }})" class="btn btn-danger">Excluir</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>
                <div><a href="{{ route('produto_cadastro') }}" class="btn btn-warning">Cadastrar novo Produto</a>
                </div>
            </div>
        </div>
        <div class="col-1">
        </div>
@endsection
<script>
    function excluir(id) {
        if (confirm(`Deseja realmente excluir o produto ${id}?`)) {
            let url = "{{ route('produtos_excluir', ':id') }}";

            url = url.replace(':id', id);
            document.location.href = url;
        }
    }
</script>
