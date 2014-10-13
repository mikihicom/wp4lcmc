/*topbar hide*/
jQuery(function($) {
	$(window).scroll(function () {
		var s = $(this).scrollTop();
		var m = 100;
		if(s > m) {
			$("#hide_header_box").slideDown(1000,'easeOutBounce' );
		} else if(s < m) {
            $("#hide_header_box").fadeOut(1000);
			
		}
	});
});
/*scrollbar hide*/
jQuery(function($) {
	$(window).scroll(function () {
		var s = $(this).scrollTop();
		var m = 120;
		if(s > m) {
			$("#scrollnav").fadeIn('slow');
			$(".scrollnav_text").fadeIn('slow');
		} else if(s < m) {
			$("#scrollnav").fadeOut('slow');
			$(".scrollnav_text").fadeOut('slow');
		}
	});
    $("#scrollnav").click(function () {
        $('html,body').animate({ scrollTop: 0 }, 'slow');
        return false;
    });

});