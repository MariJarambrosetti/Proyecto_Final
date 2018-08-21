<?php get_header() ?>

<?php the_post() ?>

<?php the_post_thumbnail() ?>

<header id="header_1" class="header_1 site-main">
	<h1><?php the_title();?></h1>
</header>

<?php the_content(); ?>

<?php get_footer() ?>