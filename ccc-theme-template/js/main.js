$(document).ready(function() {
	
	$(window).scroll(function() {
		if ($(this).scrollTop() > 1){  
			$('.page-title').addClass("sticky");
		}
		else{
			$('.page-title').removeClass("sticky");
		}
	});

});

$(function() {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            $('body').addClass('changeColor')
        }
        if ($(this).scrollTop() < 500) {
            $('body').removeClass('changeColor')
        }
        if ($(this).scrollTop() > 1200) {
            $('body').addClass('changeColorWhite')
        }
        if ($(this).scrollTop() < 1200) {
            $('body').removeClass('changeColorWhite')
        }
    });

});

var lastTop = 0;
    
    scrolled();
    
    $(window).scroll(scrolled);