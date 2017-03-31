<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/img/agency/favicon.ico" rel="shortcut icon" />

    <!-- Le styles -->
    <!--<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">-->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
     <link href="<?php echo get_template_directory_uri(); ?>/assets/css/custom.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>
  <body>
 <header class="a-header header" >
            <div class="container clearfix nopadding">
                <div id="logo"><a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/agency/logo.png" alt="logo"></a></div>
                <div class="menu-button  a-menu-button">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <nav class="nav ag-nav  clearfix">
                 <?php  wp_nav_menu( array(
                    'theme_location' => 'custom-main-menu',
                    'menu_class'     => 'primary-menu',
                   ) );?>
                </nav>
            </div>
  </header>

        <!--BANNER-->
        <div class="a-banner scroll-to-block" id="home">
            <img class="center-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/agency/bg_top.jpg" alt="img"/>
            <div class="banner_description">
                <p class="hello">Hello <br> Stranger</p>
                <h1> We <br> are <br> NRG </h1>
                <p class="creative"> Creative Digital & <br> Marketing Agency </p>
            </div>
        </div>
