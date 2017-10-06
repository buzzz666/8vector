<?php /* Template Name: Services */ get_header('relative');?>

<?php if( have_posts() ) :  
		while( have_posts() ) :  
			the_post(); 
		    the_content(); 
		endwhile;
	  endif;?>
<?php get_footer(); ?>