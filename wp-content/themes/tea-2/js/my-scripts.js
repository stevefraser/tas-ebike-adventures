// Avoid `console` errors in browsers that lack a console.
(function () {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

jQuery(document).ready(function ($) {

    //check for IE8 or less and redirect
    var ieUrl = "http://nybble.com.au/oldbrowseralert.html";
    if ( $('html').hasClass('ie6') || $('html').hasClass('ie7') || $('html').hasClass('ie8')) {
        $(location).attr('href',ieUrl);
    }


    $("#status").delay(2000).fadeOut();
        // will fade out the whole DIV that covers the website.
    $("#preloader").delay(2000).fadeOut("slow");



    // SUBMENU ACTIVATION =================================================================================
    $('.stickyNav li').hover(
        function () {
            //show its submenu
            $('ul', this).stop(true, true).slideDown(300);
        },
        function () {
            //hide its submenu
            $('ul', this).stop(true, true).delay(200).slideUp(100);
        }
    );



    $('a.backtotop').on('click', function (e) {
        $('html, body').animate({
            scrollTop: 0
        }, 1000, "easeInOutExpo");
        e.preventDefault();
    });




    // =================================================================================
    // SMOOTH SCROLLING TO LINKS - Remember: Needs .smooth-scroll class added to links
    $('.smooth-scroll').on('click', function (e) {
        e.preventDefault();

        // Get href of link
        //var scrollTarget = $(this).attr('href');
        var scrollTarget = $(this).children().attr('href'); //NOTE the children hack here for Wordpress Menus!

        // Get target position from top of the page
        var targetPosition = $(scrollTarget).offset().top - 100;

        $('html,body').animate({
            scrollTop: targetPosition
        }, 800);

    });




    // =================================================================================
    //STICKY NAV
    var isMobile = {
        Android: function () {
            return navigator.userAgent.match(/Android/i) ? true : false;
        },
        BlackBerry: function () {
            return navigator.userAgent.match(/BlackBerry/i) ? true : false;
        },
        iOS: function () {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i) ? true : false;
        },
        Windows: function () {
            return navigator.userAgent.match(/IEMobile/i) ? true : false;
        },
        any: function () {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Windows());
        }
    };


    // GENERAL CUSTOM SCRIPTS=================================================================================

    // Secret login trigger in footer
    $(".secretLogin").fancybox({
    });

    // Lightbox any <a> element with a class of .lightboxme
    $(".lightboxme").fancybox({
        //maxWidth    : 600,
        padding     :   0
    });

    $("a.image_gallery").fancybox({
        'transitionIn'  :   'elastic',
        'transitionOut' :   'elastic',
        'speedIn'       :   600,
        'speedOut'      :   200,
        'overlayShow'   :   false,
        'padding'       :   0
    });

    // HOME SLIDER
    $('#homeSlider').flexslider({
        directionNav: false, //IMPORTANT FOR MANUAL DIRECTION CONTROLS
    }).flexsliderManualDirectionControls();

    // TESTIMONIALS SLIDER
    $('#testimonial_footer').flexslider({
        directionNav: false, //IMPORTANT FOR MANUAL DIRECTION CONTROLS
    }).flexsliderManualDirectionControls();


    // $(".navSearchIcon").click(function(){
    //     //$("#navSearch").slideToggle();
    //     $("ul.stickyMenu").toggle();
    //     $("#slideSearch").toggleClass("expand");
    //     //$("#navSearch").slideDown();
    // });

    $(".navSearchIcon.desktop").click(function(){
        $("ul.stickyMenu").toggle();
        $("#slideSearch").toggleClass("expand");
    });

    $(".navSearchIcon.mobile").click(function(){
        $(".mobileLogo").toggle();
        $("#slideSearch").toggleClass("expand");
    });

    $(".bookingTab, td.hasTour").click(function(){
        $(".bookingTab, td.hasTour").removeClass("active");
        $(this).addClass("active");
    });


    // $('#choosePlaces').change(function() {
    //     var riders = $(this).val();
    //     $(".placesChosen").html(riders);
    //     $(".placesChosen").attr("data-riders",riders);
    //     $('.step_content.one').slideUp();
    //     $('.step_content.two').slideUp();
    // });

    $('.next_month').click(function(){
        var close = $(this).attr("data-close");
        var open = $(this).attr("data-open");
        $("#" + close).fadeOut();
        $("#" + open).fadeIn(1000);
    });

    $('.previous_month').click(function(){
        var close = $(this).attr("data-close");
        var open = $(this).attr("data-open");
        $("#" + close).fadeOut();
        $("#" + open).fadeIn(1000);
    });


    $(".view_tab").on('click', function (e) {
        $(".view_tab").removeClass('active');
        var show = $(this).data("show");
        $(".view").slideUp();
        $(".view."+show).slideDown();
        $(this).addClass('active');
    });

    // $(".question").click(function(){
    //     $(".answer").slideUp();
    //     $(".question").removeClass("active");
    //     $(this).addClass("active");
    //     $(this).siblings(".answer").slideToggle();
    // });

    // var question = $(".question");
    // question.click(function(){
    //     $(this).next(".answer").slideToggle();
    //     $(this).toggleClass("down");
    // });

    // FAQ Accordion
    var question = $(".question");
    question.click(function(){
        $(this).next(".answer").slideToggle();
        $(this).toggleClass("down");
    });



    $(".step_heading").click(function(){
        //$(this).parent().find("step_content").slideToggle();
        $(this).siblings(".step_content").slideToggle();
    });



    // Add Parameters to YouTube Embeds
    $('iframe[src^="https://www.youtube.com"]').each(function() {
        var url = $(this).attr("src");
        $(this).attr("src",url.substring(0,url.indexOf('?')) + '?autohide=1&modestbranding=1&rel=0&showinfo=0&theme=light');
    });







    // WINDOW.RESIZE =================================================================================
    $(window).resize(function () {

    });



    // WINDOW.SCROLL =================================================================================
    $(window).scroll(function () {

        // Back to top arrow
        if ($(this).scrollTop() > 200) {
            //if (!Modernizr.touch) {
                $('a.backtotop').fadeIn();
                $('.scroll_more').fadeOut();
            //}
        } else {
            //if (!Modernizr.touch) {
                $('a.backtotop').fadeOut();
                $('.scroll_more').fadeIn();
            //}
        }

        // STICKY HEADER ON SCROLL (if not fixed)
        // var header = $(document).scrollTop();
        // if (header > 178) { // Change this number to the amount you want to scroll before the header sticks
        //     $('#fullWidthStickyNav').addClass('sticky');
        // } else {
        //     $('#fullWidthStickyNav').removeClass('sticky');
        // }

    });







});