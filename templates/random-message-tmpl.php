<?php /* Template Name: Random message */ ?>

<?php wp_enqueue_style( 'random-message', TMPL_DIR . '/assets/pages/random-message/css/random-message.css', ['bootstrap']); ?>
<?php wp_enqueue_script( 'random-message', TMPL_DIR . '/assets/pages/random-message/js/random-message.js', ['jquery'], '', true); ?>

<?php get_header('relative')?>

<section id="random-message">
	<div class="container">
		<div class="result">
			<textarea class="result-textarea" rows="5" cols="50"></textarea>
			<i class="image spinner">
				<img src="<?php echo TMPL_DIR ?>/assets/pages/random-message/img/spinner.gif" alt=""/>
			</i>
		</div>
		<div class="message-control">
			<div class="inine">
				<button class="btn btn-primary send-button" data-lg="ru">
					Send RU 	
				</button>	
				<button class="btn btn-primary send-button" data-lg="ukr">
					Send UKR
				</button>	
			</div>
			<div class="inine">
				<button class="btn btn-primary send-button" data-lg="by">
					Send BY
				</button>	
				<button class="btn btn-primary send-button" data-lg="eng">
					Send ENG
				</button>	
			</div>					
		</div>
	</div>
</section>
				<!-- SUCCESS IMG -->
				<!--<i class="image success">
						<img src="<?php echo TMPL_DIR ?>/assets/pages/random-message/img/success.png" alt=""/>
					</i>-->

<?php get_footer(); ?>