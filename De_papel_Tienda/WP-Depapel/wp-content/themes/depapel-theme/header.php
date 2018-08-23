<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light menu">
		<a class="navbar-brand img-fluid marca" href="<?php bloginfo('url');?>">
			<img id="logo" class="img-fluid logo" src="<?php bloginfo('template_url');?>/assets/images/depapel.png" alt="De Papel">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse menu_inner" id="navbarSupportedContent">

			<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
				<?php wp_nav_menu( array(
					'theme_location' => 'header-menu',
					'container' 		=> false,
					'menu_class'      	=> 'nav navbar-nav ml-auto'
				)); ?>
			<?php } ?>

		</div>
	</nav>