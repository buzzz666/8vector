<?php get_header('relative') ?>
<section id="article">
    <div class="container content-container">
    	<?php 
	    	if( have_posts() ) :  
	    		while( have_posts() ) :  
	    			the_post(); 
    	?>
    	<h1>
    		<?php the_title(); ?>   		
    	</h1>
        <?php the_content(); 
    		endwhile;
		endif;
        ?>
    </div>
    <div class="container share-buttons">
        <div id="share-btns"></div>
    </div>

    <?php 
        comments_template();
    ?>
</section>
<?php get_footer(); ?>