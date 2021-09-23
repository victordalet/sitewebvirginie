$(document).ready( function () 
{
    $('body').append('<div id="returnOnTop" title="Retour en haut"><img src="../images/return_on_top.jpg>"</div>');
    $('#returnOnTop').click( function() {
	$('html,body').animate({scrollTop: 0}, 'slow');
    });
});

$(window).scroll(function() 
{
    if ( $(window).scrollTop() == 0 )
	$('#returnOnTop').fadeOut();
    else
	$('#returnOnTop').fadeIn();
});