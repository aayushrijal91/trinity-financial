// ie: Engine.ui.misc();
jQuery(function ($) {
    "use strict";
    var Engine = {
        ui: {
            misc: function () {
                AOS.init({
                    duration: 1500,
                });
                $(() => {
                    $('#close-slidenav').on('click', function () {
                        $('.slide-nav').removeClass('nav-open');
                    });

                    $('#triggerSlideNav').on('click', function () {
                        $('.slide-nav').addClass('nav-open');
                    });

                    $(".accordion-head").on('click', function () {
                        $(".accordion-head").removeClass("active");
                        $(this).addClass('active');

                        if ($('.accordion-body').is(':visible')) {
                            $(".accordion-body").slideUp(300);
                        }
                        if ($(this).next(".accordion-body").is(':visible')) {
                            $(this).next(".accordion-body").slideUp(300);
                        } else {
                            $(this).next(".accordion-body").slideDown(300);
                        }

                        $(".accordion-head").find('.plusminus').html('<svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.10449 13.4713V0.988392H7.58816V13.4713H5.10449ZM0.109464 8.46709V5.98342H12.5924V8.46709H0.109464Z" fill="white" /></svg>');
                        $(".accordion-head.active").find('.plusminus').html('<svg width="9" height="4" viewBox="0 0 9 4" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.79759 0.950905V3.34224H0.414062V0.950905H8.79759Z" fill="white" /></svg>');
                    });

                });
            }, // end misc
        }, // end ui
        //utils: {

        //}, // end utils
    };
    Engine.ui.misc();
    //Engine.utils.sliders();
});

jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 1000) {
        jQuery('#back-top').fadeIn();
        jQuery("#back-top").addClass('active');
    } else {
        jQuery('#back-top').fadeOut();
        jQuery("#back-top").removeClass('active');
    }
});
jQuery('#back-top').click(function () {
    jQuery('body,html').animate({
        scrollTop: 0
    }, 1000);
    return false;
});

document.querySelectorAll('a[href="#contact_us_form"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});