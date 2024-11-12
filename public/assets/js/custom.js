$(function () {
    "use strict";

    // Display current year
    $('#year').text(new Date().getFullYear());

    // Initiate Preloader
    $("#preloader").delay(100).fadeOut('slow');

    $('.btn-mfp-close').click(function () {
        $('.mfp-close').trigger('click');
    });

    const bolbyPopup = function () {
        $('.work-content').magnificPopup({
            type: 'inline',
            fixedContentPos: true,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: false,
            preloader: true,
            midClick: true,
            removalDelay: 0,
            mainClass: 'my-mfp-zoom-in'
        });
    };

    bolbyPopup();

    // Mobile Menu Toggle
    $('.menu-icon button').on('click', function () {
        $('header.desktop-header-1, main.content, header.mobile-header-1').toggleClass('open');
    });

    $('main.content').on('click', function () {
        $('header.desktop-header-1, main.content, header.mobile-header-1').removeClass('open');
    });

    $('.vertical-menu li a').on('click', function () {
        $('header.desktop-header-1, main.content, header.mobile-header-1').removeClass('open');
    });

    $('.menu-icon button').on('click', function () {
        $('header.desktop-header-2, main.content-2, header.mobile-header-2').toggleClass('open');
    });

    $('main.content-2').on('click', function () {
        $('header.desktop-header-2, main.content-2, header.mobile-header-2').removeClass('open');
    });

    $('.vertical-menu li a').on('click', function () {
        $('header.desktop-header-2, main.content-2, header.mobile-header-2').removeClass('open');
    });

    // Add (nav-link) class to main menu.
    $('.vertical-menu li a').addClass('nav-link');

    // Spacer with Data Attribute
    var list = document.getElementsByClassName('spacer');

    for (var i = 0; i < list.length; i++) {
        var size = list[i].getAttribute('data-height');
        list[i].style.height = "" + size + "px";
    }

    // Background Color with Data Attribute
    var list = document.getElementsByClassName('data-background');

    for (var i = 0; i < list.length; i++) {
        var color = list[i].getAttribute('data-color');
        list[i].style.backgroundColor = "" + color + "";
    }

    // Scroll to Top
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 350) {
            $('#return-to-top').fadeIn(200);
        } else {
            $('#return-to-top').fadeOut(200);
        }
    });

    $('#return-to-top').on('click', function (event) {
        event.preventDefault();
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    });
});