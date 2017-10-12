jQuery(document).ready(function($) {
	var data = {
		action: 'get_message',
		lang: 'eng'
	};

	$( ".send-button" ).click(function() {
		data.lang = $(this).attr('data-lg');

		$.ajax({
		    type: 'POST',
		    url: myajax.url,
		    data: data,
		    beforeSend: function() {
		    	if($('.success').hasClass('enable')){
		    		$('.success').removeClass('enable');
		    	}
		        $('.spinner').addClass('enable');
		        $('.send-button').attr('disabled','disabled');
		    },
		    success: function(data) {
		        var data = JSON.parse(data);
				console.log(data);
				$('.result-textarea').val(data.message);

		    },
		    error: function() {
		    	console.log('error');
		    },
		    complete: function() {
		        $('.spinner').removeClass('enable');
		        setTimeout(function(){
		        	$('.success').removeClass('enable');
		        }, 5000);
		        $('.success').addClass('enable');
		        $('.send-button').removeAttr('disabled');
		    },
		    dataType: 'html'
		});
	});
});