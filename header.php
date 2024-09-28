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
    <meta name="description" content="未来のために、サスティナブルに。Eco for the future" />

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
        <a href="<?php echo home_url(); ?>"Home><img src="<?php echo get_template_directory_uri(); ?>/image/PC/logo2.jpg" alt="ロゴ" /></a>
      </div>
      <!-- PC用ナビゲーション -->
      <nav id="nav-pc">
        <a href="#about">About</a>
        <a href="#product">Product</a>
        <a href="#news">News</a>
        <a href="<?php echo home_url(); ?>/shop">Shopping</a>
        <a href="#contact">Contact</a>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/image/PC/cart.png" alt="カートアイコン"  class="online-btn" /></a>
      </nav>
  <!-- ハンバーガーメニュー -->
    <div class="header__inner">
        <button
          id="js-hamburger"
          type="button"
          class="hamburger"
          aria-controls="navigation"
          aria-expanded="false"
          aria-label="メニューを開く"
        >
          <span class="hamburger__line"></span>
          <span class="hamburger__text"></span>
        </button>
        <div class="header__nav-area js-nav-area" id="navigation">
          <nav id="js-global-navigation" class="global-navigation">
            <ul class="global-navigation__list">
              <li>
                <a href="<?php echo home_url()?>/home/#about" 
                class="global-navigation__link"
                >About
                </a>
              </li>
              <li>
                <a
                  href="<?php echo home_url("/home/#product")?>"
                  class="global-navigation__link"
                >Product
                </a>
              </li>
              <li>
                <a href="<?php echo home_url("/home/#news")?>" class="global-navigation__link">
                News
                </a>
              </li>
              <li>
              <a href="<?php echo home_url(); ?>/shop" class="global-navigation__link">
                Shopping
                </a>
              </li>
              <li>
                <a href="<?php echo home_url("/home/#contact")?>" class="global-navigation__link">
                Contact
                </a>
              </li>
              <li>
              <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/image/PC/cart.png" alt="カートアイコン"  
              class="online-btn global-navigation__link" /></a>
              </li>
            </ul>
            <div id="js-focus-trap" tabindex="0"></div>
          </nav>
        </div>
      </div>
      </header>
    <!-- /header -->