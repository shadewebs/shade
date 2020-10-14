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

<style type="text/css" id="rw-preload">
	.rw-hero {
		background-size: cover;
		background-color: aliceblue;
		background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='1885' height='1060' viewBox='0 0 1500 823'%3E%3Cfilter id='blur' filterUnits='userSpaceOnUse' color-interpolation-filters='sRGB'%3E%3CfeGaussianBlur stdDeviation='20 20' edgeMode='duplicate' /%3E%3CfeComponentTransfer%3E%3CfeFuncA type='discrete' tableValues='1 1' /%3E%3C/feComponentTransfer%3E%3C/filter%3E%3Cimage filter='url(%23blur)' xlink:href='data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDACgcHiMeGSgjISMtKygwPGRBPDc3PHtYXUlkkYCZlo+AjIqgtObDoKrarYqMyP/L2u71////m8H////6/+b9//j/2wBDASstLTw1PHZBQXb4pYyl+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj/wgARCAAWACgDAREAAhEBAxEB/8QAGQAAAwADAAAAAAAAAAAAAAAAAAEFAgME/8QAFwEBAQEBAAAAAAAAAAAAAAAAAAECA//aAAwDAQACEAMQAAAAnwGzKkTKKZlo+bnp0wpgn//EACEQAQACAgICAgMAAAAAAAAAAAEAAhESAyExQhQkQVGB/9oACAEBAAE/AK3bZ7UCa26PzOLcdquWfO+qy/Nv7+X+salhMjnwpGuzVXOIWa8Wla1LPtLueMr0kvxvSVT94g5hNkIWm0//xAAYEQACAwAAAAAAAAAAAAAAAAARIAAQEv/aAAgBAgEBPwCswqH/AP/EABQRAQAAAAAAAAAAAAAAAAAAADD/2gAIAQMBAT8Af//Z' x='0' y='0' height='100%25' width='100%25'/%3E%3C/svg%3E");
		/*background-image: url(data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='1500' height='823' viewBox='0 0 1500 823'%3E%3Cfilter id='blur' filterUnits='userSpaceOnUse' color-interpolation-filters='sRGB'%3E%3CfeGaussianBlur stdDeviation='20 20' edgeMode='duplicate' /%3E%3CfeComponentTransfer%3E%3CfeFuncA type='discrete' tableValues='1 1' /%3E%3C/feComponentTransfer%3E%3C/filter%3E%3Cimage filter='url(%23blur)' xlink:href='data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDACgcHiMeGSgjISMtKygwPGRBPDc3PHtYXUlkkYCZlo+AjIqgtObDoKrarYqMyP/L2u71////m8H////6/+b9//j/2wBDASstLTw1PHZBQXb4pYyl+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj/wgARCAAWACgDAREAAhEBAxEB/8QAGQAAAwADAAAAAAAAAAAAAAAAAAEFAgME/8QAFwEBAQEBAAAAAAAAAAAAAAAAAAECA//aAAwDAQACEAMQAAAAnwGzKkTKKZlo+bnp0wpgn//EACEQAQACAgICAgMAAAAAAAAAAAEAAhESAyExQhQkQVGB/9oACAEBAAE/AK3bZ7UCa26PzOLcdquWfO+qy/Nv7+X+salhMjnwpGuzVXOIWa8Wla1LPtLueMr0kvxvSVT94g5hNkIWm0//xAAYEQACAwAAAAAAAAAAAAAAAAARIAAQEv/aAAgBAgEBPwCswqH/AP/EABQRAQAAAAAAAAAAAAAAAAAAADD/2gAIAQMBAT8Af//Z' x='0' y='0' height='100%25' width='100%25'/%3E%3C/svg%3E);*/
		/*background-image: filter(url("data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDACgcHiMeGSgjISMtKygwPGRBPDc3PHtYXUlkkYCZlo+AjIqgtObDoKrarYqMyP/L2u71////m8H////6/+b9//j/2wBDASstLTw1PHZBQXb4pYyl+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj/wgARCAAWACgDAREAAhEBAxEB/8QAGQAAAwADAAAAAAAAAAAAAAAAAAEFAgME/8QAFwEBAQEBAAAAAAAAAAAAAAAAAAECA//aAAwDAQACEAMQAAAAnwGzKkTKKZlo+bnp0wpgn//EACEQAQACAgICAgMAAAAAAAAAAAEAAhESAyExQhQkQVGB/9oACAEBAAE/AK3bZ7UCa26PzOLcdquWfO+qy/Nv7+X+salhMjnwpGuzVXOIWa8Wla1LPtLueMr0kvxvSVT94g5hNkIWm0//xAAYEQACAwAAAAAAAAAAAAAAAAARIAAQEv/aAAgBAgEBPwCswqH/AP/EABQRAQAAAAAAAAAAAAAAAAAAADD/2gAIAQMBAT8Af//Z"), blur(20px));*/
	}
	/*.rw-hero {
		background-image: filter(url(data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDACgcHiMeGSgjISMtKygwPGRBPDc3PHtYXUlkkYCZlo+AjIqgtObDoKrarYqMyP/L2u71////m8H////6/+b9//j/2wBDASstLTw1PHZBQXb4pYyl+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj4+Pj/wgARCAAWACgDAREAAhEBAxEB/8QAGQAAAwADAAAAAAAAAAAAAAAAAAEFAgME/8QAFwEBAQEBAAAAAAAAAAAAAAAAAAECA//aAAwDAQACEAMQAAAAnwGzKkTKKZlo+bnp0wpgn//EACEQAQACAgICAgMAAAAAAAAAAAEAAhESAyExQhQkQVGB/9oACAEBAAE/AK3bZ7UCa26PzOLcdquWfO+qy/Nv7+X+salhMjnwpGuzVXOIWa8Wla1LPtLueMr0kvxvSVT94g5hNkIWm0//xAAYEQACAwAAAAAAAAAAAAAAAAARIAAQEv/aAAgBAgEBPwCswqH/AP/EABQRAQAAAAAAAAAAAAAAAAAAADD/2gAIAQMBAT8Af//Z), blur(20px));
	}*/

	.rw-hero--loaded {
		background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/banner-front-16-9-med.jpg');
	}

	@supports (background-image: filter(url('i.jpg'), blur(1px))) {
	.rw-hero {
		transform: translateZ(0);
	}
	.rw-hero--loaded {
		animation: sharpen 5s both;
	}
	@keyframes sharpen {
		from {
			background-image: filter(url('<?php echo get_template_directory_uri(); ?>/assets/images/banner-front-16-9-med.jpg'), blur(20px));
		}
		to {
			background-image: filter(url('<?php echo get_template_directory_uri(); ?>/assets/images/banner-front-16-9-med.jpg'), blur(0px));
		}
	}
</style>
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

<script>
window.onload = function loadStuff() {
	var win, doc, img, header, enhancedClass;
	
	// Quit early if older browser (e.g. IE 8).
	if (!('addEventListener' in window)) {
		return;
	}

	win = window;
	doc = win.document;
	img = new Image();
	header = doc.querySelector('.rw-hero');

	// enhancedClass = 'rw-hero';
	enhancedClass = 'rw-hero--loaded';

	// Rather convoluted, but parses out the first mention of a background
	// image url for the enhanced header, even if the style is not applied.
	var bigSrc = (function () {
		// Find all of the CssRule objects inside the inline stylesheet 
		var styles = doc.getElementById('rw-preload').sheet.cssRules;
		
		// Fetch the background-image declaration...
		var bgDecl = (function () {
			// ...via a self-executing function, where a loop is run
			var bgStyle, i, l = styles.length;
			for (i=0; i<l; i++) {
				// ...checking if the rule is the one targeting the
				// enhanced header.

				if (styles[i].selectorText &&
						styles[i].selectorText == '.'+enhancedClass) {
					// If so, set bgDecl to the entire background-image
					// value of that rule
					bgStyle = styles[i].style.backgroundImage;
					// ...and break the loop.
					break; 
				}
			}
			// ...and return that text.
			return bgStyle;
		}());
		// Finally, return a match for the URL inside the background-image
		// by using a fancy regex I Googled up, as long as the bgDecl 
		// variable is assigned at all.         
		return bgDecl && bgDecl.match(/(?:\(['|"]?)(.*?)(?:['|"]?\))/)[1];
	}());

	// Assign an onLoad handler to the dummy image *before* assigning the src
	img.onload = function () {
		header.className += ' ' +enhancedClass;
	};
	// Finally, trigger the whole preloading chain by giving the dummy
	// image its source.
	if (bigSrc) {
		img.src = bigSrc;
	}
};
</script>

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
