<?php 
	/*
		Template Name: 1
	*/
?>

<?php get_header() ?>

<?php the_post() ?>

<?php the_post_thumbnail() ?>

<header id="header_1" class="header_1 site-main">
	<h1><?php the_title();?></h1>
</header>

<main class="content gallery">
    <div class="container">
        <?php the_content(); ?>
    </div>
</main>

<?php get_footer() ?>