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
                            <th>id</th>
                            <th>Nome</th>
                            <th>Operações</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($categorias as $ct)
                        
                            <tr>
                                <td>{{ $ct->id }}</td>
                                <td><a href="/ifsport/produtos/categoria/{{ $ct->id }}">{{ $ct->nome }}</a></td>
                                <td>
                                    <a href="#"
                                        onclick="excluir({{ $ct->id }})" class="btn btn-danger">Excluir</a>
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
        if (confirm(`Deseja realmente excluir o endereco ${id}?`)) {
            let url = "{{ route('categorias_excluir', ':id') }}";

            url = url.replace(':id', id);
            document.location.href = url;
        }
    }
</script>
