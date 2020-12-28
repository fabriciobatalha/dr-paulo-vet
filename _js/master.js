/* Close Responsible Menu */
$(".nav-link").on("click", function() {
   $('.navbar-collapse').collapse('hide');
});

/* Anchor Link */
if (window.matchMedia("(max-width: 767px)").matches) {
	$('.navbar-nav a[href^="#"]').on('click', function(e) {
		e.preventDefault();
		var id = $(this).attr('href'),
		targetOffset = $(id).offset().top;

		$('html, body').animate({
			scrollTop: targetOffset - 296
		}, 1000);
	});
} 
	else {
		$('.navbar-nav a[href^="#"]').on('click', function(e) {
			e.preventDefault();
			var id = $(this).attr('href'),
			targetOffset = $(id).offset().top;

			$('html, body').animate({
				scrollTop: targetOffset - 100
			}, 1000);
		});
	}

//WhatsApp or Phone Mask
$('.whatsapp-phone').maskbrphone({  
    useDdd           : true,
    useDddParenthesis: true,
    dddSeparator     : ' ',
    numberSeparator  : '-'
});

/* Google Analytics */
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'UA-142144075-1');