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
		
		<section class="rw-schedule" style="text-align: center;">Schedule TBD</section>

		<section class="rw-steps">
			<h2>How to sign up for virtual classes</h2>
			<ol>
				<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel sapien tristique, condimentum magna ut, maximus sem.</li>
				<li>Lorem ipsum dolor sit amet, adipiscing elit. Nunc aliquet ac tortor at semper.</li>
				<li>Lorem ipsum dolor sit amet, consectetur. Sed sit amet auctor ante. Donec porta dignissim quam, non fermentum</li>
			</ol>
		</section>

		<section class="rw-about-studio">
			<h2>About Rose Wellness Studio</h2>
			<div class="rw-cols">
				<div class="rw-col">
					<img src="wp-content/themes/rosewellness/assets/images/studio.png" alt />
				</div>
				<div class="rw-col">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt venenatis ultricies. Suspendisse sit amet pretium tortor. Proin a tellus sed lectus tincidunt fermentum nec eget diam. Integer hendrerit quam eget quam feugiat sollicitudin. Mauris vitae accumsan tellus. Phasellus in ex turpis. Suspendisse nibh purus, feugiat sed neque eu, dignissim pharetra elit. Sed tristique hendrerit magna, sit amet viverra libero malesuada non. Vestibulum sit amet maximus leo.</p>
					<p>Quisque purus mauris, pharetra sit amet libero sed, feugiat bibendum nunc. Praesent et tortor vitae tortor efficitur pharetra. Aliquam sodales ornare ultricies. Proin nec nisl aliquam, ultrices nibh et, tincidunt odio. Aliquam sed viverra ligula. Mauris finibus molestie magna, at consequat ligula viverra cursus. Duis porttitor, eros eget vehicula malesuada, purus nunc ornare magna, eu finibus augue neque non ex. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut malesuada ultricies sem condimentum blandit. Maecenas quis lorem vulputate, eleifend ipsum vitae, porttitor nisi. Phasellus tincidunt turpis felis, tristique lacinia enim fermentum a. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
					<p>Pellentesque vel lacus consectetur, ullamcorper mauris id, pulvinar metus. Vestibulum molestie erat id blandit aliquam. Etiam et malesuada lorem. Pellentesque at interdum sapien, eget tincidunt turpis. Donec eget eros commodo, elementum sem sed, porta mauris. Phasellus quis leo nibh. Maecenas dapibus odio odio, congue molestie ante bibendum ac. Praesent sollicitudin massa nulla, vitae pharetra dolor dignissim id. Sed suscipit aliquam diam, nec lobortis augue.</p>
				</div>
			</div>
		</section>

		<section class="rw-about-paige">
			<h2>About Paige</h2>
			<div class="rw-cols">
				<div class="rw-col">
					<img src="wp-content/themes/rosewellness/assets/images/paige.jpg" alt />
				</div>
				<div class="rw-col">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt venenatis ultricies. Suspendisse sit amet pretium tortor. Proin a tellus sed lectus tincidunt fermentum nec eget diam. Integer hendrerit quam eget quam feugiat sollicitudin. Mauris vitae accumsan tellus. Phasellus in ex turpis. Suspendisse nibh purus, feugiat sed neque eu, dignissim pharetra elit. Sed tristique hendrerit magna, sit amet viverra libero malesuada non. Vestibulum sit amet maximus leo.</p>
					<p>Quisque purus mauris, pharetra sit amet libero sed, feugiat bibendum nunc. Praesent et tortor vitae tortor efficitur pharetra. Aliquam sodales ornare ultricies. Proin nec nisl aliquam, ultrices nibh et, tincidunt odio. Aliquam sed viverra ligula. Mauris finibus molestie magna, at consequat ligula viverra cursus. Duis porttitor, eros eget vehicula malesuada, purus nunc ornare magna, eu finibus augue neque non ex. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut malesuada ultricies sem condimentum blandit. Maecenas quis lorem vulputate, eleifend ipsum vitae, porttitor nisi. Phasellus tincidunt turpis felis, tristique lacinia enim fermentum a. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
					<p>Pellentesque vel lacus consectetur, ullamcorper mauris id, pulvinar metus. Vestibulum molestie erat id blandit aliquam. Etiam et malesuada lorem. Pellentesque at interdum sapien, eget tincidunt turpis. Donec eget eros commodo, elementum sem sed, porta mauris. Phasellus quis leo nibh. Maecenas dapibus odio odio, congue molestie ante bibendum ac. Praesent sollicitudin massa nulla, vitae pharetra dolor dignissim id. Sed suscipit aliquam diam, nec lobortis augue.</p>
				</div>
			</div>
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
