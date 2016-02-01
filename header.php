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
    <div class="header__content">
      <h1></h1>
      <div class="logo">
        <img src="./wp-content/themes/theme-hackeryou/images/sylvia_logo_big_trimmed.png" alt="">  
      </div>
      <div class="front-end">
        <h2>Front End Web Developer</h2>
      </div>
      <div class="social__buttons">
        <ul>
          <a href=""><li class="twitter"><img src="./wp-content/themes/theme-hackeryou/images/circle.png" alt=""></li></a>
          <a href=""><li class="email"><img src="./wp-content/themes/theme-hackeryou/images/circle.png" alt=""></li></a>  
          <a href=""><li class="github"><img src="./wp-content/themes/theme-hackeryou/images/circle.png" alt=""></li></a>
        </ul>
      </div><!--/.header__content-->
      <div class="arrow__down">
        <i class="fa fa-angle-down"></i>
      </div>
    </div>
    

<!--     <?php wp_nav_menu( array(
      'container' => false,
      'theme_locations' => 'primary'
    )); ?> -->
  </div> <!-- /.container -->
</header><!--/.header-->

