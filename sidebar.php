<div class="side">
	<?php if ( is_active_sidebar( 'sidebar-1' )  ): dynamic_sidebar( 'sidebar-1' ); else: ?>
		<div class="side_mod">
			<h3>Search</h3>
			<?php get_search_form(); ?>
		</div>
		<div class="side_mod">
			<h3>Calendar</h3>
			<?php get_calendar(); ?>
		</div>
		<div class="side_mod">
			<h3>Categories</h3>
			<ul class="ul_02" style="overflow:hidden">
				<?php wp_list_categories('sort_column=name&optioncount=0&hierarchical=0&title_li=0'); ?>
			</ul>
		</div>
		<div class="side_mod">
			<h3>Follow us</h3>
			<div class="fu">
				<table border="0" cellpadding="0" cellspacing="0"><tbody><tr>
					<td><a href="http://beat.baidu.com/?feed=rss2" class="fu_a fu_01">RSS</a><a href="http://beat.baidu.com/?feed=rss2">RSS</a></td>
					<td><a target="_blank" href="http://twitter.com/BaiduBeat/" class="fu_a fu_02">Twitter</a><a href="#">Twitter</a></td>
					<td><a target="_blank" href="http://www.facebook.com/pages/Baidu-Beat/141938565840839" class="fu_a fu_03">Facebook</a><a href="#">Facebook</a></td>
					<td><a href="javascript:safariSubscibeInMail();void(0);" class="fu_a fu_05">Email</a><a href="#">Email</a></td>
				</tr></tbody></table>
			</div>
		</div>
		<div class="side_mod">
			<h3>Tag Cloud</h3>
			<div class="cloud"><?php wp_tag_cloud(); ?></div>
		</div>
	<?php endif; ?>
</div>