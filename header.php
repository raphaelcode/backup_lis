<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Portal LIS | Uma nova ideia em Ilha Solteira</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portal Lis">
    <meta name="author" content="Lis Desenvolvimento Web">
        <link rel="shortcut icon" href="img/ico.png" type="image/x-icon">
    <link href="css/backindex.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="css/template.css" rel="stylesheet">
    <link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" />
    <!-- Coloquei pelo light box -->
    <link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
    <link href='http://fonts.googleapis.com/css?family=Fredoka+One|Open+Sans:400,700' rel='stylesheet' type='text/css'>

    

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->
</head>
<body>

  <!-- Google Analytics Plugin -->
  <?php include_once("analyticstracking.php") ?>
  
  <!-- FACEBOOK PLUGLIN -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>

  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<div class="container">
      <div class="row" id="topo">

        <div class="span4"> <!-- Lis Logo -->
          <a href="index.php" title="Home">
            <img src="img/lis_logo.png" class="img-rounded" alt="logotipo">
          </a>
        </div>

        <div class="span8">  <!-- Comeco do Slider -->
          <div class="carousel slide" id="myCarousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner">
            <div class="item"><img style="width: 1000px; heigth: 500px;" class="img-rounded" src="img/anuncio_banner.png"></div>
            <div class="item active"><a href="controlealfa.php"><img style="width: 1000px; heigth: 500px;" class="img-rounded" src="img/banner_superior/controlealfa.png"></a></div>

          </div>
          <a href="#myCarousel" class="left carousel-control" data-slide="prev">&lsaquo;</a>
          <a href="#myCarousel" class="right carousel-control" data-slide="next">&rsaquo;</a>
        </div>
        <!-- Fim do Slider -->
        </div>
      </div> <!-- final do topo -->
      
      <div class="row" id="navegacao">
        <div class="span12">
          <div class="navbar">
            <div class="navbar-inner">
              <div class="container">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              <div class="nav-collapse collapse">
                <ul class="nav">
                  <li><a href="index.php">Portal LIS</a></li>
                  <li><a href="quemsomos.php">Quem Somos</a></li>
             <!-- <li><a href="#">Baixe Nosso app</a></li> -->
                  <li><a href="parceiros.php">Parceiros</a></li>
                  <li><a href="servicos.php">Anuncie Conosco</a></li>
                  <li><a href="eventos.php">Eventos</a></li>
                  <li><a href="contato.php">Contato</a></li>
                              
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      Telefones Úteis<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="comida.php">Cardápios Online</a></li>
                        <li><a href="op.php">Órgãos Públicos</a></li>
                        <li><a href="servicos_gerais.php">Serviços Gerais</a></li>
                        
                        <!--
                        <li><a href="clinicas.php">Médicos e Clínicas</a></li>
                        <li><a href="op.php">Orgãos Públicos</a></li>
                        <li><a href="prefeitura.php">Prefeitura</a></li>
                      -->
                      </ul>
                  </li>
                </ul>

                <!-- formulario de pesquisa -->
                <!-- 
                <div align="right">
                  <form class="form-search" style="margin-right: 10px; margin-top: 10px; margin-bottom: 10px;">
                    <div class="input-append" align="right">
                      <input type="text" placeholder="Pesquise aqui Lojas e Produtos" class="input-large search-query" />
                      <button class="btn" type="submit"><i class="icon-search"></i> Buscar</button>
                    </div>
                </form>
                </div> Fim do formulário de pesquisa -->

              </div> <!-- fim collapse -->
            </div> <!-- fim container do menu -->
          </div>
        </div>          
      </div>
    </div> <!-- final do navegacao -->