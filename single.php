<?php get_header(); ?>


		
		<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
	

			<h2><?php the_title(); ?></h2>
			<div class="byline">
				by <?php the_author_posts_link(); ?> on <span class="date"><?php the_time('l F d, Y'); ?></span><br/>
				Posted in: <?php the_category(', '); ?> | <?php the_tags('Tagged with: ', ', '); ?>
			</div>
				<?php the_content('Read More...'); ?>

								<?php if ( comments_open() && pings_open() ) {
							// Both Comments and Pings are open ?>
							<a href="#respond">Comment</a> |

						<?php } elseif ( !comments_open() && pings_open() ) {
							// Only Pings are Open ?>
							Comments are currently closed | 

						<?php } elseif ( comments_open() && !pings_open() ) {
							// Comments are open, Pings are not ?>
							<a href="#respond">Comment</a> | 

						<?php } elseif ( !comments_open() && !pings_open() ) {
							// Neither Comments, nor Pings are open ?>
							Both comments and pings are currently closed. | 

						<?php } edit_post_link('Edit this entry','','.'); ?>
						
						<?php comments_template(); ?>
		<div class="navi">
			<div class="right">
				<?php previous_post_link(); ?><?php next_post_link(); ?>
			</div>
		</div>

		
		<?php endwhile; else: ?>
			<p><?php _e('No posts were found. Sorry!'); ?></p>
		<?php endif; ?>

	<?php get_sidebar(); ?>


<?php get_footer(); ?>