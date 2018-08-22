<div class="container-fluid footer">

		<div class="row footer_row">
			
			<div class="col-md-4 footer_inner">
				<h5>¿Dónde estamos?</h5>
				<div class="row">
					<div id="map" class="col-md">
						
					</div>
				</div> 
			</div>
			<div class="col-md-4 footer_inner">
				<h5>FAQ</h5>
				<a href="#">¿Cómo comprar?</a><br/>
				<a href="#">Devoluciones y reembolsos</a><br/>
				<a href="#">Preguntas Frecuentes</a><br/>
			</div>
			<div class="col-md-4 footer_inner">
				<h5>Síguenos</h5>
				<a href="https://www.facebook.com/tudepapel/">
					<i class="fab fa-facebook-square"></i>
				</a>
				<a href="https://www.instagram.com/depapel.tienda/">
					<i class="fab fa-instagram"></i>
				</a>
			</div>
		</div>
		<p>© De Papel. Todos los derechos reservados.</p> 
	</div>

<?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'header_menu' ) ); ?>
<?php } ?>

<?php get_template_part( '_includes/footer', 'maps' ); ?>

<?php wp_footer() ?>
</body>
</html>