	</div>
</div>
<div class="ft">
	<?php printf('%1$s 由 %2$s 驱动', get_bloginfo('name'),
	'<a href="http://wordpress.org/" target="_blank">WordPress</a>'); ?>
	<br />
	主题由 <a href="https://lms.im" target="_blank" rel="nofollow">不亦乐乎</a> 制作，<?php printf(__('%d queries. %s seconds.'), get_num_queries(), timer_stop(0, 3)); ?>
</div>
<?php wp_footer(); ?>
</body>
</html>
