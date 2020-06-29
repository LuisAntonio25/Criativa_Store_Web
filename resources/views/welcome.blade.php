@extends('templates.template')

@section('content')
<!-- Main -->
<main class="homePage">
    <div class="homeBanner"></div>

    <div class="features">
        <nav>
            <ul>
                <li>
                    <img src="{{ url('assets/img/icones/pagamento.png') }}">
                    <p>Sistema Seguro de Pagamento</p>
                </li>

                <li>
                    <img src="{{ url('assets/img/icones/garantia.png') }}">
                    <p>30 Dias de Garantia em Toda a Loja</p>
                </li>

                <li>
                    <img src="{{ url('assets/img/icones/suporte.png') }}">
                    <p>Suporte 24hrs / 7 Dias por semana</p>
                </li>

                <li>
                    <img src="{{ url('assets/img/icones/entrega.png') }}">
                    <p>Entrega Rápida</p>
                </li>
            </ul>
        </nav>
    </div>

    <div class="products">
        <div class="block">
            <h2 class="blockTitle">Materiais</h2>

            <div class="list">
                @foreach($produto->where('categoria', 'Materiais') as $p)
                    <a href="{{ url( "produto/$p->id" ) }}" class="productLink">
                        <div class="product">
                            <div class="imageContainer">
                                <img src="{{ url("/storage/img/produtos/$p->img") }}">
                            </div>

                            <div class="info">
                                <h3>{{ $p->titulo }}</h3>
                                <p class="preco">R$ {{ $p->preco }}</p>
                                <p class="preco_cartao">{{ $p->preco_cartao }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>

        <div class="block">
            <h2 class="blockTitle">Iluminação</h2>

            <div class="list">
                @foreach($produto->where('categoria', 'Iluminação') as $p)
                    <a href="{{ url( "produto/$p->id" ) }}" class="productLink">
                        <div class="product">
                            <div class="imageContainer">
                                <img src="{{ url("/storage/img/produtos/$p->img") }}">
                            </div>

                            <div class="info">
                                <h3>{{ $p->titulo }}</h3>
                                <p class="preco">R$ {{ $p->preco }}</p>
                                <p class="preco_cartao">{{ $p->preco_cartao }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>

        <div class="block">
            <h2 class="blockTitle">Decoração</h2>

            <div class="list">
                @foreach($produto->where('categoria', 'Decoração') as $p)
                    <a href="{{ url( "produto/$p->id" ) }}" class="productLink">
                        <div class="product">
                            <div class="imageContainer">
                                <img src="{{ url("/storage/img/produtos/$p->img") }}">
                            </div>

                            <div class="info">
                                <h3>{{ $p->titulo }}</h3>
                                <p class="preco">R$ {{ $p->preco }}</p>
                                <p class="preco_cartao">{{ $p->preco_cartao }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</main>

@endsection

