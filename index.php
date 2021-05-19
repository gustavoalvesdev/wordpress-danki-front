<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gustavo Alves - Tema</title>
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
            <br />
            <br />
            <!-- clear -->
            <div class="w50 time-descricao">
                <h2>Programação, Marketing e Design</h2>
                <p>Sou <strong>especialista</strong> em programação, marketing e design e posso ser seu aliado no <strong>crescimento do seu negócio</strong></p>
                <a target="_blank" href="https://wa.me/5511996531308">VAMOS CONVERSAR NO WHATSAPP</a>
            </div>
            <!-- w50 -->
            <div class="w50 time-imagem">
                <img src="images/equipe.png" alt="equipe da empresa" />
            </div>
            <!-- w50 -->
            <div class="clear"></div>
            <!-- clear -->
        </div>
        <!-- center -->
    </section>
    <!-- topo -->

    <div class="circle">
        <i class="fas fa-angle-down"></i>
        <!-- fas -->
    </div>
    <!-- circle -->

    <section class="clientes-slider">
        <div class="center">
            <div style="max-width: 700px; margin: 0 auto; overflow: hidden;" class="slider-container">
                <img src="images/amazon.png" alt="logotipo cliente" />
                <img src="images/costco.png" alt="logotipo cliente" />
                <img src="images/dominos.png" alt="logotipo cliente" />
                <img src="images/uber.png" alt="logotipo cliente" />
                <img src="images/walmart.png" alt="logotipo cliente" />
            </div>
            <!-- slider-container -->
        </div>
        <!-- center -->
    </section>
    <!-- clientes-slider -->

    <section class="diferenciais">
        <div class="center">
            <h2>Contribuo com Projetos de Ponta a Ponta</h2>

            <div class="icons-diferenciais">

                <div class="box-single-diferenciais">
                    <img src="images/icon1.png" alt="ícones" />
                    <h3>Criação Web</h3>
                    <p>
                        Websites, Lojas Virtuais, Landing Pages, Páginas de Venda, Páginas de Captura, Sistemas, Páginas de Conversão, Cardápios Online e muito mais!
                    </p>
                </div>
                <!-- box-single-diferenciais -->

                <div class="box-single-diferenciais">
                    <img src="images/icon2.png" alt="ícones" />
                    <h3>Design Gráfico</h3>
                    <p>
                        Cartões de Visita, Cartões Virtuais, Logotipos, Flyers, Banners, Artes para Mídias Sociais, Stories Animados etc!
                    </p>
                </div>
                <!-- box-single-diferenciais -->

                <div class="box-single-diferenciais">
                    <img src="images/icon3.png" alt="ícones" />
                    <h3>Marketing Digital</h3>
                    <p>
                        Anúncios Facebook e Instagram, Campanhas, E-mail Marketing, SEO, Blogs, Marketplaces, Google Ads, etc.
                    </p>
                </div>
                <!-- box-single-diferenciais -->
            </div>
            <!-- icons-diferenciais -->
        </div>
        <!-- center -->
    </section>
    <!-- diferenciais -->

    <section class="sobre-time">
        <div class="center">
            <div class="w50 time-descricao-2">
                <h2>Profissional experiente,<br> comunicador e coeso</h2>
                <p>
                    Eu acredito que marcas fortes são construídas a partir de transformações importantes na vida dos consumidores. Exatamente como uma conversa que ganha forma, a ideia vira flâmula.
                    <br><br>
                    Comunicar bem, de forma coerente e clara não é algo fácil e eu estou aqui para ajudar você e seu time. Você escolhe, remoto ou presencial, para seu cliente ou seu público interno, você determina como vamos te ajudar.
                </p>
            </div>
            <!-- w50 -->
            <div class="w50 img-time">
                <img src="images/ilustracao-04.png">
            </div>
            <!-- w50 -->
            <div class="clear"></div>
            <!-- clear -->
        </div>
        <!-- center -->
    </section>
    <!-- sobre-time -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script>
        $('.clientes-slider .slider-container').slick({
            dots: true,
            arrows: false,
            infinite: false,
            speed: 1000,
            slidesToShow: 4,
            autoplay: true,
            autoplaySpeed: 3000,
            pauseOnHover: false,
            responsive:[
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                }
            ]
        });
    </script>
    <script>
        // menu responsivo
        $('.menu-mobile i').click(function () {
            $('.menu-mobile').find('ul').slideToggle();
        });
    </script>
</body>
</html>