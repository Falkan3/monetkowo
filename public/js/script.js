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
            if ($(window).scrollTop() > 150) {
                $("body,html").animate({
                    scrollTop: $(dest).offset().top - 70
                }, 600);
            }
            else {
                $("body,html").animate({
                    scrollTop: $(dest).offset().top - 100
                }, 600);
            }

            return false;
        }
    }
});

//ANCHORS /--------------------------------------------------------

$(window).scroll(function () {
    if ($(window).scrollTop() > 150) {
        $("#backtotop").addClass("visible");
    } else {
        $("#backtotop").removeClass("visible");
    }

    var shrinkHeader = 300;
    var scroll = getCurrentScroll();
    if (scroll >= shrinkHeader) {
        $('header').addClass('shrink');
    }
    else {
        $('header').removeClass('shrink');
    }
    function getCurrentScroll() {
        return window.pageYOffset || document.documentElement.scrollTop;
    }
});

$("nav b").click(function (e) {
    e.preventDefault();
    $(this).toggleClass("visible");
    $(this).next('div').toggleClass("visible");
});

/* DRAWING SVG */

$(".number-column").each(function (e) {
    var svg = '<svg version="1.1" id="Layer_1" xmlns:x="&amp;ns_extend;" xmlns:i="&amp;ns_ai;" xmlns:graph="&amp;ns_graphs;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="250px" viewBox="0 0 255 296" enable-background="new 0 0 255 296" xml:space="preserve">';
    var data = $(this).attr('number-data');
    var path = '';
    var color = '#ebecf0';

    if (data == 1) {
        path = '<g><path fill="' + color + '" d="M209.7,291.5h-77.6V141.8c0-18.2,0.4-34.8,1.2-49.9c-4.8,5.8-10.7,11.9-17.8,18.2l-32.1,26.5L43.7,87.8l97.1-79.1h68.9V291.5z"></path></g>';
    }
    else if (data == 2) {
        path = '<g><path fill="' + color + '" d="M231.2,291.2H26.2V241l69-69.7c19.7-20.6,32.6-34.7,38.6-42.2c6.1-7.5,10.3-14,12.7-19.4c2.4-5.4,3.6-11.1,3.6-17c0-7.3-2.4-13.1-7.1-17.4c-4.8-4.3-11.5-6.4-20.1-6.4c-8.9,0-17.9,2.5-26.9,7.6C86.8,81.6,76.5,89.1,65.1,99L23.2,50c14.6-13,26.8-22.3,36.7-27.9c9.9-5.6,20.7-9.9,32.4-12.8c11.7-3,24.8-4.4,39.3-4.4c18.3,0,34.6,3.2,49,9.7C194.8,20.9,206,30,213.9,42c7.9,11.9,11.9,25.3,11.9,40.1c0,11.1-1.4,21.3-4.2,30.7c-2.8,9.4-7.1,18.6-12.8,27.7c-5.8,9.1-13.5,18.6-23.1,28.7c-9.6,10-30,29.1-61.3,57.2v1.9h106.8V291.2z"></path></g>';
    }
    else if (data == 3) {
        path = '<g><path fill="' + color + '" d="M222.9,69.5c0,17.3-5.3,32.1-15.8,44.5c-10.6,12.4-25.8,21.4-45.8,27v1.1c46.5,5.9,69.8,27.8,69.8,66c0,25.9-10.3,46.4-30.8,61.2c-20.5,14.9-49.1,22.3-85.5,22.3c-15,0-28.9-1.1-41.7-3.2c-12.8-2.2-26.6-6.1-41.5-11.8v-62.6c12.2,6.2,24.6,10.8,37.3,13.8c12.7,3,24.3,4.5,35,4.5c16.5,0,28.6-2.3,36.1-7c7.6-4.6,11.3-11.9,11.3-21.8c0-7.6-2-13.5-5.9-17.6c-3.9-4.1-10.3-7.2-19.1-9.3c-8.8-2.1-20.2-3.1-34.3-3.1H74.9v-56.7h17.5c38.3,0,57.4-9.8,57.4-29.4c0-7.4-2.8-12.8-8.5-16.4c-5.7-3.6-13.3-5.3-22.8-5.3c-17.8,0-36.2,6-55.3,17.9L32,33.2c14.8-10.2,29.9-17.4,45.3-21.7C92.7,7.2,110.4,5,130.4,5c28.9,0,51.5,5.7,67.9,17.2C214.7,33.6,222.9,49.4,222.9,69.5z"></path></g>'
    }

    svg += path + '</svg>';

    $(this).html(svg);
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

$(window).on('resize', function () {
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
});

$(window).on("load", function () {
    loadings.hide();
    $('.carousel').carousel({
        interval: 6000,
        pause: "false"
    });
    carousel.css('visibility', 'visible');

    if ($(window).width() > 768) {
        boxes_init();
        resize_boxes();
    }
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

function resize_flippers() {
    flippers.each(function(e) {
        $(this).height($(this).width());
    });
    flipper_height_items.each(function(e) {
        $(this).height(flippers.eq(0).height());
    });
}
