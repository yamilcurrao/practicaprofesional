<!DOCTYPE html>
<!--[if lt IE 7]>
    <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>
    <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>
    <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <meta charset="<?php bloginfo('charset'); ?>" />	
	<?php $wl_theme_options = weblizar_get_options(); ?>
	<?php if($wl_theme_options['upload_image_favicon']!=''){ ?>
	<link rel="shortcut icon" href="<?php  echo esc_url($wl_theme_options['upload_image_favicon']); ?>" /> 
	<?php } ?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div>
	<!-- Header Section -->
	<div class="header_section" >
		<img src="http://localhost/wordpress/wp-content/themes/enigma/images/carru1.jpg" class="img-responsive">
	</div>	
	<!-- /Header Section -->
	<!-- Navigation  menus -->

	<div class="navigation_menu "  data-spy="affix" data-offset-top="95" id="enigma_nav_top">
		<span id="header_shadow"></span>
		<div class="container navbar-container" >
			<nav class="navbar navbar-default " role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
					 
					  <span class="sr-only"><?php _e('Toggle navigation','weblizar');?></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>
				</div>
				<div id="menu" class="collapse navbar-collapse ">	
				<?php wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_class' => 'nav navbar-nav',
						'fallback_cb' => 'weblizar_fallback_page_menu',
						'walker' => new weblizar_nav_walker(),
						)
						);	?>				
				</div>	
			</nav>
		</div>
	</div>