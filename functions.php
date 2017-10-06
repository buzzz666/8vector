<?php 

define ('TMPL_DIR', get_template_directory_uri());

function eco_setup() {
    load_theme_textdomain('eco_setup');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

   add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    ));
}
add_action('after_setup_theme', 'eco_setup');

function vector8_scripts() {
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', ['jquery'], '', true);
	wp_enqueue_script( 'scrollup', get_template_directory_uri() . '/assets/js/scrollup.js', [], '', true);
	wp_enqueue_script( 'parallax-section', get_template_directory_uri() . '/assets/js/parallax-section.js', [], '', true);
	wp_enqueue_script( 'jssocials', get_template_directory_uri() . '/assets/js/jssocials.min.js', [], '', true);
	wp_enqueue_script( 'share-buttons', get_template_directory_uri() . '/assets/js/share-buttons.js', [], '', true);
	wp_enqueue_script( 'main-carousel', get_template_directory_uri() . '/assets/js/main-carousel.js', [], '', true);
	wp_enqueue_script( 'jquery.filterizr', get_template_directory_uri() . '/assets/js/jquery.filterizr.min.js', [], '', true);
	wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/assets/js/lightbox.min.js', [], '', true);


	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/assets/css/custom.css');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
	wp_enqueue_style( 'jssocials', get_template_directory_uri() . '/assets/css/jssocials.css');
	wp_enqueue_style( 'jssocials-theme-flat', get_template_directory_uri() . '/assets/css/jssocials-theme-flat.css');
	wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/assets/css/lightbox.min.css');
}

function register_offers_post_types(){
	register_post_type('offers', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Offers',
			'singular_name'      => 'Offer',
			'add_new'            => 'Add offer',
			'add_new_item'       => 'Add new offer',
			'edit_item'          => 'Edit offer',
			'new_item'           => 'New offer',
			'view_item'          => 'View offer',
			'search_items'       => 'Find offer',
			'not_found'          => 'Not found',
			'not_found_in_trash' => 'Not found in trash',
			'menu_name'          => 'Offers',
		),
		'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        'menu_icon' => 'dashicons-format-aside', // иконка в меню
        'menu_position' => 20, // порядок в меню
        'supports' => array( 'title', 'editor', 'comments', 'thumbnail')
	) );
}

function register_services_post_types(){
	register_post_type('services', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Services',
			'singular_name'      => 'Service',
			'add_new'            => 'Add service',
			'add_new_item'       => 'Add new service',
			'edit_item'          => 'Edit service',
			'new_item'           => 'New service',
			'view_item'          => 'View service',
			'search_items'       => 'Find service',
			'not_found'          => 'Not found',
			'not_found_in_trash' => 'Not found in trash',
			'menu_name'          => 'Services',
		),
		'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        'menu_icon' => 'dashicons-format-aside', // иконка в меню
        'menu_position' => 20, // порядок в меню
        'supports' => array( 'title', 'editor', 'comments', 'thumbnail')
	) );
}

function print_services( $atts, $content = null ){
	extract(shortcode_atts(array(
    	"colls" => '1',
    	"order" => 'ASC',
    	"textlen" => '30', 
 	), $atts));

	$args = array(
		'post_type' => 'services',
		'posts_per_page' => $colls,
		'order' => $order,
	);

	$class = 12/$colls;
	if ($colls == 1)
		$bgID = 'main-services';
	else
		$bgID = 'services-tricolumn';
	
	$result = '<div id="'.$bgID.'">
				<div class="container content-container">';	

	$query = new WP_Query( $args );
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();

			$result .= '
						<div class="col-sm-'.$class.' article">
							<h1>
							    '.get_the_title().'
							</h1>
							<h2>
							  	'.get_field("subtitle").'
							</h2>
							<p>
								'.wp_trim_words( get_the_content(), $textlen, ' ...' ).'
							</p>
							<a href="'.get_the_permalink().'">more 
							    <i class="fa fa-chevron-circle-right"></i>
							</a>
					    </div>	
			            ';
		}
		$result .= '</div>	
				</div>';
		return $result;
	} 
	else {
		
	}
    wp_reset_query();
    return html_entity_decode($result);
}


add_action( 'init', 'register_offers_post_types' );
add_action( 'init', 'register_services_post_types' );
add_action( 'wp_enqueue_scripts', 'vector8_scripts' );

add_shortcode('services', 'print_services');

register_nav_menus( array(
	'header_menu' => 'Header Menu',
) );