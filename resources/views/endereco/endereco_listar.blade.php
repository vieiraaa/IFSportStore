<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Enderecos') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row">

            <div class="col-1">
            </div>

            <div class="col-10">
                <table class="table">
                    <thead>
                        <tr>
                            <th>CEP</th>
                            <th>Logradouro</th>
                            <th>Bairro</th>
                            <th>Cidade</th>
                            <th>Estado</th>
                            <th>Operações</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($enderecos as $en)
                        
                            <tr>
                                <td>{{ $en->cep }}</td>
                                <td>{{ $en->logradouro }}</td>
                                <td>{{ $en->bairro }}</td>
                                <td>{{ $en->cidade }}</td>
                                <td>{{ $en->estado }}</td>
                                <td>
                                    <a href="{{ route('enderecos_alterar', ['id' => $en->id]) }}"
                                        class="btn btn-warning">Alterar</a>
                                    <a href="#"
                                        onclick="excluir({{ $en->id }})" class="btn btn-danger">Excluir</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>
                <div><a href="{{ route('enderecos_cadastro') }}" class="btn btn-warning">Cadastrar nova
                        Endereco</a>
                </div>
            </div>
        </div>
        <div class="col-1">
        </div>
</x-app-layout>
<script>
    function excluir(id) {
        if (confirm(`Deseja realmente excluir o endereco ${id}?`)) {
            let url = "{{ route('enderecos_excluir', ':id') }}";

            url = url.replace(':id', id);
            document.location.href = url;
        }
    }
</script>
