<?php get_header(); ?>
<div id="mid" class="mid">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="mod singlepage">
			<div class="title">
				<h2><?php the_title(); ?></h2>
				<?php edit_post_link(__('Edit this entry.'), '<p>', '</p>'); ?>
			</div>
			<div class="mod_ct entry">
				<?php the_content(); ?>
				<?php wp_link_pages(array('before' => '<p><strong>' . __('Pages:') . '</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>
		</div>
		<?php comments_template(); ?> 
	<?php endwhile; endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>