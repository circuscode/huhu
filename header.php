<?php 

/**
 * The header
 *
 * @package huhu
 * @since 0.1
 */

 ?>
 
 <?php get_template_part( 'html' ) ?>

<body <?php body_class(); ?>>

<div class="main-container">

<header id="masthead" class="site-header">

    <div id="site-branding">

    <?php
    
    if(is_single() or is_page() ) 
    { echo '<p class="site-title"><strong>'; } 
    else 
    { echo '<h1 class="site-title">'; } ?>

    <a class="blogname" title="Startseite" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
    <?php bloginfo( 'name' ); ?>
    </a>

    <?php if(is_single() or is_page() ) 
    { echo '</strong></p>'; } 
    else 
    { echo '</h1>'; } ?>

    <p class="site-description"><em><?php bloginfo( 'description' ); ?></em></p>

    </div>

    <div id="mobile-menu-toggle">
    <span>Menü</span>
    </div>

    <nav id="site-nav" class="main-navigation"><div class="menu-container"><?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu') ); ?></div><div class="search-toggle"><span rel="search">Suche</span></div><div class="search-header"><?php get_search_form(); ?></div></nav>

</header>