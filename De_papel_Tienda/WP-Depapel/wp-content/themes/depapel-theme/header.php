<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>
	<title>De papel Tienda</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light menu">
		<a class="navbar-brand img-fluid marca" href="#">
			<img id="logo" class="img-fluid logo" src="<?php bloginfo('template_url');?>/assets/images/depapel.png" alt="De Papel">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse menu_inner" id="navbarSupportedContent">

			<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
				<?php wp_nav_menu( array(
					'theme_location' => 'header-menu',
					'container' => false,
					'menu_class'      	=> 'nav navbar-nav ml-auto',
					'menu_id'         	=> '',
					'echo'            	=> true,
					'fallback_cb'     	=> 'wp_page_menu',
					'items_wrap'      	=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           	=> 2,
					'walker'          	=> ''
				)); ?>
			<?php } ?>

			<!--<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Planificadores
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Disponibles</a>
						<a class="dropdown-item" href="#">Personalizados</a>
						<a class="dropdown-item" href="#">Profesionales</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Eventos
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Cumpleaños</a>
						<a class="dropdown-item" href="#">Bautizos</a>
						<a class="dropdown-item" href="#">Matrimonio</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Servicios Corporativos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Coaching</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Contacto</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></i></a>
				</li>
				<form id="buscar" action="#">
					<input class="buscando" type="search" placeholder="Search">
				</form>
			</ul> -->
		</div>
	</nav>