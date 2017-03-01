<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<?php get_sidebar(); ?>

<div class="container">
	<div class="row">
		<div class="col-9">

			<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();


					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
			?>

	</div><!-- #primary -->
	
</div><!-- .wrap -->

<?php get_footer();
