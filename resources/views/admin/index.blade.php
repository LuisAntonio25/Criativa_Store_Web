@extends('templates.template')

@section('content')
	
<main class="adminPage adminPageAdminIndex">
	<div class="contentContainer">
		<div class="header">
			<h2>Administração</h2>
		</div>
		
		<div class="navigation">
			<nav>
				<ul>
					<li><a href="{{ route('admin.produtos.index') }}">Produtos</a></li>
					<li><a href="{{ route('admin.usuarios.index') }}">Usuários</a></li>
				</ul>
			</nav>
		</div>
	</div>
</main>

@endsection