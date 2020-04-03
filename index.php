<!DOCTYPE html>
<html lang="pt-br" itemscope itemtype="https://schema.org/WebSite">
<head>
    <meta charset="UTF-8">
    <title>G3 Infotech - Sua conexão com o mundo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="A G3 Infotech tenta conectar você ao mundo da melhor maneira possivel, buscando
sempre levar a melhor conexão de internet para sua casa ou para o seu negócio.">

    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.g3infotech.com.br">

    <meta itemprop="name" content="G3 Infotech - Sua conexão com o mundo">
    <meta itemprop="description" content="A G3 Infotech tenta conectar você ao mundo da melhor maneira possivel, buscando
sempre levar a melhor conexão de internet para sua casa ou para o seu negócio.">
    <meta itemprop="image" content="https://www.g3infotech.com.br/_img/g3infotech.png">
    <meta itemprop="url" content="https://www.g3infotech.com.br">

    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="_cdn/fonticon.css">
    <link rel="stylesheet" href="_cdn/boot.css">
    <link rel="stylesheet" href="_cdn/style.css">
</head>
<body>

<header>
    <section class="header_up">
        <div class="content">
            <div class="header_up_content">
                <div class="header_call_us_content">
                    <h1>Contato:</h1>
                    <p class="white"> (89) 99463-0386</p>
                </div><!--header_call_us_content-->
                <div class="header_login_register_social">
                    <span>
                    <a href="#" title="Login">Login</a>
                    <p>ou</p>
                        <a href="#" title="Cadastre-se">Cadastrar-se</a>
                    </span>
                    <p class="header_login_register_social_separator white">|</p>
                    <a href="#" class="btn_social" title="Nosso facebook">
                        <div class="header_login_register_social_icons">
                            <span class="icon-facebook"></span>
                        </div><!--facebook-->
                    </a>
                    <a href="#" class="btn_social" title="Nosso Instagram">
                        <div class="header_login_register_social_icons">
                            <span class="icon-instagram"></span>
                        </div><!--instagram-->
                    </a>
                    <a href="#" class="btn_social" title="Nosso Twitter">
                        <div class="header_login_register_social_icons">
                            <span class="icon-twitter"></span>
                        </div><!--youtube-->
                    </a>
                </div><!--header_login_register_social-->
            </div><!--header_up_content-->
        </div><!--content-->
    </section><!--header_up-->
    <section class="header_down">
        <div class="content">
            <div class="header_down_content">
                <a href="" title="G3 Infotech - Sua conexão com o mundo">
                    <img src="_img/logog3.png" alt="G3 Infotech - Sua conexão com o mundo"
                         title="G3 Infotech - Sua conexão com o mundo">
                </a>
                <nav class="header_down_content_menu">
                    <ul>
                        <li><a href="http://localhost/g3infotech">Home</a></li>
                        <li><a href="?file=blog" title="Blog">Blog</a></li>
                        <li><a href="?file=about">Sobre nós</a></li>
                        <li><a href="?file=pricing">Nossos Planos</a></li>
                        <li><a href="?file=contact">Contato</a></li>
                        <li><a href="?file=subscribe" class="header_down_content_nav_sign" title="Assine já">ASSINE
                                JÁ</a></li>
                    </ul>
                </nav>

                <nav  class="header_down_content_menu_mobile">
                    <ul>
                        <li><span class="header_down_content_menu_mobile_icon icon-menu icon-notext"></span></li>
                        <li class="header_down_content_menu_mobile_sub display_none">
                            <ul >
                                <li><a href="http://localhost/g3infotech">Home</a></li>
                                <li><a href="?file=blog" title="Blog">Blog</a></li>
                                <li><a href="?file=about">Sobre nós</a></li>
                                <li><a href="?file=pricing">Nossos Planos</a></li>
                                <li><a href="?file=contact">Contato</a></li>
                                <li><a href="?file=subscribe" class="header_down_content_nav_sign" title="Assine já">ASSINE
                                        JÁ</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div><!--header_down_content-->
        </div><!--content-->
    </section><!--header_down-->
</header>
<main>
    <?php
    $file = filter_input(INPUT_GET, "file", FILTER_SANITIZE_SPECIAL_CHARS);
    if (empty($file)) {
        require __DIR__ . "/home.php";
    } elseif ($file && file_exists(__DIR__ . "/{$file}.php")) {
        require __DIR__ . "/{$file}.php";
    } else {
        require __DIR__ . "/error.php";
    }
    ?>
    <section class="main_know_more">
        <div class="content">
            <div class="main_know_more_content">
                <header>
                    <h1>Quer saber mais?</h1>
                </header>
                <article>
                    <header>
                        <h2>Nossas Páginas</h2>
                    </header>
                    <ul>
                        <li><a href="http://localhost/g3infotech">Home</a></li>
                        <li><a href="?file=blog" title="Blog">Blog</a></li>
                        <li><a href="?file=about">Sobre nós</a></li>
                        <li><a href="?file=pricing">Nossos Planos</a></li>
                        <li><a href="?file=contact">Contato</a></li>
                    </ul>
                </article>
                <article>
                    <header>
                        <h2>Links Úteis</h2>
                    </header>
                    <ul>
                        <li><a href="#">Política de privacidade</a></li>
                        <li><a href="#">Aviso Legal</a></li>
                        <li><a href="#">Termos de uso</a></li>
                    </ul>
                </article>
                <article>
                    <header>
                        <h2>Nossos projetos</h2>
                    </header>
                    <ul>
                        <li><a href="#">G3Web</a></li>
                        <li><a href="#">G3Auto</a></li>
                    </ul>
                </article>
            </div><!--main_know_more_content-->
        </div><!--content-->
    </section><!--main_know_more-->
</main>
<footer>
    <p>Todos os Direitos Reservados a G3 Infotech ®</p>
</footer>

<script src="js/jquery.js"></script>
<script src="js/script.js"></script>
</body>
</html>