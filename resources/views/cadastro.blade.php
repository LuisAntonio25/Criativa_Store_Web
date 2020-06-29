@extends('templates.template')

@section('content')

<!-- Main -->
<main class="cadastroPage">
    <div class="contentContainer">

        <h2>Criar uma Conta</h2>
		
		@if(session('erro'))
			<div class="error_message">{{ session('erro') }}</div>
		@endif
		
        <form action="{{route('cadastrar')}}" method="post">
            {{ csrf_field() }}

            <input type="text" name="nome" placeholder="Seu Nome" maxlength="70" required>
            <input type="email" name="email" placeholder="Email" maxlength="70" required>
            <input type="password" name="senha" placeholder="Senha" maxlength="70" required>
            <input type="password" name="repetirSenha" placeholder="Repita a Senha" maxlength="70" required>
            <button type="submit" name="submit" class="submit">Cadastrar</button>
        </form>
    </div>
</main>

@endsection
