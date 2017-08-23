//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin

$(function() {
    $(document).on('click', 'a.page-scroll', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

$('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });


// GALLERY

popup = {
init: function(){
$('figure').click(function(){
  popup.open($(this));
});

$(document).on('click', '.popup img', function(){
  return false;
}).on('click', '.popup', function(){
  popup.close();
})
},
open: function($figure) {
$('.gallery').addClass('pop');
$popup = $('<div class="popup" />').appendTo($('body'));
$fig = $figure.clone().appendTo($('.popup'));
$bg = $('<div class="bg" />').appendTo($('.popup'));
$close = $('<div class="close"><svg><use xlink:href="#close"></use></svg></div>').appendTo($fig);
$shadow = $('<div class="shadow" />').appendTo($fig);
src = $('img', $fig).attr('src');
$shadow.css({backgroundImage: 'url(' + src + ')'});
$bg.css({backgroundImage: 'url(' + src + ')'});
setTimeout(function(){
  $('.popup').addClass('pop');
}, 10);
},
close: function(){
$('.gallery, .popup').removeClass('pop');
setTimeout(function(){
  $('.popup').remove()
}, 100);
}
}

popup.init()
