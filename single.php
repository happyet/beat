<?php get_header(); ?>
<div class="mid">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="mod singlepage">
			<div class="title">
				<h2><?php the_title(); ?></h2>
				<p><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?> "><?php the_author() ?></a>, <?php the_time('l, F jS, Y') ?></p>
			</div>
			<div class="mod_ct entry">
				<?php the_content(); ?>
				<?php wp_link_pages(array('before' => '<p><strong>' . __('Pages:') . '</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>
			<div class="mod_ft">
				<p class="red">分类: <?php the_category(', ') ?> <?php the_tags(__('| 标签: ') . ' ', ', ', ''); ?></p>
			</div>
		</div>
		<?php
			the_post_navigation(
				array(
					'next_text' => '<span>下一篇</span><p>%title</p>',
					'prev_text' => '<span>上一篇</span><p>%title</p>',
				)
			);
		?>
		<?php comments_template(); ?>
	<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>