<?php get_header() ?>
	<?php the_post() ?>

<header id="header_1" class="header_1 site-main">
	<h1><?php the_title();?></h1>
</header>

	<main class="content gallery">
    <div class="container">
        <?php the_content(); ?>
    </div>
</main>
	
	<?php if ( is_active_sidebar( 'contact_widget' ) ) : ?>
		<?php dynamic_sidebar( 'contact_widget' ); ?>            
	<?php endif; ?>

<?php get_footer() ?>