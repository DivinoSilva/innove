<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" >

        <title>InNove me</title>

        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="/css/style.css">

    </head>

    <body>

        <!-- CABECALHO -->
        <header id="cabecalho">
            <script>
                (function (i, s, o, g, r, a, m) {
                    i['GoogleAnalyticsObject'] = r;
                    i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
                    a = s.createElement(o),
                            m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src = g;
                    m.parentNode.insertBefore(a, m)
                })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

                ga('create', 'UA-93979807-1', 'auto');
                ga('send', 'pageview');
            </script>

            <!-- Facebook Pixel Code -->
            <script>
                !function (f, b, e, v, n, t, s) {
                    if (f.fbq)
                        return;
                    n = f.fbq = function () {
                        n.callMethod ?
                                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                    };
                    if (!f._fbq)
                        f._fbq = n;
                    n.push = n;
                    n.loaded = !0;
                    n.version = '2.0';
                    n.queue = [];
                    t = b.createElement(e);
                    t.async = !0;
                    t.src = v;
                    s = b.getElementsByTagName(e)[0];
                    s.parentNode.insertBefore(t, s)
                }(window,
                        document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
                fbq('init', '1006502336148869'); // Insert your pixel ID here.
                fbq('track', 'PageView');
            </script>
            <noscript><img height="1" width="1" style="display:none"
                           src="https://www.facebook.com/tr?id=1006502336148869&ev=PageView&noscript=1"
                           /></noscript>
            <!-- DO NOT MODIFY -->
            <!-- End Facebook Pixel Code -->
            <script>fbq('track', 'Lead');</script>



               
  

            <nav class="navbar navbar-default navbar-static-top" id="nav_wrapper">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" 
                                data-toggle="collapse" data-target="#navbar">
                            <!-- A classe sr-only só é exibida em leitor de tela para que pessoas
                                    com deficiencia visual entendam o que há na tela -->
                            <span class="sr-only">Menu de Navegação</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Logomarca ao lado esquerdo -->
                        <a class="navbar-brand" href="/"><img src="./img/innove_logo_inverso.png" alt="Logo"></a>
                    </div>
                    <!-- Itens da navbar -->
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="/home/principal">Home</a></li>
                        </ul>
                    </div><!-- fim .nav-collapse -->
                </div><!-- fim .container -->
            </nav>
        </header>
        <!-- END CABECALHO -->

        <!-- Cabecalho da seção -->
        <div class="row text-center titulo_secao" >
            <div class="col-md-6 col-md-offset-3">
                <!-- Título da seção -->
                <h2 class="head-set">Nossos E-Books vão ajudar alavancar seu negócio ou sua carreira.</h2>
                <!-- Sub-título da seção -->
                <p>

                </p>
            </div>
        </div>


        <div class="container conteudo" id="conteudo_imagens">
            <div class="row text-center">
                <!-- Primeiro Item -->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
                    <span class="fa fa-mobile fa-5x"> </span>
                    <h2>Canvas</h2>
                    <p>Guia pratico</p>
                    <p><a class="btn btn-success" href="/upload/EBOOK_CANVAS.pdf" target="_blank" >Download &raquo;</a></p>
                </div>

                <!-- Segundo item -->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
                    <span class="fa fa-hand-spock-o fa-5x"> </span>
                    <h2>Easy APP</h2>
                    <p>Fábrica de aplicativos</p>
                    <p><a class="btn btn-primary" href="/upload/EBOOK_APP.pdf" target="_blank" >Download &raquo;</a></p>
                </div>

                <!-- Terceiro item -->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
                    <span class="fa fa-book fa-5x"> </span>
                    <h2>Como criar títulos</h2>
                    <p>Conteudos memoráveis</p>
                    <p><a class="btn btn-danger" href="/upload/EBOOK_Conteudos-memoraveis.pdf" target="_blank">Download &raquo;</a></p>
                </div>


            </div>
        </div> <!-- fim #conteudo_imagens -->

        <div class="container conteudo" id="conteudo_imagens">
            <div class="row text-center">

                <!-- Primeiro Item -->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
                    <span class="fa fa-line-chart fa-5x"> </span>
                    <h2>Growth Hacking</h2>
                    <p>Infográfico</p>
                    <p><a class="btn btn-success" href="/upload/INFO NOVO.jpg" target="_blank" >Download &raquo;</a></p>
                </div>




            </div>
        </div> <!-- fim #conteudo_imagens -->	



        <!-- RODAPE -->
        <footer id="rodape">
            <div class="container">
                <p>InNove</p>
            </div>
        </footer>
        <!-- END RODAPE -->


        <!-- SCRIPTS -->
        <script type="text/javascript" src="/js/pickaday.js"></script>
        <script>
    $(".datepicker").datepicker({
        dateFormat: "dd/mm/yy"
    });
        </script>

        <script type="text/javascript" src="/js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>

    </body>

</html>