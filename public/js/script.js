var loadings = $('#loading');
var carousel = $('#myCarousel');

carousel.css('visibility', 'hidden');
loadings.show();

$(document).ready(function (e) {
    resize_flippers();
});

//ANCHORS -------------------------------------------------------

$("#backtotop").click(function (e) {
    e.preventDefault();
    $("body,html").animate({
        scrollTop: 0
    }, 600);
    return false;
});

$("a.anchor").click(function (e) {
    var dest = $(this).attr('href');
    if (dest[0] == '#') {
        e.preventDefault();
        if (dest == '#top') {
            $("body,html").animate({
                scrollTop: 0
            }, 600);
            return false;
        }
        else {
            if ($(window).scrollTop() > 50) {
                $("body,html").animate({
                    scrollTop: $(dest).offset().top - 50
                }, 600);
            }
            else {
                $("body,html").animate({
                    scrollTop: $(dest).offset().top - 50
                }, 600);
            }

            return false;
        }
    }
});

//ANCHORS /--------------------------------------------------------

$(window).scroll(function () {

});

$('.navbar-collapse a').click(function (e) {
    if($( window ).width() <= 768) {
        $('.navbar-collapse').collapse('toggle');
    }
});

var $item = $('.carousel .item');
var $wHeight = $(window).height();

$item.height($wHeight);
$item.addClass('full-screen');

var $numberofSlides = $('.item').length;
var $currentSlide = Math.floor((Math.random() * $numberofSlides));

$('.carousel-indicators li').each(function () {
    var $slideValue = $(this).attr('data-slide-to');
    if ($currentSlide == $slideValue) {
        $(this).addClass('active');
        $item.eq($slideValue).addClass('active');
    } else {
        $(this).removeClass('active');
        $item.eq($slideValue).removeClass('active');
    }
});

$('.carousel img').each(function () {
    var $src = $(this).attr('src');
    var $color = $(this).attr('data-color');
    $(this).parent().css({
        'background-image': 'url(' + $src + ')',
        'background-color': $color
    });
    $(this).remove();
});

function resizeContents() {
    if ($(window).width() > 768) {
        $wHeight = $(window).height();
        $item.height($wHeight);
        resize_boxes();
    }
    else {
        $wHeight = 662;
        $item.height($wHeight);
        reset_boxes();
    }
    resize_flippers();
}

$(window).on('resize', function () {
    resizeContents();
});

$(window).on("load", function () {
    loadings.hide();
    $('.carousel').carousel({
        interval: 6000,
        pause: "false"
    });
    carousel.css('visibility', 'visible');

    boxes_init();
    resizeContents();
});

var same_height_container = $('.same-height');
var boxes;

function boxes_init() {
    boxes = $('div.scalable');
}

function resize_boxes() {
    var biggest = 0;
    boxes.each(function (e) {
        if ($(this).height() > biggest) {
            biggest = $(this).height();
        }
    });
    boxes.height(biggest);
}

function reset_boxes() {
    same_height_container.each(function (e) {
        var boxes = $(this).find('div.scalable');
        boxes.height('auto');
    });
}

var flippers = $('.flip-container');
var flipper_height_items = $('.flipper-height');
//var flippers_cards = flippers.find('.flipper');

function resize_flippers() {
    flippers.each(function(e) {
        $(this).height($(this).width());
    });
    flipper_height_items.each(function(e) {
        $(this).height(flippers.eq(0).height());
    });
}

flippers.hover(function(e) {
   $(this).addClass('hover');
});
flippers.mouseleave(function(e) {
    $(this).removeClass('hover');
});

//Make first option grey in select
var selects = $('#contact-form select');
selects.css('color', '#999');
selects.change(function(e) {
    if(this.selectedIndex == 0) {
        $(this).css('color', '#999');
    }
    else {
        $(this).css('color', '#000');
    }
});
var selects_option_first = $('#contact-form select option:first');
selects_option_first.each(function() {
    $(this).attr('disabled', true);
});


/*
flippers_cards.click(function(e) {
    $(this).css('transform', 'rotateY(180deg)');
});
*/
