$(function() {
	$('.more-button-yellow').click(function() {
		$('.sfp-main').show();
	});
}); 

$(function() {
	$('.sfp-close').click(function() {
		$('.sfp-main').hide();
	});
}); 

var vid = document.getElementById("video");

vid.muted = true;

function Mute() { 
	if(vid.muted == false)
		{
		vid.muted = true;
		}
	else
		{
		vid.muted = false;
		}  
}  