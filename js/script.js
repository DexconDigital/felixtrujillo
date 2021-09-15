// Inicializar carousel de aliados

$(function () {

    "use strict";

    // Menu principal
    // Header shrink while page scroll
    adjustHeader(pagina);
    
    $(window).on('scroll', function () {
        adjustHeader(pagina);
    });

    if(page == false){
        var alturamenu = document.getElementById('menu').offsetHeight;
        $('.espacio-menu').css('height', alturamenu);
    }

    function adjustHeader(page)
    {  
        if(page){
            var windowWidth = $(window).width();
            if(windowWidth > 992) {
                if ($(document).scrollTop() >= 100) {
                        $('#menu').removeClass('menu-transparent');
                        $('.logo img').attr('src', 'images/Logo.png');
                }
                else {
                    $('#menu').addClass('menu-transparent');
                    
                    $('.logo img').attr('src', 'images/Logo_blanco.png');
                }
            }else{
                $('#menu').removeClass('menu-transparent');
                $('#menu').removeClass('fixed-top');
                $('.logo img').attr('src', 'images/Logo.png');
            }
        }else{
            var alturamenu = document.getElementById('menu').offsetHeight;
            $('.espacio-menu').css('height', alturamenu);
            $('#menu').removeClass('menu-transparent');
            $('.logo img').attr('src', 'images/Logo.png');
        }
        
    }

    // WOW animation library initialization
    var wow = new WOW(
        {
            animateClass: 'animated',
            offset: 100,
            mobile: false
        }
    );
    wow.init();

    // Banner slider
    //Function to animate slider captions
    function doAnimations(elems) {
        //Cache the animationend event in a variable
        var animEndEv = 'webkitAnimationEnd animationend';
        elems.each(function () {
            var $this = $(this),
                $animationType = $this.data('animation');
            $this.addClass($animationType).one(animEndEv, function () {
                $this.removeClass($animationType);
            });
        });
    }

    //Variables on page load
    var $myCarousel = $('#carouselExampleIndicators');
    var $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
    //Initialize carousel
    $myCarousel.carousel();

    //Animate captions in first slide on page load
    doAnimations($firstAnimatingElems);
    //Pause carousel
    $myCarousel.carousel('pause');
    //Other slides to be animated on carousel slide event
    $myCarousel.on('slide.bs.carousel', function (e) {
        var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
        doAnimations($animatingElems);
    });

    $('#slide_hero').carousel({
        interval: 3000,
        pause: "false"
    });
    $('.subir').click(function () {
        $('body, html').animate({
            scrollTop: '0px'
        }, 500);
    });

    // Boton subir
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.subir').fadeIn(500);
        } else {
            $('.subir').fadeOut(500);
        }
    });

    // Cambio Menu
    var altura = $('.body').height() / 2;

    $('.botonF1').click(function () {
        if ($('.btn1').hasClass('animacionVer')) {
            $('.btn1').removeClass('animacionVer');
        } else {
            $('.btn1').addClass('animacionVer');
        }
    })

    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 30,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
});



