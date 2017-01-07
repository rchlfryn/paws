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
<?php
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
?>
<div id="training-page" class="content-container">
		<main id="main" class="site-main" role="main">

		<div class="lead-img-training" style="background-image: url(<?php echo $thumb_url[0]; ?>); ">
		</div>

			<div class="main-content">

				<?php
					if ( have_posts() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
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
