/* jshint esversion: 6 */
/* global $, document, Image, window, setTimeout, setInterval, clearInterval */

$(document).ready(() => {
    "use strict";

    /************** Nav autoscroller **************/

    $.fn.scrollTo = function () {
        return this.each(function () {
            //Both "html" and "body" required for browser compatibility
            $("html, body").stop().animate({
                scrollTop: $(this).offset().top
            }, 1500, "easeInOutQuart");
        });
    };

    $(".autoscroll").click(function (e) {
        e.preventDefault();
        let anchor = $(this).attr("href");
        $(anchor).scrollTo();
    });

    /****** nav--list Hamburger slideToggle() ******/

    $(".nav--hamburger").click(function () {
        $(".nav--list").stop().slideToggle(350);
    });

    $(".nav--logo, .nav--list li").click(function () {
        if (window.matchMedia("(max-width: 767px)").matches) {
            $(".nav--list").stop().delay(550).slideUp(500);
        }
    });

    /********* Navbar-related scrolling functions *********/

    $(window).scroll(function () {
        let windowTopLine = $(window).scrollTop();

        /*********** Nav size change on scroll ***********/
        if (windowTopLine > 150) {
            $("nav").addClass("is-small");
        } else {
            $("nav").removeClass("is-small");
        }

        /*********** Nav section highlighting ************/
        $("header, body>section").each(function () {
            let sectionTopLine = $(this).offset().top - 60;
            let sectionBottomLine = $(this).offset().top + $(this).innerHeight() - 60;
            let thisSectionID = "#" + $(this).attr("id");

            let $myNavAnchor = $(`[href="${thisSectionID}"]`);

            //If the object is  visible        
            if (sectionTopLine < windowTopLine && windowTopLine < sectionBottomLine) {
                $myNavAnchor.addClass("highlighted");
            } else {
                $myNavAnchor.removeClass("highlighted");
            }
        });

    });

    /********* Privacy Policy Modal *********/

    $(".privacy--button__open").click(function (e) {
        e.preventDefault();
        $("#privacy-policy").toggleClass("hidden");
    });

    $(".privacy--button__close, .privacy--close-icon").click(function() {
        $("#privacy-policy").addClass("hidden");
    });

});