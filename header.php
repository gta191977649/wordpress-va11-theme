<?php
    /**
    *   Theme: Pure Bootstrap
    *   The template for displaying the header.
    *   Displays all of the <head> section and everything up till <div id="content">
    *   @package Pure Bootstrap
    *   @version Pure Bootstrap 1.1.1
    */
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title><?php bloginfo('title'); ?> | <?php
    if (!is_front_page()) {
        echo single_post_title();
    }
    else {
        bloginfo('description');
    }
?></title>
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
<!-- Pure Bootstrap WordPress theme by sudoFx -->
<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php if ( show_header() ): ?>
<header id="header">
    <div class="container">
        <div id="headerimg">
            <h1>
                <a href="<?php echo get_option('home'); ?>" class="site-title"><?php bloginfo('name'); ?></a>
            </h1>
            <div class="description site-slogan" style="display: none;">
                <?php bloginfo('description'); ?>
            </div>
        </div>
    </div>
   
</header>
<?php endif ?>

<?php if ( show_header() ): ?>
    <div id="nav-container" class="container va11-nopadding">
        
        <nav class="navbar navbar-default">
<?php else: ?>
        <nav class="navbar navbar-default">
<?php endif ?>
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
  
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
            
        </div>
        <!-- navbar search -->
        
        
        <form id="navbar-searchform" class="navbar-form navbar-right" role="search" action="<?php echo esc_url( site_url() ); ?>" method="get">
            <div class="form-group">
                <input id="s" name="s" type="text" class="form-control" placeholder="<?php esc_attr_e( '', 'alienship' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>">
            </div>
            <button id="navbar-searchsubmit" type="submit" name="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
        </form>
    
        <!-- navbar menu -->
        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'navbarCollapse',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
    </div>
</nav>

<?php if ( show_header() ): ?>
    </div>
<?php endif ?>

<div id="container">
