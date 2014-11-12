<?php get_header(); ?>
<div class="row" xmlns="http://www.w3.org/1999/html">
	<div class="small-12 large-10 columns" role="main">

	<?php do_action('foundationPress_before_content'); ?>

	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php //the_title(); ?></h1>
				<?php //FoundationPress_entry_meta(); ?>
			</header>
			<?php do_action('foundationPress_post_before_entry_content'); ?>

			<div class="entry-content">

				<?php if ( has_post_thumbnail() ): ?>
					<div class="row">
						<div class="large-7 columns">
							<?php the_post_thumbnail('', array('class' => 'th')); ?>

						</div>
						<div class="large-5 columns">
							<h3><?php echo get_post_meta( get_the_ID(), 'Botanical Name', true ); ?></h3>
							<h4><?php echo get_post_meta( get_the_ID(), 'Common Name', true ); ?></h4>

							<p><a href="#" >Add to favorites</a></p>
							<p><a href="#">Add to shopping list</a></p>
						</div>
					</div>
				<?php endif; ?>

				<div class="row column">
					<?php the_content(); ?>
				</div>



			</div>

			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action('foundationPress_post_before_comments'); ?>
			<?php comments_template(); ?>
			<?php do_action('foundationPress_post_after_comments'); ?>
		</article>
	<?php endwhile;?>

	<?php do_action('foundationPress_after_content'); ?>

	</div>
	<?php get_sidebar('plant'); ?>
</div>
<?php get_footer(); ?>
