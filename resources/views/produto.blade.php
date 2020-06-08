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
                    <img src="/assets/img/logo.png">
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
        <main class="produtoPage">
            <div class="contentContainer">
                <div class="imageContainer">
                    <?php
                        if($id == 1) {
                            echo '<img src="/assets/img/produtos/mat-1.jpg">';
                        }else if($id == 2) {
                            echo '<img src="/assets/img/produtos/mat-2.jpg">';
                        }else if($id == 3) {
                            echo '<img src="/assets/img/produtos/mat-3.jpg">';
                        }else if($id == 4) {
                            echo '<img src="/assets/img/produtos/ilu-1.jpg">';
                        } else if($id == 5) {
                            echo '<img src="/assets/img/produtos/ilu-2.jpg">';
                        }else if($id == 6) {
                            echo '<img src="/assets/img/produtos/ilu-3.jpg">';
                        }else if($id == 7) {
                            echo '<img src="/assets/img/produtos/dec-1.jpg">';
                        }else if($id == 8) {
                            echo '<img src="/assets/img/produtos/dec-2.jpg">';
                        }else if($id == 9) {
                            echo '<img src="/assets/img/produtos/dec-3.jpg">';
                        }
                    ?>
                </div>
                
                <div class="info">
                    <h2 class="titulo">
                        <?php
                            if($id == 1) {
                                echo 'Manta Líquida 4kg Cinza';
                            }else if($id == 2) {
                                echo 'Aditivo Impermeabilizante 18kg';
                            }else if($id == 3) {
                                echo 'Gesso em Pó Secagem Rápida 1kg';
                            }else if($id == 4) {
                                echo 'Luminária Painel Led 12x12cm';
                            } else if($id == 5) {
                                echo 'Arandela Dourada Led';
                            }else if($id == 6) {
                                echo 'Luminária de Mesa Led';
                            }else if($id == 7) {
                                echo 'Cortina Veneza Bege 2,60x2,30cm';
                            }else if($id == 8) {
                                echo 'Papel de Parede Tijolinho';
                            }else if($id == 9) {
                                echo 'Toalha de Mesa 160x220cm';
                            }
                        ?>
                    </h2>
                    
                    <h3 class="categoria">
                        Categoria: 
                        <?php
                            if($id == 1) {
                                echo 'Materiais';
                            }else if($id == 2) {
                                echo 'Materiais';
                            }else if($id == 3) {
                                echo 'Materiais';
                            }else if($id == 4) {
                                echo 'Iluminação';
                            } else if($id == 5) {
                                echo 'Iluminação';
                            }else if($id == 6) {
                                echo 'Iluminação';
                            }else if($id == 7) {
                                echo 'Decoração';
                            }else if($id == 8) {
                                echo 'Decoração';
                            }else if($id == 9) {
                                echo 'Decoração';
                            }
                        ?>
                    </h3>
                    
                    <h2 class="preco">
                        <?php
                            if($id == 1) {
                                echo 'R$ 44,90';
                            }else if($id == 2) {
                                echo 'R$ 104,90';
                            }else if($id == 3) {
                                echo 'R$ 8,89';
                            }else if($id == 4) {
                                echo 'R$ 25,90';
                            } else if($id == 5) {
                                echo 'R$ 55,90';
                            }else if($id == 6) {
                                echo 'R$ 169,90';
                            }else if($id == 7) {
                                echo 'R$ 69,90';
                            }else if($id == 8) {
                                echo 'R$ 149,90';
                            }else if($id == 9) {
                                echo 'R$ 99,90';
                            }
                        ?>
                    </h2>
                    
                    <h3 class="preco_cartao">
                        <?php
                            if($id == 1) {
                                echo '4x R$ 11,22 Sem Juros';
                            }else if($id == 2) {
                                echo '4x R$ 26,22 Sem Juros';
                            }else if($id == 3) {
                                echo '2x R$ 4,44 Sem Juros';
                            }else if($id == 4) {
                                echo '2x R$ 12,95 Sem Juros';
                            } else if($id == 5) {
                                echo '4x R$ 13,22 Sem Juros';
                            }else if($id == 6) {
                                echo '4x R$ 42,47 Sem Juros';
                            }else if($id == 7) {
                                echo '4x R$ 17,47 Sem Juros';
                            }else if($id == 8) {
                                echo '4x R$ 37,47 Sem Juros';
                            }else if($id == 9) {
                                echo '4x R$ 24,97 Sem Juros';
                            }
                        ?>
                    </h3>
                    
                    <p class="descricao">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel turpis sed tortor finibus tristique a ac nulla. Etiam neque sapien, molestie eu magna in, vulputate varius eros.
                    </p>
                
                    <a class="comprar" href="#">Comprar</a>
                </div>
            </div>
        </main>
        
        <footer>
            <h2>&copycopyright 2020 Criativa Store</h2>
        </footer>
    </body>
</html>