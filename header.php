<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Habefast Starter
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>

<header id="masthead" class="site-header" role="banner">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container-fluid">
		<div class="row">
<!--		3 sidebars are active-->
		<?php if ( is_active_sidebar( 'topbar-widget-3' ) ) { ?>
			<div class="site-header-inner col-sm-4">
                    <?php dynamic_sidebar( 'topbar-widget-1' ); ?>
			</div>
			<div class="site-header-inner col-sm-4">
                    <?php dynamic_sidebar( 'topbar-widget-2' ); ?>
			</div>
			<div class="site-header-inner col-sm-4">
                    <?php dynamic_sidebar( 'topbar-widget-3' ); ?>
			</div>
<!--		2 sidebars are active-->			
		<?php } elseif ( is_active_sidebar( 'topbar-widget-2' ) ) { ?>
		
			<div class="site-header-inner col-sm-6">
                    <?php dynamic_sidebar( 'topbar-widget-1' ); ?>
			</div>
			<div class="site-header-inner col-sm-6">
                    <?php dynamic_sidebar( 'topbar-widget-2' ); ?>
			</div>
<!--		1 sidebar is active-->			
        <?php } elseif ( is_active_sidebar( 'topbar-widget-1' ) ) { ?> 
            <div class="site-header-inner col-sm-6">
                    <?php dynamic_sidebar( 'topbar-widget-1' ); ?>
			</div>
			<?php } ?>
		
			
		</div>
	</div><!-- .container -->
</header><!-- #masthead -->

<nav class="site-navigation">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	
    <div class="navbar navbar-default navbar-static-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
					<div class="navbar-header">
						<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
							<span class="sr-only"><?php _e('Toggle navigation','_hs') ?> </span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
	
						<!-- Your site title as branding in the menu -->
					
                            <?php if ( ! empty( $header_image ) ) { ?>
                                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                                    <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
                                </a>
                            <?php } // end if ( ! empty( $header_image ) ) ?>
					</div>

					<!-- The WordPress Menu goes here -->
                    <?php wp_nav_menu(
						array(
							'theme_location' 	=> 'primary',
							'depth'             => 2,
							'container'         => 'nav',
							'container_id'      => 'navbar-collapse',
							'container_class'   => 'collapse navbar-collapse',
							'menu_class' 		=> 'nav navbar-nav navbar-right',
							'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
							'menu_id'			=> 'main-menu',
							'walker' 			=> new wp_bootstrap_navwalker()
						)
					); ?>
					
				</div><!-- .col-sm-12 -->
			</div>
		</div><!-- .container-fluid -->
	</div><!-- .site-navigation-inner -->
</nav><!-- .site-navigation -->


<div class="main-content">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container-fluid">
		<div class="row">

		<?php 
		// Set up variable on each template to determine if the page has sidebar
		// 'full' for a full-width page, leave empty for right-sidebar
		global $sidebar_var;
		if ($sidebar_var == 'full' ) {
			echo '<div id="content" class="main-content-inner col-sm-12">';
		} else {
			echo '<div id="content" class="main-content-inner col-sm-12 col-md-8">';
		} ?>
