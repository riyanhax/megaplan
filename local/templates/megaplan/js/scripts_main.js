var vid = document.getElementById("video");

vid.muted = true;

function Mute() { 
	if(vid.muted == false)
		{
		vid.muted = true;
		$("#mute").removeClass('main-block-unmute');
		$("#mute").addClass('main-block-mute');
		}
	else
		{
		vid.muted = false
		$("#mute").removeClass('main-block-mute');
		$("#mute").addClass('main-block-unmute');
		}  
}