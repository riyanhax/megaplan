function more(id) { 	
	$("#"+id).removeClass('forbuss-block-more-close-1');
	$("#"+id).removeClass('forbuss-height-'+id);
	$("#"+id).addClass('forbuss-block-more-open-1');
	$("#more-"+id).addClass('forbuss-hidden');
	
$(function() {
$('.forbuss-block-more-open-1').customScroll({
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
}

function more2(id) { 	
	$("#"+id).removeClass('forbuss-block-more-close-1');
	$("#"+id).removeClass('forbuss-height-'+id);
	$("#"+id).addClass('forbuss-block-more-open-2');
	$("#more-"+id).addClass('forbuss-hidden');
	
$(function() {
$('.forbuss-block-more-open-2').customScroll({
	prefix: 'custom-scroll-2_',

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
}