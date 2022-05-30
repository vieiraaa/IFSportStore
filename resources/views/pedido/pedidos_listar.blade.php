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
                            <th>Status</th>
                            <th>Data do Pedido</th>
                            <th>Data de Entrega</th>
                            <th>Endereco</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($pedidos as $pd)
                        
                            <tr>
                                <td>{{ $pd->id }}</td>
                                <td>{{ $pd->status }}</td>
                                <td>{{ $pd->dataped }}</td>
                                <td>{{ $pd->dataent }}</td>
                                <td>{{ $pd->endereco_id }}</td>
                                <td>
                                    <a href="#"
                                        onclick="excluir({{ $pd->id }})" class="btn btn-danger">Cancelar</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
        </div>
        <div class="col-1">
        </div>
@endsection
<script>
    function excluir(id) {
        if (confirm(`Deseja realmente cancelar o pedido ${id}?`)) {
            let url = "{{ route('pedidos_excluir', ':id') }}";

            url = url.replace(':id', id);
            document.location.href = url;
        }
    }
</script>
