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
                            <th>CEP</th>
                            <th>CNPJ</th>
                            <th>Logradouro</th>
                            <th>Bairro</th>
                            <th>Cidade</th>
                            <th>Estado</th>
                            <th>Operações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fornecedores as $fo)
                            <tr>
                                <td>{{ $fo->id }}</td>
                                <td>{{ $fo->nome }}</td>
                                <td>{{ $fo->cep }}</td>
                                <td>{{ $fo->cnpj }}</td>
                                <td>{{ $fo->logradouro }}</td>
                                <td>{{ $fo->bairro }}</td>
                                <td>{{ $fo->cidade }}</td>
                                <td>{{ $fo->estado }}</td>
                                <td>
                                    <a href="{{ route('fornecedores_alterar', ['id' => $fo->id]) }}"
                                        class="btn btn-warning">Alterar</a>
                                    <a href="#"
                                        onclick="excluir({{ $fo->id }})" class="btn btn-danger">Excluir</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>
                <div><a href="{{ route('fornecedores_cadastro') }}" class="btn btn-warning">Cadastrar novo Fornecedor</a>
                </div>
            </div>
        </div>
        <div class="col-1">
        </div>
@endsection
<script>
    function excluir(id) {
        if (confirm(`Deseja realmente excluir a transportadora ${id}?`)) {
            let url = "{{ route('fornecedores_excluir', ':id') }}";

            url = url.replace(':id', id);
            document.location.href = url;
        }
    }
</script>
