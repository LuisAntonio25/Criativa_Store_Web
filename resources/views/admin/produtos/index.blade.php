@extends('templates.template')

@section('content')
	
<main class="adminPage adminPageProdutosIndex">
	<div class="contentContainer">
		<div class="header">
			<h2>Produtos</h2>
		</div>
		
		<div class="navigation">
			<ul>
				<li><a href="{{ route('admin') }}">Voltar</a></li>
				<li><a href="{{ route('admin.produtos.novo') }}">Adicionar</a></li>
			<ul>
		</div>
		
		@if(session('success'))
			<div class="success_message">{{ session('success') }}</div>
		@elseif(session('erro'))
			<div class="error_message">{{ session('erro') }}</div>
		@endif
		
		<table>
			<thead>
				<td>Título</td>
				<td>Categoria</td>
				<td>Preço</td>
				<td>Ações</td>
			</thead>
			
			<tbody>
			@foreach ($produto as $p)
				<tr>
					<td>{{ $p->titulo }}</td>
					<td>{{ $p->categoria }}</td>
					<td>R$ {{ $p->preco }}</td>
					<td>
						<a href="{{ url( "produto/$p->id" ) }}">Ver</a>
						<a href="{{ url( "/admin/produtos/apagar/$p->id" ) }}">Apagar</a>
						<a href="{{ url( "/admin/produtos/editar/$p->id" ) }}">Editar</a>
					</td>
				</tr>
			@endforeach
			<tbody>
		</table>
	</div>
</main>

@endsection 