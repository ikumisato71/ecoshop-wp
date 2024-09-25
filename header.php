<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <title>Eco shop</title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/image/PC/favicon.jpg" />
    <meta name="description" content="サスティナブル" />

    <link href="<?php echo get_template_directory_uri(); ?>/css/reset.css" media="all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" media="all" type="text/css" />

    <?php wp_head();?>
  </head>
  <body>
    <!-- header -->
    <header>
      <div class="top-logo">
        <a href="<?php echo home_url(); ?>"Home><img src="<?php echo get_template_directory_uri(); ?>/image/PC/logo2.jpg" /></a>
      </div>
      <!-- PC用ナビゲーション -->
      <nav id="nav-pc">
        <a href="#about">About</a>
        <a href="#product">product</a>
        <a href="#news">News</a>
        <a href="<?php echo home_url(); ?>/shop">Shopping</a>
        <a href="#contact">Contact</a>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/image/PC/cart.png" class="online-btn" /></a>
      </nav>
    </header>
    <!-- /header -->