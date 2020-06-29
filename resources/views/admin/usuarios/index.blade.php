 @extends('templates.template')

@section('content')
	
<main class="adminPage adminPageUsuariosIndex">
	<div class="contentContainer">
		<div class="header">
			<h2>Usuários</h2>
		</div>
		
		<div class="navigation">
			<ul>
				<li><a href="{{ route('admin') }}">Voltar</a></li>
				<li><a href="{{ route('cadastro') }}">Adicionar</a></li>
			<ul>
		</div> 
		
		@if(session('success'))
			<div class="success_message">{{ session('success') }}</div>
		@elseif(session('erro'))
			<div class="error_message">{{ session('erro') }}</div>
		@endif
		
		<table>
			<thead>
				<td>Nome</td>
				<td>Email</td>
				<td>Acesso</td>
				<td>Ações</td>
			</thead>
			
			<tbody>
			@foreach ($usuario as $user)
				<tr>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>@if($user->access == 1) Usuário @elseif($user->access == 2) Administrador @endif</td>
					<td>
						<a href="{{ url( "/admin/usuarios/apagar/$user->id" ) }}">Apagar</a>
						<a href="{{ url( "/admin/usuarios/editar/$user->id" ) }}">Editar</a>
					</td>
				</tr>
			@endforeach
			<tbody>
		</table>
	</div>
</main>

@endsection 