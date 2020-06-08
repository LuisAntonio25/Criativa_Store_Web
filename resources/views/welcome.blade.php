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
        <main class="homePage">
            <div class="homeBanner"></div>

            <div class="features">
                <nav>
                    <ul>
                        <li>
                            <img src="assets/img/icones/pagamento.png">
                            <p>Sistema Seguro de Pagamento</p>
                        </li>
                        
                        <li>
                            <img src="assets/img/icones/garantia.png">
                            <p>30 Dias de Garantia em Toda a Loja</p>
                        </li>
                        
                        <li>
                            <img src="assets/img/icones/suporte.png">
                            <p>Suporte 24hrs / 7 Dias por semana</p>
                        </li>
                        
                        <li>
                            <img src="assets/img/icones/entrega.png">
                            <p>Entrega Rápida</p>
                        </li>
                    </ul>
                </nav>
            </div>
            
            <div class="products">
                <div class="block">
                    <h2 class="blockTitle">Materiais</h2>
                    
                    <div class="list">
                        <a href="/produto/1" class="productLink">
                            <div class="product">
                                <div class="imageContainer">
                                    <img src="assets/img/produtos/mat-1.jpg">
                                </div>
                                
                                <div class="info">
                                    <h3>Manta Líquida 4kg Cinza</h3>
                                    <p class="preco">R$ 44,90</p>
                                    <p class="preco_cartao">4x R$ 11,22 Sem Juros</p>
                                </div>
                            </div>
                        </a>
                        
                        <a href="/produto/2" class="productLink">
                            <div class="product">
                                <div class="imageContainer">
                                    <img src="assets/img/produtos/mat-2.jpg">
                                </div>
                                
                                <div class="info">
                                    <h3>Aditivo Impermeabilizante 18kg</h3>
                                    <p class="preco">R$ 104,90</p>
                                    <p class="preco_cartao">4x R$ 26,22 Sem Juros</p>
                                </div>
                            </div>
                        </a>
                        
                        <a href="/produto/3" class="productLink">
                            <div class="product">
                                <div class="imageContainer">
                                    <img src="assets/img/produtos/mat-3.jpg">
                                </div>
                                
                                <div class="info">
                                    <h3>Gesso em Pó Secagem Rápida 1kg</h3>
                                    <p class="preco">R$ 8,89</p>
                                    <p class="preco_cartao">2x R$ 4,44 Sem Juros</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="block">
                    <h2 class="blockTitle">Iluminação</h2>
                    
                    <div class="list">
                        <a href="/produto/4" class="productLink">
                            <div class="product">
                                <div class="imageContainer">
                                    <img src="assets/img/produtos/ilu-1.jpg">
                                </div>
                                
                                <div class="info">
                                    <h3>Luminária Painel Led 12x12cm</h3>
                                    <p class="preco">R$ 25,90</p>
                                    <p class="preco_cartao">2x R$ 12,95 Sem Juros</p>
                                </div>
                            </div>
                        </a>
                        
                        <a href="/produto/5" class="productLink">
                            <div class="product">
                                <div class="imageContainer">
                                    <img src="assets/img/produtos/ilu-2.jpg">
                                </div>
                                
                                <div class="info">
                                    <h3>Arandela Dourada Led</h3>
                                    <p class="preco">R$ 55,90</p>
                                    <p class="preco_cartao">4x R$ 13,22 Sem Juros</p>
                                </div>
                            </div>
                        </a>
                        
                        <a href="/produto/6" class="productLink">
                            <div class="product">
                                <div class="imageContainer">
                                    <img src="assets/img/produtos/ilu-3.jpg">
                                </div>
                                
                                <div class="info">
                                    <h3>Luminária de Mesa Led</h3>
                                    <p class="preco">R$ 169,90</p>
                                    <p class="preco_cartao">4x R$ 42,47 Sem Juros</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="block">
                    <h2 class="blockTitle">Decoração</h2>
                    
                    <div class="list">
                        <a href="/produto/7" class="productLink">
                            <div class="product">
                                <div class="imageContainer">
                                    <img src="assets/img/produtos/dec-1.jpg">
                                </div>
                                
                                <div class="info">
                                    <h3>Cortina Veneza Bege 2,60x2,30cm</h3>
                                    <p class="preco">R$ 69,90</p>
                                    <p class="preco_cartao">4x R$ 17,47 Sem Juros</p>
                                </div>
                            </div>
                        </a>
                        
                        <a href="/produto/8" class="productLink">
                            <div class="product">
                                <div class="imageContainer">
                                    <img src="assets/img/produtos/dec-2.jpg">
                                </div>
                                
                                <div class="info">
                                    <h3>Papel de Parede Tijolinho</h3>
                                    <p class="preco">R$ 149,90</p>
                                    <p class="preco_cartao">4x R$ 37,47 Sem Juros</p>
                                </div>
                            </div>
                        </a>
                        
                        <a href="/produto/9" class="productLink">
                            <div class="product">
                                <div class="imageContainer">
                                    <img src="assets/img/produtos/dec-3.jpg">
                                </div>
                                
                                <div class="info">
                                    <h3>Toalha de Mesa 160x220cm</h3>
                                    <p class="preco">R$ 99,90</p>
                                    <p class="preco_cartao">4x R$ 24,97 Sem Juros</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </main>
        
        <footer>
            <h2>&copycopyright 2020 Criativa Store</h2>
        </footer>
    </body>
</html>