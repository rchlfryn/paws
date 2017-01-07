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
	$hero_question = get_field('training_question');
	$photo_one = get_field('photo_one');
	$photo_two = get_field('photo_two');
	$testimonial = get_field('testimonial');
?>
	<!-- Hero section -->
	<div class="hero">
		<div id="hero-background" style="background: url(<?php echo $hero_background['url']; ?>); background-size: cover;">
			<button id="button-question" class="btn hero-cta outline-btn">Start training</button>
			<div class="training-buttons">
				<h1 class="training-question"><?php the_field('training_question'); ?></h1>
				<button class="btn training-cta training-btn" onclick="location.href='<?php the_field('sign_up_page'); ?>'">- Yes -<br>I want to sign up</button>
				<button class="btn training-cta training-btn" onclick="location.href='<?php the_field('training_page'); ?>'">- No -<br> I want to learn more</button>
			</div>
		</div>
	</div>

	<!-- Main content -->
	<main id="main" role="main">
		<div class="main-content-home">

			<div class="top-content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php	the_content();	?>
				<?php endwhile; endif; ?>
			</div>

			<div class="boxes">
				<div class="calendar"><?php the_field('calendar_link'); ?></div>
				<div class="box">
					<img class="box-bg" src="<?php echo $photo_one['url']; ?>">
					<button onclick="location.href='/training'" class="btn hero-cta outline-btn">About PAWS</button>
				</div>
				<div class="box">
					<img class="box-bg" src="<?php echo $photo_two['url']; ?>">
					<button onclick="location.href='/training'" class="btn hero-cta outline-btn">Our Staff</button>
				</div>
			</div>

			<div class="bottom-content">
				<div class="below-home" > 
					<?php the_field('below-home'); ?> 
				</div>
			</div>

		</div>
	</main><!-- #main -->

<?php
get_footer();
