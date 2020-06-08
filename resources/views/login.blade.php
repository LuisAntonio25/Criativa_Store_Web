<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <title>Criativa Store</title>
        <link rel="stylesheet" href="/assets/css/master.css">
        <link href="https://fonts.googleapis.com/css2?family=Muli:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
    </head>
    
    <body>
        <!-- Header -->
        <header>
            <div class="topBar">
                <a href="/" class="logo" title="Criativa Store">
                    <img src="assets/img/logo.png">
                </a>

                <div class="user">
                    <?php
                        if(session('user_nome')) {
                            echo '<a href="/logout" class="logout" title="Logout">Olá, '.session('user_nome').'<img src="assets/img/icones/turn-off.png"></a>';
                        }else {
                            echo '<a href="/login" class="login">Login</a>';
                            echo '<a href="/cadastro" class="register">Criar Conta</a>';
                        }
                    ?>
                </div>

                <div class="navigation">
                    <nav>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/suporte">Suporte</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <!-- Main -->
        <main class="loginPage">
            <div class="contentContainer">
                <h2>Faça o Login</h2>
                
                <form action="{{route('logar')}}" method="post">
                    {{ csrf_field() }}
                    
                    <input type="email" name="email" placeholder="Seu Email" maxlength="70" required>
                    <input type="password" name="senha" placeholder="Sua Senha" maxlength="70" required>
                    <button type="submit" name="submit" class="submit">Login</button>
                </form> 
            </div>
        </main>
        
        <footer>
            <h2>&copycopyright 2020 Criativa Store</h2>
        </footer>
    </body>
</html>