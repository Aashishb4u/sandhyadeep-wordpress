<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<?php $lanotte_redux_demo = get_option('redux_demo'); ?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {?>
		<link rel="shortcut icon" type="image/x-icon" href="<?php if(isset($lanotte_redux_demo['favicon']['url'])){?><?php echo esc_url($lanotte_redux_demo['favicon']['url']); ?><?php }?>">
	<?php }?>
	<?php wp_head(); ?>
</head>
<body>
	<div id="loading" class="rose-loading">
		<div id="loading-center">
			<div class="spinner">
				<div class="blob top"></div>
				<div class="blob bottom"></div>
				<div class="blob left"></div>
				<div class="blob move-blob"></div>
			</div>
		</div>
	</div>
	<?php 
	$menu_layout = get_post_meta(get_the_ID(),'_cmb_menu_layout', true);
	if ($menu_layout == 0): ?>
		<div id="stlChanger">
			<div class="blockChanger bgChanger">
				<span class="chBut bg--rose icon-xs"><span class="flaticon-settings"></span></span>
				<div class="chBody white--color">
					<div class="stBlock text-center ">
						<?php if (isset($lanotte_redux_demo['text_nav_layout']) && $lanotte_redux_demo['text_nav_layout'] != '') {?>
							<p><?php echo wp_specialchars_decode(esc_attr($lanotte_redux_demo['text_nav_layout']));?></p>
						<?php } else { ?>
							<p><?php echo esc_html__( 'Choose Layout', 'lanotte' );?></p>
						<?php } ?>
					</div>
					<?php 
						wp_nav_menu( 
						array( 
							'theme_location'    => 'layoutmenu',
							'container'         => '',
							'menu_class'        => '',
							'menu_id'           => '',
							'menu'              => '',
							'container_class'   => '',
							'container_id'      => '',
							'echo'              => true,
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new lanotte_wp_bootstrap_navwalker2(),
							'before'            => '',
							'after'             => '',
							'link_before'       => '',
							'link_after'        => '',
							'items_wrap'        => '<div class="stBlock text-center m-none %2$s">%3$s</div>',
							'depth'             => 0,
						)
					); ?>
				</div>
			</div>
		</div>
	<?php endif ?>
	<div id="page" class="page">
		<?php 
		$menu_trans_check = get_post_meta(get_the_ID(),'_cmb_menu_transparent', true);
		if ($menu_trans_check == 1) { ?>
			<header id="header" class="header tra-menu navbar-light">
		<?php } else { ?>
			<header id="header" class="header white-menu navbar-dark">
		<?php } ?>
				<div class="header-wrapper">
					<div class="wsmobileheader clearfix">
						<span class="smllogo">
							<?php if (isset($lanotte_redux_demo['logo_black']['url']) && $lanotte_redux_demo['logo_black']['url'] != '') {?>
								<img src="<?php echo esc_url($lanotte_redux_demo['logo_black']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
							<?php } else{ ?>
								<img src="<?php echo get_template_directory_uri();?>/assets/images/logo-01.png" alt="<?php bloginfo( 'name' ); ?>"/>
							<?php } ?>
						</span>
						<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>	
						<a href="tel:123456789" class="callusbtn ico-20"><span class="flaticon-phone-call-1"></span></a>
					</div>
					<div class="wsmainfull menu clearfix">
						<div class="wsmainwp clearfix">
							<div class="desktoplogo">
								<a href="<?php echo esc_url(home_url('/')); ?>" class="logo-black">
									<?php if (isset($lanotte_redux_demo['logo_black']['url']) && $lanotte_redux_demo['logo_black']['url'] != '') {?>
										<img src="<?php echo esc_url($lanotte_redux_demo['logo_black']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
									<?php } else{ ?>
										<img src="<?php echo get_template_directory_uri();?>/assets/images/logo-01.png" alt="<?php bloginfo( 'name' ); ?>"/>
									<?php } ?>
								</a>
							</div>
							<div class="desktoplogo">
								<a href="<?php echo esc_url(home_url('/')); ?>" class="logo-white">
									<?php if (isset($lanotte_redux_demo['logo_white']['url']) && $lanotte_redux_demo['logo_white']['url'] != '') {?>
										<img src="<?php echo esc_url($lanotte_redux_demo['logo_white']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
									<?php } else{ ?>
										<img src="<?php echo get_template_directory_uri();?>/assets/images/logo-white.png" alt="<?php bloginfo( 'name' ); ?>">
									<?php } ?>
								</a>
							</div>
							<nav class="wsmenu clearfix">
								<?php 
									wp_nav_menu( 
									array( 
										'theme_location'    => 'primary',
										'container'         => '',
										'menu_class'        => '',
										'menu_id'           => '',
										'menu'              => '',
										'container_class'   => '',
										'container_id'      => '',
										'echo'              => true,
										'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
										'walker'            => new lanotte_wp_bootstrap_navwalker(),
										'before'            => '',
										'after'             => '',
										'link_before'       => '',
										'link_after'        => '',
										'items_wrap'        => '<ul class="wsmenu-list nav-theme %2$s">%3$s',
										'depth'             => 0,
									)
								); ?>
								<?php 
								$hide_button = get_post_meta(get_the_ID(),'_cmb_hide_button', true);
								$text_button = get_post_meta(get_the_ID(),'_cmb_text_button', true);
								$link_button = get_post_meta(get_the_ID(),'_cmb_link_button', true);
								if ($hide_button == 0 ): ?>
									<li class="nl-simple" aria-haspopup="true">
										<?php 
										if ($menu_trans_check == 0) { ?>
											<a href="<?php print wp_specialchars_decode($link_button); ?>" class="btn rose--btn tra-black--hover last-link">
												<?php if ( '' !== wp_specialchars_decode($text_button)): ?>
													<?php print wp_specialchars_decode($text_button); ?>
												<?php else: ?>
													<?php echo esc_html__( 'Contacts', 'lanotte' ); ?>
												<?php endif ?>
											</a>
										<?php } else { ?>
											<a href="<?php print wp_specialchars_decode($link_button); ?>" class="btn rose--btn tra-white--hover last-link">
												<?php if ( '' !== wp_specialchars_decode($text_button)): ?>
													<?php print wp_specialchars_decode($text_button); ?>
												<?php else: ?>
													<?php echo esc_html__( 'Contacts', 'lanotte' ); ?>
												<?php endif ?>
											</a>
										<?php } ?>
									</li>
								<?php endif ?>
							</nav>
						</div>
					</div>
				</div>
			</header>