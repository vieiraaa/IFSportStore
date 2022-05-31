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
                            <th>Descrição</th>
                            <th>Quantidade</th>
                            <th>Valor</th>
                            <th>Funcionalidades</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php 
                            $valtot = 0;
                        @endphp
                        @foreach ($carrinho as $pd)
                        
                            <tr>
                                <td>{{ $pd['produto_id'] }}</td>
                                <td>{{ $pd['nome'] }}</td>
                                <td>{{ $pd['quantidade'] }}</td>
                                <td>{{ $pd['valunit'] }}</td>

                                <td>
                                    <a href="#" onclick="excluir({{ $pd['produto_id'] }})" class="btn btn-danger">Cancelar</a>
                                </td>
                            </tr>
                            @php
                                $valtot = $valtot + $pd['valunit'];
                            @endphp
                                
                        @endforeach
                        {{$valtot}}
                    </tbody>

                </table>
                <a href="{{ route('session_fechar') }}" class="btn btn-dark">Fechar pedido</a>
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
