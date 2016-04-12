<?php if (have_post()): while ('have_posts()): the_post(); ?>

	<!--article -->
	<article id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
