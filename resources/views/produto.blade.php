@extends('templates.template')

@section('content')

<!-- Main -->
<main class="produtoPage">
    <div class="contentContainer">
        <div class="imageContainer">
            <img src="{{ url("/storage/img/produtos/$produto->img") }}">
        </div>

        <div class="info">
            <h2 class="titulo">{{ $produto->titulo }}</h2>

            <h3 class="categoria">Categoria: {{ $produto->categoria }}</h3>

            <h2 class="preco">R$ {{ $produto->preco }}</h2>

            <h3 class="preco_cartao">{{ $produto->preco_cartao }}</h3>

            <p class="descricao">{{ $produto->descricao }}</p>

            <a class="comprar" href="#">Comprar</a>
        </div>
    </div>
</main>

@endsection
