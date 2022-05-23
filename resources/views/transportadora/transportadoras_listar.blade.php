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
                        @foreach ($transportadoras as $tr)
                            <tr>
                                <td>{{ $tr->id }}</td>
                                <td>{{ $tr->nome }}</td>
                                <td>{{ $tr->cep }}</td>
                                <td>{{ $tr->cnpj }}</td>
                                <td>{{ $tr->logradouro }}</td>
                                <td>{{ $tr->bairro }}</td>
                                <td>{{ $tr->cidade }}</td>
                                <td>{{ $tr->estado }}</td>
                                <td>
                                    <a href="{{ route('transportadoras_alterar', ['id' => $tr->id]) }}"
                                        class="btn btn-warning">Alterar</a>
                                    <a href="#"
                                        onclick="excluir({{ $tr->id }})" class="btn btn-danger">Excluir</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>
                <div><a href="{{ route('transportadoras_cadastro') }}" class="btn btn-warning">Cadastrar nova
                        Transportadora</a>
                </div>
            </div>
        </div>
        <div class="col-1">
        </div>
@endsection
<script>
    function excluir(id) {
        if (confirm(`Deseja realmente excluir a transportadora ${id}?`)) {
            let url = "{{ route('transportadoras_excluir', ':id') }}";

            url = url.replace(':id', id);
            document.location.href = url;
        }
    }
</script>
