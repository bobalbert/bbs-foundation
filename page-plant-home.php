<?php
/*
Template Name: Plants Home
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

				<div class="large-9 large-push-3 columns">
					<div class="row">
						<div class="large-4 columns">
							<a href="/plants/beta-vulgaris-cicla-chard/"><h4>Plant One</h4>
								<?php echo get_the_post_thumbnail( 19, 'thumbnail', array( 'class' => 'th') );?>
							Azara Microphylla</a>
						</div>
						<div class="large-4 columns">
							<h4>Plant Two</h4>
							<img class="th" src="<?php echo bloginfo( 'template_url' ); ?>/assets/img/fpo/home/feature-plant-sm-2.jpg">
							Mahonia
						</div>
						<div class="large-4 columns">
							<h4>Plant Three</h4>
							<img class="th" src="<?php echo bloginfo( 'template_url' ); ?>/assets/img/fpo/home/feature-plant-sm-3.jpg">
							Amaranthus tricolor
						</div>
					</div><!-- end image row1 -->

					<div class="row">
						<div class="large-4 columns">
							<h4>Plant Four</h4>
							<img class="th" src="<?php echo bloginfo( 'template_url' ); ?>/assets/img/fpo/home/feature-plant-sm-4.jpg">
							Love Lies Bleeding
						</div>
						<div class="large-4 columns">
							<h4>Plant Five</h4>
							<img class="th" src="<?php echo bloginfo( 'template_url' ); ?>/assets/img/fpo/home/feature-plant-sm-3.jpg">
							Amaranthus tricolor
						</div>
						<div class="large-4 columns">
							<h4>Plant Six</h4>
							<img class="th" src="<?php echo bloginfo( 'template_url' ); ?>/assets/img/fpo/home/feature-plant-sm-2.jpg">
							Mahonia
						</div>
					</div><!-- end image row2 -->

				</div><!-- end large 9 -->

				<div class="large-3 large-pull-9 columns">
					<h5>Browse Plants</h5>
					<ul>
						<li>Plants recipe one</li>
						<li>Plants recipe Two</li>
						<li>Plants recipe Three</li>
						<li>Plants recipe Four</li>
						<li>Plants recipe Five</li>
					</ul>

					<h5>Browse Recipes</h5>
					<ul>
						<li>Feature recipe one</li>
						<li>Feature recipe Two</li>
						<li>Feature recipe Three</li>
						<li>Feature recipe Four</li>
						<li>Feature recipe Five</li>
					</ul>
				</div>

			</div>
		</article>
	<?php endwhile;?>

	<?php do_action('foundationPress_after_content'); ?>

	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
