<?php
/*
Template Name: Home
*/
get_header(); ?>

<div class="row">
	<div class="small-12 large-9 columns" role="main">

	<?php do_action('foundationPress_before_content'); ?>

	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<div class="row">
				<ul data-orbit>
					<li>
						<img src="<?php echo bloginfo( 'template_url' ); ?>/assets/img/fpo/banners/1.jpg">
					</li>
					<li>
						<img src="<?php echo bloginfo( 'template_url' ); ?>/assets/img/fpo/banners/2.jpg">
						<div class="orbit-caption">Each Landon <b>Hotel reflects</b> the color, ﬂavor, and personality of the local neighborhood, giving visitors an
							authentic travel experience that honors the history and culture of the region.</div>
					</li>
					<li>
						<img src="<?php echo bloginfo( 'template_url' ); ?>/assets/img/fpo/banners/3.jpg">
					</li>
					<li>
						<img src="<?php echo bloginfo( 'template_url' ); ?>/assets/img/fpo/banners/4.jpg">
					</li>
					<li>
						<img src="<?php echo bloginfo( 'template_url' ); ?>/assets/img/fpo/banners/5.jpg">
					</li>
					<li>
						<img src="<?php echo bloginfo( 'template_url' ); ?>/assets/img/fpo/banners/6.jpg">
					</li>
				</ul>
			</div>

			<div class="row">
				<div class="large-3 columns">
					<div class="feature-recipe">
						<h4>Recipe One</h4>
						<img class="th" src="<?php echo bloginfo( 'template_url' ); ?>/assets/img/fpo/home/feature-recipe-sm-1.jpg">
						Parsley & Kale Salad with Garlicky Vinaigrette
					</div>
					<div class="feature-plant">
						<h4>Plant One</h4>
						<img class="th" src="<?php echo bloginfo( 'template_url' ); ?>/assets/img/fpo/home/feature-plant-sm-1.jpg">
						Azara Microphylla
					</div>
				</div>
				<div class="large-3 columns">
					<div class="feature-recipe">
						<h4>Recipe Two</h4>
						<img class="th" src="<?php echo bloginfo( 'template_url' ); ?>/assets/img/fpo/home/feature-recipe-sm-2.jpg">
						Grainfree, Sugarfree Cranberry Orange Pecan Scones
					</div>
					<div class="feature-plant">
						<h4>Plant Two</h4>
						<img class="th" src="<?php echo bloginfo( 'template_url' ); ?>/assets/img/fpo/home/feature-plant-sm-2.jpg">
						Mahonia
					</div>
				</div>
				<div class="large-3 columns">
					<div class="feature-recipe">
						<h4>Recipe Three</h4>
						<img class="th" src="<?php echo bloginfo( 'template_url' ); ?>/assets/img/fpo/home/feature-recipe-sm-3.jpg">
						Strawberry Stevia Chocolate Rocket Freezer Pop Recipe
					</div>

					<div class="feature-plant">
						<h4>Plant Three</h4>
						<img class="th" src="<?php echo bloginfo( 'template_url' ); ?>/assets/img/fpo/home/feature-plant-sm-3.jpg">
						Amaranthus tricolor
					</div>
				</div>
				<div class="large-3 columns">
					<div class="feature-recipe">
						<h4>Recipe Four</h4>
						<img class="th" src="<?php echo bloginfo( 'template_url' ); ?>/assets/img/fpo/home/feature-recipe-sm-4.jpg">
						Preserve Tomatoes: Seasoning Salt & Tomato Water 2Fer
					</div>
					<div class="feature-plant">
						<h4>Plant Four</h4>
						<img class="th" src="<?php echo bloginfo( 'template_url' ); ?>/assets/img/fpo/home/feature-plant-sm-4.jpg">
						Love Lies Bleeding
					</div>
				</div>
			</div>
		</article>
	<?php endwhile;?>

	<?php do_action('foundationPress_after_content'); ?>

	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
