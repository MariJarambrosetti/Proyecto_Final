<?php get_header() ?>

<!-- carousell -->
	<div id="carousel_home" class="carousel slide carousel-fade " data-ride="carousel" data-interval="10000">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="<?php bloginfo('template_url')?>/assets/images/carusel3.jpg" alt="De papel Tienda">
				<div class="carousel-caption d-sm-block d-block d-md-block">
					<h1>De Papel Tienda</h1>
					<p>Te invitamos a conocer nuestra nueva tienda On - line</p>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="<?php bloginfo('template_url')?>/assets/images/carusel1.jpg" alt="De papel Tienda">
				<div class="carousel-caption d-block d-sm-block d-md-block">
					<h1>De Papel Tienda</h1>
					<p>Te invitamos a conocer nuestra nueva tienda On - line</p>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="<?php bloginfo('template_url')?>/assets/images/carusel2.jpg" alt="De papel Tienda">
				<div class="carousel-caption d-sm-block d-block d-md-block">
					<h1>De Papel Tienda</h1>
					<p>Te invitamos a conocer nuestra nueva tienda On - line</p>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carousel_home" role="button" data-slide="prev">
			<span class="sr-only">Anterior</span>
		</a>
		<a class="carousel-control-next" href="#carousel_home" role="button" data-slide="next">
			<span class="sr-only">Siguiente</span>
		</a>
	</div>

	<!-- quienes somos -->
	<div class="container-fluid">
		<!-- texto  -->
		<div class="row">
			<div id="quienes_somos1" class=" col-md-6">
				<h2>Apoyamos y perzonalizamos tu organización</h2>
				<br/>
				<p>Buscamos ayudarte en el proceso de organizar y volverte más productiva con nuestros planificadores llenos de alegría, diseños coloridos, únicos y cada proceso hecho a mano. Para que un pedacito de nuestras buenas energías y cariño acompañen tus días.</p>	
			</div>
			<!-- IMAGEN DE 500 X 375 -->
			<div id="quienes_somos2" class=" col-md-6">
				<img class="img-fluid quienes_somos2_img" src="<?php bloginfo('template_url')?>/assets/images/depapel-1.jpg" alt="De papel Tienda">		
			</div>
		</div>
	</div>

	<!-- productos planificadores IMAGEN DE 286 X 180 -->
	<div id="planificadores" class="container-fluid planificadores">
		<!-- titulo -->
		<h2>Planificadores Disponibles</h2>

		<!-- linea de productos -->
		<div class="row producto">
			<!-- producto 1 -->
			<div class="col-md-3 col-sm-6 producto_div ">
				<div class="card producto_planificadores">
					<img class="card-img-top" src="<?php bloginfo('template_url')?>/assets/images/planificador1.jpg" alt="Planificador Disponible">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Comprar</a>
					</div>
				</div>
			</div>	
			<!-- producto 2	 -->
			<div class="col-md-3 col-sm-6 producto_div ">
				<div class="card producto_planificadores">
					<img class="card-img-top" src="<?php bloginfo('template_url')?>/assets/images/planificador2.jpg" alt="Planificador Disponible">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Comprar</a>
					</div>
				</div>
			</div>	
			<!-- producto 3	 -->
			<div class="col-md-3 col-sm-6 producto_div ">
				<div class="card producto_planificadores">
					<img class="card-img-top" src="<?php bloginfo('template_url')?>/assets/images/planificador1.jpg" alt="Planificador Disponible">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Comprar</a>
					</div>
				</div>
			</div>	
			<!-- producto 4 -->
			<div class="col-md-3 col-sm-6 producto_div ">
				<div class="card producto_planificadores">
					<img class="card-img-top" src="<?php bloginfo('template_url')?>/assets/images/planificador2.jpg" alt="Planificador Disponible">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Comprar</a>
					</div>
				</div>
			</div>			
		</div> 
		<!-- boton VER TODOS los productos -->
		<div class="container boton_planificadores">
			<button type="button" class="btn btn-info btn-lg">Ver Todos</button>
		</div>
	</div>

	<!-- eventos especiales  -->
	<div class="container-fluid eventos_especiales">
		<div class="row">
			<!-- imagenes de los eventos -->
			<div class="col-md-6 eventos_fila_1">
				<div class="eventos_img1"></div>
				<div class="eventos_img2"></div>
				<div class="eventos_img3"></div>		
			</div>

			<!-- texto de los eventos -->
			<div class="col-md-6 eventos_fila_2">
				<h2>Eventos Especiales</h2>
				<br/>
				<p>Personalizamos ese día especial que quieres celebrar junto a los tuyos, cuéntanos que temática te gusta y nosotros hacemos la magia</p>
				<br/>
				<button type="button" class="btn btn-info btn-lg">Ver Todos</button>
			</div>  
		</div>
	</div>

	<!-- socios -->
	<div id="socios" class="container-fluid">
		<h2>Partners</h2>
		<div class="row">
			<!-- creativas emprenden -->
			<div class="socios_div col-md-6 col-sm-6">
				<img class="img-fluid socios_img creativas" src="<?php bloginfo('template_url')?>/assets/images/creativas_emprenden.jpg" alt="Creativas emprenden">
				<p>Fomentamos el aprendizaje, nos inspiramos y unidas generamos redes de apoyo para hacer crecer nuestros emprendimientos.</p>
				<!-- iconos -->
				<a href="www.cretivasemprenden.cl">
					<i class="fas fa-globe"></i>
				</a>
				<a href="https://www.facebook.com/creativasemprenden/">
					<i class="fab fa-facebook-square"></i>
				</a>
				<a href="https://www.instagram.com/creativasemprenden/?hl=es-la">
					<i class="fab fa-instagram"></i>
				</a>
			</div>
			<!-- goso -->
			<div class="socios_div col-md-6 col-sm-6">
				<img class="img-fluid socios_img goso" src="<?php bloginfo('template_url')?>/assets/images/gosologo.jpg" alt="Goso">
				<p>Somos un equipo multidisciplinario, gestores creativos, del desarrollo humano, el bienestar y la felicidad.</p>
				<!-- iconos -->
				<a href="www.goso.cl">
					<i class="fas fa-globe"></i>
				</a>
				<a href="https://www.facebook.com/www.goso.cl/">
					<i class="fab fa-facebook-square"></i>
				</a>
				<a href="https://www.instagram.com/_goso_/?hl=es-la">
					<i class="fab fa-instagram"></i>
				</a>
			</div>
		</div>
	</div>

	<!-- blog -->

	<div id="container-fluid">
		<h2 class="blog_titulo">Blog</h2>
		<div class="row blog">

			<?php
			$post_a = array(
				'post_type'		 => 'post',
				'category_name'	 => 'blog',
				'posts_per_page' => 2
			);

			$get_post_a = new WP_Query( $post_a );

			while ( $get_post_a->have_posts() ) {
				$get_post_a->the_post();

				// $thumb_id = get_post_thumbnail_id();
				// $thumb_url = wp_get_attachment_image_url( $thumb_id, 'thumbnail-size', true );

				// Ruta de la imagen destacada (tamaño completo)
				global $post;
				$thumbID = get_post_thumbnail_id( $post->ID );
				$imgDestacada = wp_get_attachment_url( $thumbID );
			?>	
				<!-- posts del blog -->
				<div class="col-md-6 col-sm blog_1">
					<a href=" <?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
					<img class="img-fluid blog_imagen" src="<?php echo $imgDestacada; ?>" alt="">
				</div>
			<?php } wp_reset_postdata();?>

		</div>
	</div>

	<!-- instagram Feed-->
	<div class="container-fluid insta">
		<h2>Síguenos en Instagram</h2>
		<div id="instafeed" class="row"></div>
	</div>
<!-- <?php 
// get_sidebar() 
?> -->

<?php get_footer() ?>