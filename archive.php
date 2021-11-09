<?php get_header(); $description = get_the_archive_description();?>
<div class="mid">
	<?php if (have_posts()) : ?>
		<div class="archive-title">
			<?php the_archive_title( '<h4>', '</h4>' ); ?>
			<?php if ( $description ) echo $description; ?>
		</div>
		<?php while (have_posts()) : the_post(); ?>
			<div class="mod">
				<div class="title">
					<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					<p><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?> "><?php the_author() ?></a>, <?php the_time('l, F jS, Y') ?></p>
				</div>
				<div class="mod_ct entry">
					<?php the_excerpt(); ?>
				</div>
				<div class="mod_ft">
					<p class="red">Categories : <?php the_category(', ') ?> <?php the_tags(__('| Tags : ') . ' ', ', ', '<br />'); ?></p>
				</div>
			</div>
		<?php endwhile; ?>
		<div class="pagenav">
			<?php the_posts_pagination(); ?>
		</div>
	<?php else : ?>
		<h2 class="center"><?php _e('Not Found'); ?></h2>
		<p class="center"><?php _e('Sorry, but you are looking for something that isn&#8217;t here.'); ?></p>
		<?php get_search_form(); ?>
	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>