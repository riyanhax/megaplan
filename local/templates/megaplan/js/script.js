if($(window).width() <= 480) {
	$('meta[name="viewport"]').attr('content', 'width=480');
}

$(document).ready(function () {
    $(document).scroll(function () {
        var offset = $(document).scrollTop();
        console.log('offset = '+offset);
        if($("div").is(".section-wrapper")){
            var div = $(".content-crop .section-wrapper");
            var scrolled = div.offset().top;
            var margin_top = +div.css("margin-top").replace("px", "");

            if(margin_top < -210)
                div.css("margin-top", -210+"px");
            if ((offset > scrolled && margin_top < 0) || (offset < scrolled && margin_top > -210))
                div.css("margin-top", margin_top+offset-scrolled+"px");
        }
        else if($('div').is("#plansBlock")){
            var div2 = $("#plansBlock");
            var scrolled = div2.offset().top;
            console.log('srolled = '+scrolled);
            var margin_top = +div2.css("margin-top").replace("px", "");
            console.log('margintop = '+margin_top);

            if(margin_top < -160)
                div2.css("margin-top", -160+"px");
            if ((offset > scrolled && margin_top < 0) || (offset < scrolled && margin_top > -160))
                div2.css("margin-top", margin_top+offset-scrolled+"px");
        }

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
	$('#int_button').click(function(e) {
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