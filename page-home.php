<?php
/**
 * Template Name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blank
 */

get_header(); ?>
<?php 
	$hero_background = get_field('hero_background');
	$about_photo = get_field('about_photo');
	$id_camp_photo = get_field('id_camp_photo');
	$testimonial = get_field('testimonial');
?>
	<!-- Hero section -->
	<div class="hero">
		<div id="hero-background" style="background: url(<?php echo $hero_background['url']; ?>); background-size: cover;">
			<button class="btn hero-cta outline-btn">Start training</button>
		</div>
	</div>

	<!-- Main content -->
	<main id="main" role="main">
		<div class="main-content">
			<div class="boxes">
				<div class="testimonial" >
					<?php the_field('testimonial'); ?> 
				</div>
				<div class="calendar"><?php the_field('calendar_link'); ?></div>
				<div class="box" style="background: url(<?php echo $about_photo['url']; ?>); background-size: cover;">
					<button onclick="location.href='/training'" class="btn hero-cta outline-btn">Training</button>
				</div>
				<div class="box" style="background: url(<?php echo $id_camp_photo['url']; ?>); background-size: cover;">
					<button onclick="location.href='/training'" class="btn hero-cta outline-btn">Training</button>
				</div>
			</div>

			<div class="home-content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php	the_content();	?>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
