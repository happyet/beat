<!DOCTYPE html>
<html dir="ltr" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content ="initial-scale=1.0,user-scalable=no">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="hd">
	<div class="hd_ct">
		<?php 
			$custom_logo_id = get_theme_mod( 'custom_logo' ); 
			$description = get_bloginfo( 'description', 'display' );
			if($custom_logo_id){
				$custom_logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
					'class'    => 'custom-logo',
					'itemprop' => 'logo',
					'alt'	 => get_bloginfo( 'name' ),
					'title'	 => $description
				) );
				echo '<a href="'.esc_url( home_url( '/' ) ).'" class="custom-logo-link" rel="home" itemprop="url">'.$custom_logo_img.'</a>';
			}else{
				echo '<a href="'.esc_url( home_url( '/' ) ).'" class="text-link" rel="home" itemprop="url">'.get_bloginfo('name').'</a>';
			}
		?>
		
	</div>
</div>

<div class="con_ct">
	<div class="nav">
		<?php 
			wp_nav_menu( array(
				'menu'              => '',
				'theme_location'    => 'topbar',
				'depth'             => 0,
				'container'         => '',
				'container_class'   => '',
				'fallback_cb'     	=> false,
				'menu_class'        => 'nav_ul',
				'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
			)  );
		?>
	</div>