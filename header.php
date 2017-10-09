<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Filmagem de casamentos em Curitiba, a KDVC FILMS eterniza o amor com amor. Fazendo os melhores Clipes para o seu grande dia." />
    <meta name="author" content="Rodrigo Alves Guerra" />
    <meta name="keywords" content="Curitiba, Paraná, Video, Filmagem, Cinema, Wedding, Casamento, Casamentos, Noivo, Noiva, Filme, KDVCFILMES, KDVC FILMS, KDVCFILME, KDVC FILMES, kdvc films, kdvcfilms, videos, filmes, casório, edições, imagens, Video Top De Casamento, Video De Casamento, Empresa De Casamento, Melhor video de casamento, Episodio de Casamento, Same Day Edit, Trailher De Casamento, Noivas, Video De Casamento Em Curitiba, Filme Emocionante De Casamento, Edição De Casamento, Beijo, Pedido de Casamento, Marido E Mulher, Casamento Cinematografico" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
    <!--<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Great+Vibes" rel="stylesheet">-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <!-- facebook button like -->
  <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8&appId=603578116502752";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <?php 
            $url = home_url();
        ?>
        <a class="navbar-brand" href="<?php echo esc_url( $url ); ?>">         
          <img alt="Kdvc Films" src="<?php echo get_template_directory_uri(); ?>/img/kdvcfilms-logo.png" height="25">
        </a>
      </div>
      <p class="navbar-text"> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span> <strong style="font-size: 1.2em;"> (41) 99883-2536</strong></p>  
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li id="home">
          <?php 
              $url = home_url();
          ?>
            <a href="<?php echo esc_url( $url ); ?>">
              <span class="glyphicon glyphicon-hd-video" aria-hidden="true"></span>
              Home
            </a>
          </li>
          <li>
            <?php $id_da_categoria = get_cat_id('Episodios'); $link_da_categoria = get_category_link($id_da_categoria); ?>  
            <a href="<?php echo $link_da_categoria;?>" id="episodios">
              <span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span>
              Episódios
            </a>
          </li>
          <li>
            <?php $id_da_categoria = get_cat_id('Trailer'); $link_da_categoria = get_category_link($id_da_categoria); ?>
            <a href="<?php echo $link_da_categoria;?>" id="trailer">
              <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
              Trailer
            </a>
          </li>
          <li>
            <?php $id_da_categoria = get_cat_id('Same Day Edit'); $link_da_categoria = get_category_link($id_da_categoria); ?>
            <a href="<?php echo $link_da_categoria;?>" id="same-day-edit">
              <span class="glyphicon glyphicon-camera" aria-hidden="true"></span>
              Same Day Edit
            </a>
          </li>
          <li>
            <a href="#about">
              <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
              A Empresa
            </a>
          </li>
          <li>
            <a href="#contact">
              <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
              Contato
            </a>
          </li>
        </ul>
        <!--<form class="navbar-form navbar-right">
          <input type="text" class="form-control" placeholder="Buscar...">
        </form>-->
        <div class="navbar-form navbar-right">
            <iframe name="f7c771f90b63f8" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.8/plugins/like.php?action=like&amp;app_id=603578116502752&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FXBwzv5Yrm_1.js%3Fversion%3D42%23cb%3Df163b8e1164a258%26domain%3Dkdvcfilms.com%26origin%3Dhttp%253A%252F%252Fkdvcfilms.com%252Ff323079617fa5f%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fwww.facebook.com%2Fkdvcfilms&amp;layout=button_count&amp;locale=pt_BR&amp;sdk=joey&amp;share=true&amp;show_faces=true&amp;size=large" style="border: none; visibility: visible; width: 217px; height: 28px;" class=""></iframe>
        </div>
      </div>
    </div>