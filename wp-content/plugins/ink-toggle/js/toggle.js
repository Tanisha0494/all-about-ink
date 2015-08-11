jQuery(document).ready(function($){

	$('.single figcaption').hide();

	$('.single figure').click(function(){

		$(this).toggleClass('current')

		$('.single .current figcaption').slideToggle(function(){
			$('.single figure').removeClass('current')
		});

	}); 
});