<div class="container header-container">
	<?php get_header(); ?>
</div>

<div class="container content-container"> 
	<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
		<a href="<?php the_permalink(); ?>">
			<h1><?php the_title(); ?></h1>
		</a>
		<?php the_content(); ?>
	<?php endwhile; ?>
	<?php endif; ?>
</div>

<div class="container footer-container">
	<?php get_footer(); ?>
</div>