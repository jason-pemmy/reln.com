<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title( '|', true, 'right' );?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class($post->post_name) ?>>
		<?php do_action('tbk_add_to_top_of_body'); ?>
		<a class="skip-to-content sr-only sr-only-focusable" href="#main">
			<?php _e('Skip to content', 'the-theme'); ?>
		</a><div class="site-wrapper">
		<div class="navbar-default-container">
			<header class="banner navbar navbar-default navbar-static-top" role="banner">
				<div class="navbar-default-inner">
					<div class="navbar-header container">
						<a class="navbar-brand" href="<?php echo esc_url(home_url( '/' )); ?>">
							<img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png"
								 alt="<?php bloginfo('name');?>">
						</a>
						<button data-toggle="collapse-side" 
							data-target=".side-collapse" 
							type="button" 
							class="navbar-toggle collapsed">
							<div class="open-text">
								<span class="hamburger">
									<span class="hamburger-bar"></span>
									<span class="hamburger-bar"></span>
									<span class="hamburger-bar"></span>
								</span>
								<p class="btn-text"><?php _e('Menu', 'the-theme'); ?></p>
							</div>
							<div class="close-text">
								<span class="icon-close icon"></span>
								<p class="btn-text"><?php _e('Close', 'the-theme'); ?></p>
							</div>
						</button>
					</div>
					<div class="side-collapse in">
						<?php
							wp_nav_menu( array(
								'container' => false,
								'menu' => 'MainMenu',
								'menu_class' => 'nav navbar-nav reln-nav',
								'menu_id' => 'main-menu',
								'link_before' => '',
								'link_after' => '',
								'walker' => '',
							));
						?>
					</div>
				</div>
			</header>
		</div>	
		<main id="main" class="main">