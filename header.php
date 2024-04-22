<!doctype html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="all">
    <script src="<?php echo site_url('main.js'); ?>"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    
    <?php wp_head(); ?>

    <!-- Place your custom JavaScript file here -->
    <script src="<?php echo site_url('main.js'); ?>"></script>
</head>
<body>    
    <div id="wrapper">
      <header>
        <nav>
          <a href="<?php echo site_url(); ?>"><img id="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/AMIGA_LOGO.png" alt="logo"></a>

          <button class="hamburger" aria-label="Toggle menu" aria-expanded="false" onclick="toggleMenu()">
            &#9776;
          </button>
          <div id="nav-menu" class="nav-links">
            <a href="javascript:void(0)" class="closebtn" onclick="toggleMenu()">&times;</a>
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

          </div>
        </nav>
      </header>
