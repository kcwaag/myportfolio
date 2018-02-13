<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */

get_header(); ?>

<section class="home-page">
	<div class="main-content">
		<div class="content">
			<?php while ( have_posts() ): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<a href="<?php echo site_url('/contact/'); ?>" class="btn">Let's Talk!</a>
				<div class="social-btns">  <!-- populate or remove as many of these as you want -->
					<a href="https://www.linkedin.com/in/kimberly-waag/" class="soc-icon ln"></a>
					<a href="https://www.instagram.com/mkwaag/?hl=en" class="soc-icon in"></a>
					<a href="https://github.com/kcwaag" class="soc-icon gh"></a>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
