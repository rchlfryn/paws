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
	$thumb_id = get_post_thumbnail_id();
	$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
	$alumni = get_field('alumni');

	$core = new WP_Query(array(
          'post_type' => 'staff',
          'posts_per_page' => -1,
					// 'meta_key' => 'order',
					// 'orderby'	=> 'meta_value_num',
          'order' => 'ASC',
          'tax_query' => array(
                array(
                'taxonomy' => 'custom_cat',
                'field' => 'slug',
                'terms' => 'core'
                )
          )));
		$seasonal = new WP_Query(array(
          'post_type' => 'staff',
          'posts_per_page' => -1,
					// 'meta_key' => 'order',
					// 'orderby'	=> 'meta_value_num',
          'order' => 'ASC',
          'tax_query' => array(
                array(
                'taxonomy' => 'custom_cat',
                'field' => 'slug',
                'terms' => 'seasonal'
                )
          ))
		); 
?>

<div id="staff-page" class="content-container">
		<main id="main" class="site-main" role="main">
		<div class="lead-img-staff" style="background-image: url(<?php echo $thumb_url[0]; ?>); ">
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

				<!-- Mainstaff memeber selected -->
				<div class="staff-selected">
					<div class="staff-image-selected"><img src=""></div>
					<div class="staff-content-selected">
						<h3 class="staff-name-selected"></h3>
						<div class="staff-bio-selected"></div>
					</div>

				</div>

				<!-- Core staff grid -->
				<h2 class="staff-active">Active Staff</h2>

				<?php while ( $core->have_posts() ) : $core->the_post(); ?>
					<div class="staff-member">
						<div class="staff-image"><?php the_post_thumbnail(); ?></div>

			 			<div class="staff-content">
				 			<p class="staff-name">
				 				<?php the_title(); ?>
				 			</p>
							<div class="staff-bio">
								<?php the_content();?>
							</div>
						</div>

						
					</div>
				<?php endwhile; ?>
		
				<div class="clearfix"></div>
								<!-- Core staff grid -->
				<h2 class="staff-active">Seasonal Staff</h2>

				<?php while ( $seasonal->have_posts() ) : $seasonal->the_post(); ?>
					<div class="staff-member">
						<div class="staff-image"><?php the_post_thumbnail(); ?></div>

			 			<div class="staff-content">
				 			<p class="staff-name">
				 				<?php the_title(); ?>
				 			</p>
							<div class="staff-bio">
								<?php the_content();?>
							</div>
						</div>

						
					</div>
				<?php endwhile; ?>
		
				<div class="clearfix"></div>

			<div class="top-content">
				<?php echo $alumni; ?>

			</div>
				
			</div> <!-- .main-content -->
		</main><!-- #main -->

	<!-- Sidebar -->
	<?php get_sidebar(); ?>
	
</div> <!-- .content-container -->

<?php get_footer();
