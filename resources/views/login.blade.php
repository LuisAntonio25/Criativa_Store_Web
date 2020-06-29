@extends('templates.template')

@section('content')

<!-- Main -->
<main class="loginPage">
    <div class="contentContainer">
        <h2>Faça o Login</h2>
		
		@if(session('success'))
			<div class="success_message">{{ session('success') }}</div>
		@elseif(session('erro'))
			<div class="error_message">{{ session('erro') }}</div>
		@endif

        <form action="{{route('logar')}}" method="post">
            {{ csrf_field() }}

            <input type="email" name="email" placeholder="Seu Email" maxlength="70" required>
            <input type="password" name="senha" placeholder="Sua Senha" maxlength="70" required>
            <button type="submit" name="submit" class="submit">Login</button>
        </form>
    </div>
</main>

@endsection
