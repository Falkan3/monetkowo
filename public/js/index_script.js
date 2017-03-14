$('nav .navbar-brand img').addClass('logo-invisible');

/* DRAWING SVG */

/*
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
 */

//----------------------------------------

var tableHeaders = $('.table-container .table-show-on-mobile-contents .name');
//Init table on mobile
function initTableMobile() {
    $('.table-container .table-show-on-mobile-contents .table-mobile-contents').hide();
}

var circles = $('.circles .circle');

$(document).ready(function (e) {
    initTableMobile();
    rescaleCircles();
    resize_flippers();
});

$(window).on("load", function () {
    boxes_init();
    resizeContents();
});

$(window).on('resize', function (e) {
    rescaleCircles();
    resizeContents();
});

$(window).scroll(function () {
    if (boxesVars.active == false && $(window).scrollTop() > boxesVars.initiator) {
        boxesVars.active = true;
        rotateBoxesInit();
    }
});

tableHeaders.on('click', function (e) {
    console.log('clicked ' + $(this).find('p').text());
    $(this).parent().find('.table-mobile-contents').slideToggle();
});

function rescaleCircles() {
    circles.each(function () {
        if ($(this).height() > 120)
            $(this).css('width', $(this).height());
        else
            $(this).css({'width': 120 + 'px', 'height': 120 + 'px'});
    });
}

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
    var modifier = 0.5;
    if (viewport().width < 992) {
        modifier = 1;
    }
    flippers.each(function (e) {
        $(this).height($(this).width() * modifier * 0.833);
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
    'initiator': $('#page_cards').offset().top - $('#page_cards').outerHeight() * 0.8,
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
    boxesVars.timer.stop();
    boxesVars.timer = new Interval(rotateBoxes, 3000);
    boxesVars.timer.start();
    rotateBoxes();
}
function rotateBoxes() {
    boxesVars.boxes.removeClass('hover');
    boxesVars.boxes.eq(boxesVars.activeBoxIndex).addClass('hover');
    boxesVars.activeBoxIndex++;
    if (boxesVars.activeBoxIndex > boxesVars.maxBoxIndex)
        boxesVars.activeBoxIndex = 0;
}