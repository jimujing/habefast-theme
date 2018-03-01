<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Habefast Starter
 */

// Determine if the page is full width or with sidebar
// 'full' is full width, leave empty for right sidebar 
global $sidebar_var;
$sidebar_var = 'full';

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'page' ); ?>

		<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() )
				comments_template();
		?>

	<?php endwhile; // end of the loop. ?>

<?php 
// If the page is not not full width, show the sidebar
if ($sidebar_var != 'full' ) 
{ 
	get_sidebar();
} 
?>
<?php get_footer(); ?>
