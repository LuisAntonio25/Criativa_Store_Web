<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Criativa Store</title>
    <link rel="stylesheet" href="{{url('assets/css/master.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>
<!-- Header -->
<header>
    <div class="topBar">
        <a href="{{ route('welcome') }}" class="logo" title="Criativa Store">
            <img src="{{ url('assets/img/logo.png') }}">
        </a>

        <div class="user">
            @if(session('user_name'))
                <a href="{{ route('logout') }}" class="logout" title="Logout">Olá, {{ session('user_name') }}<img src="{{ url('assets/img/icones/turn-off.png') }}"></a>
            @else
                <a href="{{ route('login') }}" class="login">Login</a>
                <a href="{{ route('cadastro') }}" class="register">Criar Conta</a>
            @endif
        </div>

        <div class="navigation">
            <nav>
                <ul>
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li><a href="{{ route('suporte') }}">Suporte</a></li>
					
					@if (session('user_name'))
						@if (session('user_access') == 2)
							<li><a href="{{ route('admin') }}">Admin</a></li>
						@endif
					@endif
                </ul>
            </nav>
        </div>
    </div>
</header>

@yield('content')

<footer>
    <h2>&copycopyright 2020 Criativa Store</h2>
</footer>
</body>
</html>
