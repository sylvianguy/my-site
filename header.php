<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700italic,400italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container">
    <div class="header__content" id="contact">
      <h1></h1>
      <div class="logo">
        <img src="./wp-content/themes/theme-hackeryou/images/sylvia_logo_big_02.png" alt="">  
      </div>
      <div id="header__content" class="front-end">
        <h2>Front End Web Developer</h2>
      </div>
      <div class="social__buttons">
        <ul id="header__social">
          <a href="https://twitter.com/SylviaCreates"><li class="twitter"><div class="social__buttons-circle"></div></li></a>
          <a href="mailto:sylvia.nguyen@gmail.com"><li class="email"><div class="social__buttons-circle"></div></li></a>  
          <a href="https://github.com/sylvianguy"><li class="github"><div class="social__buttons-circle"></div></li></a>
        </ul>
      </div><!--/.header__content-->
      <div class="arrow__down">
        <a class="scroll" href="#menu"><i class="fa fa-angle-down"></i></a>
      </div>
    </div>
    

<!--     <?php wp_nav_menu( array(
      'container' => false,
      'theme_locations' => 'primary'
    )); ?> -->
  </div> <!-- /.container -->
</header><!--/.header-->

<div class="container clearfix">
  <nav id="menu" class="menu">
    <div id="menu__trigger" class="menu__trigger">
      <div class="menu__trigger-line"></div>
    </div>
    <div class="logo">
      <img src="./wp-content/themes/theme-hackeryou/images/sylvia_logo_trimmed.png" alt="">
    </div>
    <ul id="toggler" class="menu">
      <li><a class="scroll" href="#work">WORK</a></li>
      <li><a class="scroll" href="#about">ABOUT</a></li>
      <li><img src="./wp-content/themes/theme-hackeryou/images/sylvia_logo_trimmed.png" alt=""></li>
      <li><a class="scroll" href="#blog">BLOG</a></li>
      <li><a class="scroll" href="#contact">CONTACT</a></li>
    </ul>
  </nav>
</div>

