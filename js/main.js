// All custom codes with comment

$(document).ready(function () {
    $(".jd_home_service_box").mouseover(function () {});

    //testimonial effect
    $(".test-item-thumbs img").click(function () {
        $(".test-item-thumbs img").css({
            "box-shadow": "none",
            "filter": "grayscale(1)"
        });
        $(this).css({
            "box-shadow": "rgb(227, 84, 53) 0px 12px 36px -4px",
            "filter": "grayscale(0)"
        });
        var gettest = $(this).attr("set-test");
        $(".test-items div").hide();
        $(gettest).fadeIn();
    })

    //set pageheader padding
    var navheight = $(".navbar").outerHeight();
    $("#section-page-header").css("padding-top", navheight);

    //contact form field effect
    $(".contact-field").focusin(function () {
        $(this).parentsUntil("form").find("p").addClass("form-active");
        $(".contact-field").css("border", "1px solid #bbb");
        $(this).css("border", "1px solid #E25031");
    });
    $(".contact-field").focusout(function () {
        $(".contact-field").each(function () {
            var checkval = $(this).val();
            if (checkval != "") {
                $(this).parentsUntil("form").find("p").css("color", "#999");
            } else {
                $(this).parentsUntil("form").find("p").removeClass("form-active");
                $(".contact-field").css("border", "1px solid #bbb");
            }
        });
    });

    $(".social-links ul li a").mouseover(function () {
        var getcolor = $(this).attr("setcolor");
        $(this).addClass(getcolor);
        $(".footer2").css("background", "#333");
    });
    $(".social-links ul li a").mouseout(function () {
        var getcolor = $(this).attr("setcolor");
        $(this).removeClass(getcolor);
        $(".footer2").css("background", "#DA8468");
    });



    //    gallery scroll effect
    var winwidth = $(window).outerWidth();
    $(".scroll-outer").mousemove(function (evt) {
        var distleft = evt.pageX;
        var getwinpercent = (distleft * 100) / winwidth;
        var bodywidth = $(".scroll-outer ul").outerWidth();
        var remainingwidth = bodywidth - winwidth;
        var getscrollwidth = (remainingwidth * getwinpercent) / 100;
        $(".scroll-outer ul").css("left", -getscrollwidth);

        $("#remainingwidth").text(bodywidth);
        $("#getbodywidth").text(bodywidth);
        $("#getleft").text(distleft);
        $("#getwinpercent").text(getwinpercent);
        $("#getscrollwidth").text(getscrollwidth);
    });

    $(".menu-serv-link a").mouseover(function () {
        var getserv = $(this).attr("setserv");
        $(".menu-serv-img").hide();
        $(getserv).fadeIn();
        getimg = $(getserv).find("img").attr("src");
        var concatimg = "url(" + getimg + ")";
        $(".mega-drop").css({
            "background": concatimg,
            "background-repeat": "no-repeat",
            "background-size": "cover"
        });
    });

    $("#service").click(function () {
        $(".mega-drop").toggle();
    });

});


$(window).scroll(function () {
    var headscroll = $(window).scrollTop();

    if (headscroll > 25) {
        $(".navbar").addClass("scrollFixed").css("padding", "0");
        $(".navbar .navbar-nav li a").css("color", "black");
    } else {
        $(".navbar").removeClass("scrollFixed").css("padding", "25px 0");
        $(".navbar .navbar-nav li a").css("color", "white");
    }
});
