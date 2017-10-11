<?php /* Template Name: Random message */ ?>

<?php wp_enqueue_style( 'random-message', TMPL_DIR . '/assets/pages/random-message/css/random-message.css', ['bootstrap']); ?>
<?php wp_enqueue_script( 'random-message', TMPL_DIR . '/assets/pages/random-message/js/random-message.js', ['jquery'], '', true); ?>

<?php get_header('relative')?>

<section id="random-message">
	<div class="container">
		<div class="result">
			
		</div>
		<div class="message">
			<button class="btn btn-primary send-button">
				Send
				<i class="image spinner">
					<img src="<?php echo TMPL_DIR ?>/assets/pages/random-message/img/spinner.gif" alt=""/>
				</i>
				<i class="image success">
					<img src="<?php echo TMPL_DIR ?>/assets/pages/random-message/img/success.png" alt=""/>
				</i>
			</button>			
		</div>
	</div>
</section>

<?php get_footer(); ?>