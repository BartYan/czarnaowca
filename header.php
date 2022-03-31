<!Doctype html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Required meta tags -->
  <meta charset="<?php bloginfo('charset') ?>"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php if(is_search()): ?>
    <meta name="robots" content="noindex, nofollow"/>
  <?php endif; ?>

  <title>totamto</title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="description" content="ToTamto powstało z potrzeby wskazania dzieciom ich wyjątkowości i piękna otaczającego świata. Chcemy, by dzieci były ludźmi znającymi swoją wartość, by z ciekawością i spokojem szły przez życie własną drogą." />
  <meta name="keywords" content="Księgarnia, książki, książka, Czarna Owca, czarnaowca, totamto, ToTamto, imprint, imprint Wydawnictwa Czarna Owca, książki dla dzieci, czytam, to tamto" />

  <meta property="og:type" content="website" />
  <meta property="og:title" content="totamto">
  <meta property="og:description" content="ToTamto powstało z potrzeby wskazania dzieciom ich wyjątkowości i piękna otaczającego świata. Chcemy, by dzieci były ludźmi znającymi swoją wartość, by z ciekawością i spokojem szły przez życie własną drogą.">
  <meta property="og:image" content="share.jpg">
  <meta property="og:image:secure_url" content="share.jpg">
  <meta property="og:image:type" content="image/jpeg" />
  <meta property="og:image:width" content="400" />
  <meta property="og:image:height" content="300" />
  <!-- <meta property="og:url" content="https://www.spaced.pl"> -->

  <!--CSS -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?5">
  <!-- <link rel="stylesheet" href="http://localhost/test-wp/wp-content/themes/totamto/style.css"> -->

  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick-1.8.1/slick/slick.css" />
  <!-- Add the new slick-theme.css if you want the default styling -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick-1.8.1/slick/slick-theme.css" />
  <!-- slick lightbox for books post -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-lightbox/0.2.12/slick-lightbox.css" rel="stylesheet" />
  
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
  <link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
  
  <?php wp_head() ?>
</head>

<!-- <body <php body_class() ?>> -->
<body>
  <!--HEADER SECTION-->
  <header>
    <nav class="nav">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <!-- LOGO NAV -->
        <img class="nav_logo" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/logo_totamto.svg" alt="logo">
      </a>
      
      <!--MOBILE BURGER-->
      <div class="mobile_btn nav_hamburger">
        <div class="mobile_btn-hamburger"></div>
      </div>
      <!--MOBILE OVERLAY MENU-->
      <div id="mobileMenu" class="nav_overlay">
        <div class="nav_overlay-content">
            <?php wp_nav_menu(array(
              'name' => 'Główne Menu'
            )); ?>
        </div>
      </div>

      <!--DESKTOP MENU-->
      <div class="nav_desktop-list">
        <?php wp_nav_menu(array(
          'name' => 'Główne Menu'
        )); ?>
      </div>
      
    </nav>
   
  </header>
  
  <div class="social">
      <a class="social__link" href="https://www.facebook.com/czytamtotamto" target="_blank">
          <img src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/facebook.svg" alt="instagram logo">
      </a>
      <a class="social__link" href="https://www.instagram.com/czytamtotamto" target="_blank">
          <img src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/instagram.svg" alt="instagram logo">
      </a>
  </div>