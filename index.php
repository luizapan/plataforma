<!doctype html>
<html class="no-js" lang="pt">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Plataforma</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        
        <!-- Fonts -->
        <script src="https://use.typekit.net/lfl4mgt.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        
        <!-- CSS -->
        <!-- Bootstrap: Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Navegar</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#"><img src="img/plataforma.png"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse navbar-right">
                    <ul class="nav navbar-nav text-uppercase">
                        <li><a href="#">Home</a></li>
                        <li><a href="#cursos">Cursos</a></li>
                        <li><a href="#contato">Contatos</a></li>
                        <li class="active"><a href="#">Inscreva-se</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-white">
                        <h1>Transforme sua carreira e alcance seus sonhos.</h1>
                        <h3>
                            A Plataforma lança você no mercado.<br>
                            Junte-se a nós!</h3>
                    </div>
                    <form id="myform" name="theform" class="col-md-offset-1 col-md-5" action="processform.php" method="POST">
                        <div class="row">
                            <div class="form-group col-sm-6 has-success has-feedback">
                                <input type="text" name="nome" class="form-control input-lg" id="nome" autofocus required="required" placeholder="NOME">
                            </div>
                            <div class="form-group col-sm-6 has-error has-feedback">
                                <input type="tel" class="form-control input-lg" type="tel" required="required" maxlength="15" name="phone" id="phone" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" placeholder="(xx) xxxx-xxxx">
                            </div>
                        </div>
                        <div class="form-group has-error has-feedback">
                            <input type="email" name="email" class="form-control input-lg" required="required" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="E-MAIL">
                        </div>
                        <div class="form-group">
                            <select class="form-control input-lg" name="curso" id="curso" placeholder="CURSO">
                              <option selected hidden>CURSO</option>
                              <option value="contabilidade">CONTABILIDADE</option>
                              <option value="empreendedorismo">EMPREENDEDORISMO SOCIAL</option>
                              <option value="estatistica">ESTATISTICA</option>
                              <option value="finanças">FINANÇAS</option>
                              <option value="ingles">INGLES BASICO</option>
                              <option value="direito">INTRODUÇAO AO DIREITO</option>
                              <option value="marketing">MARKETING</option>
                              <option value="matematica">MATEMATICA BASICA</option>
                              <option value="office">PACOTE OFFICE</option>
                              <option value="portugues">PORTUGUES BASICO</option>
                              <option value="cuidados">PROFISSIONAL DE CUIDADOS</option>
                              <option value="serviços">PRESTAÇAO DE SERVIÇOS</option>
                              <option value="rh">RECURSOS HUMANOS</option>
                              <option value="trabalho">SEGURANÇA NO TRABALHO</option>
                              <option value="informatica">TECNICAS DE INFORMATICA</option>
                              <option value="excel">TECNICAS DE EXCEL</option>
                              <option value="word">TECNICAS DE WORD</option>
                              <option value="vendas">TECNICAS DE VENDAS</option>
                            </select>
                        </div>
                        <div class="text-center"><button type="button" class="btn btn-lg btn-danger">Inscreva-se!</button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <a id="cursos"></a>
            <div class="banner text-center"><span class="texto-banner">Conheça nossos cursos</span></div>
            <div class="form-group">&nbsp;</div>
            <div class="form-group">&nbsp;</div>
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="img/image_1.png">
                    <h2>Formativo</h2>
                    
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text-center">
                            <p>A formação de base da Plataforma qualifica você para superar os desafios do mercado de trabalho.</p>
                            <p><a href="#"><u>Saiba mais</u></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <img src="img/image_2.png">
                    <h2>F.Lead</h2>
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text-center">
                            <p>O curso top da Plataforma, perfeito para quem deseja alçar vôos mais altos e tornar-se um grande líder.</p>
                            <p><a href="#"><u>Saiba mais</u></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <img src="img/image_3.png">
                    <h2>Modulares</h2>
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text-center">
                            <p>Já conhece bem suas forças e fraquezas? Escolha os melhores cursos para complementar sua formação.</p>
                            <p><a href="#"><u>Saiba mais</u></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <a id="contato"></a>
            <div class="row info">
                <div class="col-md-5 center-block pull-right">
                    <div class="texto-contato">
                        <h4>Onde estamos?</h4>
                        <p>Setor Comercial Sul</p>
                        <p>Edifício Serra Dourada</p>
                        <p>sala 201</p>
                        <h4>Entre em contato</h4>
                        <p>3522-4798 8116-0650</p>
                        <p>contato@plataforma.com.br</p>
                    </div>
                </div>
            </div>
        </div>

        <footer class="container-fluid footer">
          <div class="row center-block">
            <div class="col-lg-12 col-md-12 col-small-12">
                <p class="text-footer">&copy; Plataforma Soluções Corporativas 2016</p>
            </div>
          </div>
        </footer>


        <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.3.min.js"><\/script>')</script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

        <!-- Form validation jquery -->
        <script>
            $(document).ready(function() {
                $("#myform").validate();
            });
        </script>

    </body>
</html>
