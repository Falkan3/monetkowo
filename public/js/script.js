var loadings = $('#loading');
var carousel = $('#myCarousel');
var backToTop = $("#backtotop");

$(document).ready(function (e) {
    carousel.css('visibility', 'hidden');
    centerLoadings();
    loadings.show();
    resize_flippers();
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

$("a.anchor").click(function (e) {
    var dest = $(this).attr('href');
    console.log(dest)
    if (dest[0] == '\#') {
        console.log('yes')
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
    if (boxesVars.active == false && $(window).scrollTop() > boxesVars.initiator) {
        boxesVars.active = true;
        rotateBoxesInit();
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

function resizeContents() {
    if ($(window).width() > 768) {
        $wHeight = $(window).height();
        if ($wHeight > 1080)
            $wHeight = 1080;
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
    centerLoadings();
    resizeContents();
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

        boxes_init();
        resizeContents();
    }, 500);

});

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
    flippers.each(function (e) {
        $(this).height($(this).width() * 0.833);
    });
    flipper_height_items.each(function (e) {
        $(this).height(flippers.eq(0).height());
    });
}

flippers.hover(function (e) {
    flippers.removeClass('hover');
    $(this).addClass('hover');
    boxesVars.activeBoxIndex = $(this).attr('data-box-index');
});
/*
flippers.mouseleave(function (e) {
    $(this).removeClass('hover');
});
*/

boxesVars = {
    'active': false,
    'initiator': $('#page_cards').offset().top-$('#page_cards').outerHeight()*0.8,
    'boxes': flippers,
    'timer': null,
    'activeBoxIndex': 0,
    'maxBoxIndex': flippers.length - 1
};
function rotateBoxesInit() {
    var x = 0;
    boxesVars.boxes.each(function () {
        $(this).attr('data-box-index', x++);
    });
    boxesVars.activeBoxIndex = 0;
    boxesVars.timer = new Interval(rotateBoxes, 3000);
    boxesVars.timer.reset();
    rotateBoxes();
}
function rotateBoxes() {
    boxesVars.boxes.removeClass('hover');
    boxesVars.boxes.eq(boxesVars.activeBoxIndex).addClass('hover');
    boxesVars.activeBoxIndex++;
    if (boxesVars.activeBoxIndex > boxesVars.maxBoxIndex)
        boxesVars.activeBoxIndex = 0;
}

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


/*
 flippers_cards.click(function(e) {
 $(this).css('transform', 'rotateY(180deg)');
 });
 */
