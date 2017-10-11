<?php 

add_action( 'wp_ajax_nopriv_get_message', 'get_message' );
add_action( 'wp_ajax_get_message', 'get_message' );
function get_message(){
	$whatever = intval( $_POST['whatever'] );

	$status = 'succes';
	$messages = '';

	$messages = file_get_contents(TMPL_DIR. '/app/random-message/messages.php');
	if($messages){
		$messages = explode('~', $messages);
		$index = mt_rand(0, count($messages) - 1);
		$message = $messages[$index];
	}
	else{
		$status = 'error_reading_file';
	}	

	$result = [
		'status' => $status,
		'message' => $message,
	];

	wp_die(json_encode($result));
}

?>