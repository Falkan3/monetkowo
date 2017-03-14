var loadings = $('#loading');
var carousel = $('#myCarousel');
var backToTop = $("#backtotop");

$(document).ready(function (e) {
    carousel.css('visibility', 'hidden');
    centerLoadings();
    loadings.show();
});

function centerLoadings() {
    loadings.each(function (e) {
        $(this).css('left', $(document).width() / 2 - $(this).width() / 2);
    });
}

//ANCHORS -------------------------------------------------------

backToTop.click(function (e) {
    e.preventDefault();
    $("body,html").animate({
        scrollTop: 0
    }, 600);
    return false;
});

$("a").click(function (e) {
    var dest = $(this).attr('href');
    console.log(dest)
    if (dest[0] == '\#') {
        e.preventDefault();
        if (dest == '\#top') {
            $("body,html").animate({
                scrollTop: 0
            }, 600);
            return false;
        }
        else {
            console.log('scrolling')
            if ($(window).scrollTop() > 50) {
                console.log('doing it')
                $("body,html").animate({
                    scrollTop: $(dest).offset().top - 50
                }, 600);
            }
            else {
                console.log('really doing it')
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
    if ($(window).scrollTop() > 100) {
        backToTop.addClass('visible');
    }
    else {
        backToTop.removeClass('visible');
    }
});

$('.navbar-collapse a').click(function (e) {
    if ($(window).width() <= 768) {
        $('.navbar-collapse').collapse('toggle');
    }
});

var $item = $('.carousel .item');
var $wHeight = $(window).height();
if ($wHeight > 1080)
    $wHeight = 1080;

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
    centerLoadings();
});

var same_height_container = $('.same-height');
var boxes;

$(window).on("load", function () {
    setTimeout(function () {
        loadings.hide();
        $('.carousel').carousel({
            interval: 6000,
            pause: "false"
        });
        carousel.css('visibility', 'visible');
    }, 500);
});

/* Timer */
function Interval(fn, time) {
    var timer = false;
    this.start = function () {
        if (!this.isRunning())
            timer = setInterval(fn, time);
    };
    this.stop = function () {
        if (this.isRunning()) {
            clearInterval(timer);
            timer = false;
        }
    };
    this.isRunning = function () {
        return timer !== false;
    };
    this.reset = function () {
        this.stop();
        this.start();
    }
}

//Make first option grey in select
var selects = $('#contact-form select');
selects.css('color', '#999');
selects.change(function (e) {
    if (this.selectedIndex == 0) {
        $(this).css('color', '#999');
    }
    else {
        $(this).css('color', '#000');
    }
});
var selects_option_first = $('#contact-form select option:first');
selects_option_first.each(function () {
    $(this).attr('disabled', true);
});

function viewport() {
    var e = window, a = 'inner';
    if (!('innerWidth' in window )) {
        a = 'client';
        e = document.documentElement || document.body;
    }
    return { width : e[ a+'Width' ] , height : e[ a+'Height' ] };
}

/*
 flippers_cards.click(function(e) {
 $(this).css('transform', 'rotateY(180deg)');
 });
 */
