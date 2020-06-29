  @extends('templates.template')

@section('content')
	
<main class="adminPage adminPageUsuariosEditar">
	<div class="contentContainer">
		<div class="header">
			<h2>Editar Usuário</h2>
		</div>
		
		<div class="navigation">
			<ul>
				<li><a href="{{ route('admin.usuarios.index') }}">Voltar</a></li>
			<ul>
		</div>
		
		@if(session('success'))
			<div class="success_message">{{ session('success') }}</div>
		@elseif(session('erro'))
			<div class="error_message">{{ session('erro') }}</div>
		@endif
		
		<form action="{{ route('usuario.editar') }}" method="post">
			{{ csrf_field() }}
			
			<label for="nome">Nome</label>
			<input type="text" name="nome" id="nome" maxlength="191" value="{{ $usuario->name }}" required>
			
			<label for="email">Email</label>
			<input type="email" name="email" id="email" maxlength="191" value="{{ $usuario->email }}" required>
			
			<label for="acesso">Acesso</label>
			<select name="acesso" id="acesso"required>
				@if($usuario->access == 1)
					<option value="1" selected>Usuário</option>
					<option value="2">Administrador</option>
				@elseif($usuario->access == 2)
					<option value="1">Usuário</option>
					<option value="2" selected>Administrador</option>
				@endif
			</select>
			
			<label for="senha">Senha</label>
			<input type="password" name="senha" id="senha" maxlength="191">
			
			<label for="repetirSenha">Repetir Senha</label>
			<input type="password" name="repetirSenha" id="repetirSenha" maxlength="191">
			
			<input type="hidden" name="id" value="{{ $usuario->id }}">
			
			<button class="submit" name="submit" value="submit">Salvar Mudanças</button>
		</form>
	</div>
</main>

@endsection