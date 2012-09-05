<?php get_header(); ?>


		<section><article>
		<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
	

			<header>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="byline">by <?php the_author_posts_link(); ?> on <a href="<?php the_permalink(); ?>"><?php the_time('l F d, Y'); ?></a></div>
			</header>
				<?php the_content('Read More...'); ?>
<?php edit_post_link('Edit', '', ' | '); ?>  <?php //comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
		
		<?php endwhile; else: ?>
			<p><?php _e('No posts were found. Sorry!'); ?></p>
		<?php endif; ?>
		
		<div class="navi">
			<div class="right">
				<?php previous_posts_link('Previous'); ?><?php next_posts_link('Next'); ?>
			</div>
		</div>
		</article>
</section>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>