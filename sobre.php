<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gustavo Alves - Desenvolvimento de Sites, Sistemas e Criações Gráficas em Ferraz de Vasconcelos</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <section class="topo">
        <div class="center">
            <header>
                <div class="logo">
                    <img src="images/logo.png" alt="logo do site" />
                </div>
                <!-- logo -->
            </header>
            <ul class="menu-desktop">
                <li><a href="#">Home</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
            <!-- menu-desktop -->
            <div class="menu-mobile">   
                <i class="fas fa-align-right"></i>
                <!-- fas -->
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </div>
            <!-- menu-mobile -->
            <div class="clear"></div>
        </div>
        <!-- center -->
    </section>
    <!-- topo -->

    <section class="sobre-equipe">
        <div class="center">
            <div class="w50 equipe-sobre-texto">
                <h2>Uma equipe estratégica para um trabalho incrível</h2>
                <p>
                    Com foco permanente na geração de resultados para empresas, atuamos na consultoria estratégica e na criação e implementação de soluções de comunicação criativas, consistentes e adequadas às necessidades e características de cada companhia. Para isso, trabalhamos sempre em parceria e colaboração com interfaces e executivos das organizações, mantendo completo envolvimento com os negócios de cada cliente.
                </p>
            </div>
            <!-- w50 -->
            <div class="w50">
                <img src="images/foto-equipe.png">
            </div>
            <div class="clear"></div>
            <!-- clear -->
        </div>
        <!-- center -->
    </section>
    <!-- sobre-equipe -->

    <section class="sobre-imagens">
        <div class="center">
            <div class="img-sobre">
                <img src="images/foto-1.png">
            </div>
            <!-- img-sobre -->
            <div class="img-sobre">
                <img src="images/foto-2.png">
            </div>
            <!-- img-sobre -->
            <div class="img-sobre">
                <img src="images/foto-3.png">
            </div>
            <!-- img-sobre -->
            <div class="img-sobre">
                <img src="images/foto-4.png">
            </div>
            <!-- img-sobre -->
        </div>
        <!--center -->
    </section>
    <!-- sobre-imagens -->

    <footer>
        <section class="metodologia">
        <div class="center">
            <h2>Conheça nossa Metodologia</h2>
            <p>O que acha de fazermos o que mais gostamos? Conversar!<br>Entre em contato por e-mail ou telefone.</p>
            <a href="/contato">Entrar em Contato</a>
        </div>
        <!-- center -->
        </section>
        <!-- metodologia -->
        <div class="center">
            <div class="col-footer">
                <h2>SUPORTE</h2>
                <p><a href="">Blog</a></p>
                <p><a href="">FAQ's</a></p>
            </div>
            <!-- col-footer -->
            <div class="col-footer">
                <h2>CONSULTORIA</h2>
                <p><a href="">Metodologia</a></p>
                <p><a href="">Cases</a></p>
            </div>
            <!-- col-footer -->
            <div class="col-footer">
                <h2>EMPRESA</h2>
                <p><a href="">Sobre</a></p>
                <p><a href="">Política de Privacidade</a></p>
            </div>
            <!-- col-footer -->
            <div style="width: 40%; text-align: right" class="col-footer">
                <img src="images/logo-footer.png" />
            </div>
            <!-- col-footer --> 
        </div>
        <!-- center -->
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        // menu responsivo
        $('.menu-mobile i').click(function () {
            $('.menu-mobile').find('ul').slideToggle();
        });
    </script>
</body>
</html>