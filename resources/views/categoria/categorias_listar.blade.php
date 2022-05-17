<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Categorias') }}
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
                            <th>id</th>
                            <th>Nome</th>
                            <th>Operações</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($categorias as $en)
                        
                            <tr>
                                <td>{{ $en->id }}</td>
                                <td><a href="/ifsport/produtos/categoria/{{ $en->id }}">{{ $en->nome }}</a></td>
                                <td>
                                    <a href="#"
                                        onclick="excluir({{ $en->id }})" class="btn btn-danger">Excluir</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
        </div>
        <div class="col-1">
        </div>
</x-app-layout>
<script>
    function excluir(id) {
        if (confirm(`Deseja realmente excluir o endereco ${id}?`)) {
            let url = "{{ route('categorias_excluir', ':id') }}";

            url = url.replace(':id', id);
            document.location.href = url;
        }
    }
</script>
