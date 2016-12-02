<?php
/**
 * Template Name: Training
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blank
 */

get_header(); ?>
<div id="training-page" class="content-container">
		<main id="main" class="site-main" role="main">
			<div class="main-content">

				<div class="lead-img-training">
					<img src="http://placehold.it/1000x100">
				</div>

				<?php
					if ( have_posts() ) :
						the_title( '<h2 class="entry-title">', '</h2>' );
					/* Start the Loop */
						while ( have_posts() ) : the_post();
							the_content();
						endwhile;
					endif; ?>
			</div>
		</main><!-- #main -->

	<!-- Sidebar -->
	<?php get_sidebar(); ?>
	
</div> <!-- .content-container -->

<?php get_footer();
