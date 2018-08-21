<?php get_header() ?>
<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>

		<header id="header_1" class="header_1 site-main">
			<h1><?php the_title();?></h1>
		</header>

		<div id="cont_single" class="container-fluid">
			<img class="img_single img-fluid" alt="" src="<?php the_post_thumbnail() ?>">
		</div>
		
		<?php the_title() ?>
		<time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time>
		<?php the_content() ?>

	<?php } ?>
<?php } else { ?>
	<!-- Content -->
<?php } wp_reset_query(); ?>

<?php get_sidebar() ?>
<?php get_footer() ?>