$(function() {
$('.forbuss-block-in-block').customScroll({
	prefix: 'custom-scroll_',

	/* vertical */
	barMinHeight: 10,
	offsetTop: 5,
	offsetBottom: 5,
	/* will be added to offsetBottom in case of horizontal scroll */
	trackWidth: 10,

	/* horizontal */
	barMinWidth: 10,
	offsetLeft: 0,
	offsetRight: 0,
	/* will be added to offsetRight in case of vertical scroll */
	trackHeight: 10,

	/* each bar will have custom-scroll_bar-x or y class */
	barHtml: '<div />',

	/* both vertical or horizontal bar can be disabled */
	vertical: true,
	horizontal: false
});
});

$(document).ready(function () {
    $(document).scroll(function () {
        var offset = $(document).scrollTop();
        var div = $(".content-crop .section-wrapper");
        var scrolled = div.offset().top;
        var margin_top = +div.css("margin-top").replace("px", "");

        if(margin_top < -210)
            div.css("margin-top", -210+"px");
        if ((offset > scrolled && margin_top < 0) || (offset < scrolled && margin_top > -210))
            div.css("margin-top", margin_top+offset-scrolled+"px");

    });
    $('a').click(function(){
        var div = $(".content-crop .section-wrapper");
        var href = $(this).attr("href"),
            offsetTop = href === "#" ? 0 : $(href).offset().top;
        if(offsetTop==0)
            div.css("margin-top", -210+"px");
    });

    $('.video_border').click(function(){
       var video = $(this).find('video');
       var play = $(this).find('.video_play');
        if (video[0].paused){
            video[0].play();
            play.addClass("played");
        }else {
            video[0].pause();
            play.removeClass("played");
        }
    });
});

$(function() {
	$('.show-regform-main').click(function(e) {
        e.preventDefault();
		$('.regform-main').show("slow");
	});
});

$(function() {
    $('.regform-close').click(function(e) {
        e.preventDefault();
        $('.regform-main').hide("slow");
    });
});

$(function() {
	$('.show-partners-solutions').click(function(e) {
        e.preventDefault();
		$('.sfp-main').show("slow");
	});
});

$(function() {
	$('.more-button-yellow').click(function(e) {
        e.preventDefault();
		$('.sfp-main').show("slow");
	});
});
 
$(function() {
	$('.sfp-close').click(function(e) {
        e.preventDefault();
		$('.sfp-main').hide("slow");
	});
}); 

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