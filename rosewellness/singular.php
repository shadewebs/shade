<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();
?>

<main id="site-content" role="main">

	<?php if ( is_front_page() ): ?>

	<div class="rw-front-content">
		<section class="rw-hero">
			<span class="rw-branding"></span>
			<h2>Our Offering</h2>
			<div class="rw-hero-cols">
				<div class="rw-hero-col">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sagittis quam vulputate libero cursus, sed volutpat libero rhoncus. Vestibulum luctus vitae quam et aliquet. Nullam nulla libero, elementum at erat nec, accumsan egestas urna. Duis dapibus aliquam tristique. Sed vel enim urna. Sed id nibh ut magna pretium dignissim. Suspendisse fringilla, nibh at hendrerit volutpat.</p>
				</div>
				<div class="rw-hero-col">
					<p>Aenean eu dapibus arcu, sed sollicitudin massa. Aenean non mauris sodales, accumsan arcu nec, ullamcorper arcu. Proin faucibus enim in ornare dapibus. Proin imperdiet ante nec ligula porta, eu commodo orci scelerisque. Proin sodales posuere congue. Morbi fermentum eros at tincidunt hendrerit. Curabitur et aliquet dui. Integer nec vulputate ligula.</p>
				</div>
			</div>
		</section>
		
		<section class="rw-schedule"></section>

		<section class="rw-steps">
			<ol>
				<li>Step 1 content</li>
				<li>Step 2 content</li>
				<li>Step 3 content</li>
			</ol>
		</section>

		<section class="rw-about-studio">
			<h2>About Rose Wellness Studio</h2>
			<p>content</p>
		</section>

		<section class="rw-about-paige">
			<h2>About Paige</h2>
			<p>content</p>
		</section>
	</div>

	<?php endif; ?>

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		}
	}

	?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
