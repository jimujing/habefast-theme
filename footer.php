<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Habefast Starter
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->

<footer id="colophon" class="site-footer" role="contentinfo">

	<div class="container">
		<div class="row">
	<!--		4 sidebars are active-->
			<?php if ( is_active_sidebar( 'footer-widget-4' ) ) { ?>
				<div class="site-header-inner col-sm-3">
						<?php dynamic_sidebar( 'footer-widget-1' ); ?>
				</div>
				<div class="site-header-inner col-sm-3">
						<?php dynamic_sidebar( 'footer-widget-2' ); ?>
				</div>
				<div class="site-header-inner col-sm-3">
						<?php dynamic_sidebar( 'footer-widget-3' ); ?>
				</div>
				<div class="site-header-inner col-sm-3">
						<?php dynamic_sidebar( 'footer-widget-4' ); ?>
				</div>
	<!--		3 sidebars are active-->
			<?php } elseif ( is_active_sidebar( 'footer-widget-3' ) ) { ?>
				<div class="site-header-inner col-sm-4">
						<?php dynamic_sidebar( 'footer-widget-1' ); ?>
				</div>
				<div class="site-header-inner col-sm-4">
						<?php dynamic_sidebar( 'footer-widget-2' ); ?>
				</div>
				<div class="site-header-inner col-sm-4">
						<?php dynamic_sidebar( 'footer-widget-3' ); ?>
				</div>
	<!--		2 sidebars are active-->			
			<?php } elseif ( is_active_sidebar( 'footer-widget-2' ) ) { ?>
			
				<div class="site-header-inner col-sm-6">
						<?php dynamic_sidebar( 'footer-widget-1' ); ?>
				</div>
				<div class="site-header-inner col-sm-6">
						<?php dynamic_sidebar( 'footer-widget-2' ); ?>
				</div>
	<!--		1 sidebar is active-->			
			<?php } elseif ( is_active_sidebar( 'footer-widget-1' ) ) { ?> 
				<div class="site-header-inner col-sm-12">
						<?php dynamic_sidebar( 'footer-widget-1' ); ?>
				</div>
				<?php } ?>
		
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="copyright">
					 &copy;<?php the_date(Y); ?> Développé avec passion par l'<a href="http://habefast.ch" target="_blank">Agence de communication Habefast</a>
				</div>
			</div>
		</div>
	</div><!-- .container -->
</footer><!-- close #colophon -->

<?php wp_footer(); ?>

</body>
</html>
