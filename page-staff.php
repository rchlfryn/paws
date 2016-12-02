<?php
/**
 * Template Name: Staff
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
	$args = array( 'post_type' => 'staff', 'posts_per_page' => -1, 'order' => 'ASC' );
	$loop = new WP_Query( $args ); 
?>

<div id="staff-page" class="content-container">
		<main id="main" class="site-main" role="main">
			<div class="main-content">

				<!-- Mainstaff memeber selected -->
				<div class="staff-selected">
					<div class="staff-image-selected"><img src=""></div>
					<h3 class="staff-name-selected"> Click staff photo below</h3>
				</div>

				<h2 class="staff-active">Active Staff</h2>

				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="staff-member">

			 			<div class="staff-content">
				 			<h3 class="staff-name">
				 				<?php the_title(); ?>
				 			</h3>
							<div class="staff-bio">
								<?php the_content();?>
							</div>
						</div>

						<div class="staff-image"><?php the_post_thumbnail(); ?></div>
					</div>
				<?php endwhile; ?>
		
				<div class="clearfix"></div>
				
			</div> <!-- .main-content -->
		</main><!-- #main -->

	<!-- Sidebar -->
	<?php get_sidebar(); ?>
	
</div> <!-- .content-container -->

<?php get_footer();
