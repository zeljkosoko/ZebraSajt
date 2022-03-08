// When the user scrolls down 400px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction(){
    if(document.body.scrollTop > 400 || document.documentElement.scrollTop > 400){
        document.getElementById("button").classList.add('show');
    }
    else{
        document.getElementById("button").classList.remove('show');
    }
}

$(document).ready(function(){
    // When the user clicks on the button, scroll to the top of the document
    $("#button").click(function(event){
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, 500);
        return false;
    });

    // animation with more options - write us
    $('.more-options .pisite-nam').click(function(){
        $('.write-us').slideToggle(500, 'swing');
    });
    $('.write-us .exit').click(function(){
        $('.write-us').slideToggle(500, 'swing');
    });

    // When the user clicks on the button on all enquipments, scroll to the top of the div
    $(".1").click(function (){
        $('html, body').animate({
            scrollTop: $(".1-1").offset().top - 50
        }, 900);
    });
    $(".2").click(function (){
        $('html, body').animate({
            scrollTop: $(".2-1").offset().top - 50
        }, 900);
    });
    $(".3").click(function (){
        $('html, body').animate({
            scrollTop: $(".3-1").offset().top - 50
        }, 900);
    });
    $(".4").click(function (){
        $('html, body').animate({
            scrollTop: $(".4-1").offset().top - 50
        }, 900);
    });
    $(".5").click(function (){
        $('html, body').animate({
            scrollTop: $(".5-1").offset().top - 50
        }, 900);
    });
    $(".6").click(function (){
        $('html, body').animate({
            scrollTop: $(".6-1").offset().top - 50
        }, 900);
    });
    $(".7").click(function (){
        $('html, body').animate({
            scrollTop: $(".7-1").offset().top - 50
        }, 900);
    });
    $(".8").click(function (){
        $('html, body').animate({
            scrollTop: $(".8-1").offset().top - 50
        }, 900);
    });

    // animation with main manu
    $('header .regular-mode').hover(function(){
        $(this).children('ul').stop(true, false, true).slideToggle(200, 'linear');
    });

    // animation with main manu in responsive mode
    $('.responsive-menu .manu-responsive').click(function(){
        $('.main-menu-responsive').stop(true, false, true).slideToggle(200, 'linear');
    });
    $('ul .has-children').click(function(){
        $(this).children('ul').stop(true, false, true).slideToggle(200, 'linear');
        $(this).siblings().children('ul').stop(true, false, true).slideUp(200, 'linear');
    });

    // exit from contact message
    $('.all-message div img').click(function(){
        $('.all-message').css('display','none');
    });
});

// animation with loader image
$(window).bind("load", function(){
    $('body').addClass('loaded');
});

//contact form
$(function(){
    $('#contactUs').validate({
        rules:{
            name:{
                required: true
            },
            email:{
                required: true,
                email: true
            },
            subject:{
                required: true
            },
            comments:{
                required: true,
                maxlength: 2000
            },
            sum:{
                required: true
            }
        },
        messages:{
            name:{
                required: "Upišite Vaše ime!"
            },
            email:{
                required: "Upišite e-mail adresu!",
                email: "Netačna e-mail adresa!"
            },
            subject:{
                required: "Upišite temu!"
            },
            comments:{
                required: "Upišite poruku!",
                maxlength: "Najviše možete uneti 2000 karaktera!"
            },
            sum:{
                required: "Upišite sumu!"
            }
        }
    });
});