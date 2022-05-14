@foreach($produtos as $produto)
<div>
    nome: {{ $produto->nome }}
    <a href="{{ route('produtos_exibir', ['slug' => $produto->slug ]) }}">
        <img src="{{ $produto->caminho }}" width="50" alt="imgprod">
    </a>
</div>
@endforeach
