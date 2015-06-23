jQuery(function(){

    /* =================================
     LOADER
     =================================== */

    /* Reize dispatcher */
    var windowWidth = $(window).width();
    var windowHeight = $(window).height();

    $(window).on('resize orientationchange', function(e) {
        if (e.type == 'orientationchange') {
            //iOs 7 hack
            $(window).scrollTop(0);
        }

        var fixedHeight = $(window).height();
        windowWidth = $(window).width();
        windowHeight = fixedHeight;

        checkDeviceType();
        //Function
        $(window).trigger('scroll');
    });


    /* Check device type
     -------------------------------------------------------------------------- */
    var isHandheld = null;
    var isTablet = null;
    var isSmartphone = null;
    var isDesktop = null;

    function checkDeviceType() {
        if (windowWidth >= 1100) {
            isHandheld = isSmartphone = isTablet = false;
            isDesktop = true;
        } else if (windowWidth >= 768) {
            isHandheld = isTablet = true;
            isDesktop = isSmartphone = false;
        } else {
            isHandheld = isSmartphone = true;
            isDesktop = isTablet = false;
        }
    }
    checkDeviceType();


    /*STICKY NAVIGATION*/

    if (windowWidth >= 1000) {
        var headerClass = $('.sticky-navigation');
        var headerHeight = headerClass.height();

        $(window).on('scroll', {
                previousTop: 0
            },
            function() {
                var currentTop = $(window).scrollTop();
                //check if user scrolling up
                if (currentTop < this.previousTop) {
                    //if scrolling up
                    if (currentTop > 0 && headerClass.hasClass('is-fixed')) {
                        headerClass.addClass('is-visible');
                    } else {
                        headerClass.removeClass('is-visible is-fixed');
                    }
                } else {
                    //if scrolling dow
                    headerClass.removeClass('is-visible');
                    if (currentTop > headerHeight && !headerClass.hasClass('is-fixed')) headerClass.addClass('is-fixed');
                }
                this.previousTop = currentTop;
            });

    }




});





var Layout = function(){

    return{
        initScroll: function(option){
            var navHeight= (option["navigationHeight"] != 'undefned') ? option["navigationHeight"] : 0;
            var navHeightMobile= (option["navigationHeightMobile"] != 'undefned') ? option["navigationHeightMobile"] : 0;

            $ = jQuery;
            var scrollAnimationTime = 1200,
                scrollAnimation = 'easeInOutExpo';

            $('a').bind('click',function(event){
                var $anchor = $(this);
                if($anchor.data('toggle')) {
                    return;
                }

                if(typeof $anchor.attr('href') != 'undefined' && $anchor.attr('href').length != 0){

                    var id = $anchor.attr('href').split("#")[1];
                    var targetElement = $('#' + id);

                    var targetPosition = targetElement.offset().top;
                    if(targetElement.length > 0){
                        event.preventDefault();


                        if (Modernizr.mq('only all and (min-width: 767px)')) {
                            if($anchor.offset().top > targetPosition){
                                $('html, body').stop().animate({
                                    scrollTop: targetElement.offset().top - navHeight
                                }, 'slow');
                            } else{
                                $('html, body').stop().animate({
                                    scrollTop: targetElement.offset().top
                                }, 'slow');
                            }
                        } else{
                            $('html, body').stop().animate({
                                scrollTop: targetElement.offset().top - navHeightMobile
                            }, 'slow');
                        }
                    }
                }
            });
        }
    };
}();

$(document).ready(function(){
    Layout.initScroll({
        navigationHeight: 72,
        navigationHeightMobile: 63
    });

    $('body').flowtype({
        minFont   : 13,
        maxFont   : 15,
        fontRatio : 30
    });

    $(document).click(function(e){
        var clickover = $(e.target);
        var _opened = $(".navbar-collapse").hasClass("in");
        if(_opened === true && !clickover.hasClass("navbar-toggle")){
            $("button.navbar-toggle").click();
        }
    });

    $('.menu-name').click(function(e){
        $("button.navbar-toggle").click();
    })


    $(".blog-post").matchHeight();

    //$('.clear-bottom').parent().style('margin-bottom', '0');
    if($('.clear-bottom-item-cell').length != 0){
        $('.clear-bottom-item-cell').parent().css('margin-bottom', '0');
    }



    //Contact checkbox

    $('.contact-check1').click(function(){
        $('input[type=checkbox]').prop('checked',false);
        $('.gchoice_1_1 input').prop('checked',true);
    });

    $('.contact-check2').click(function(){
        $('input[type=checkbox]').prop('checked',false);
        $('.gchoice_1_2 input').prop('checked',true);
    });

    $('.contact-check3').click(function(){
        $('input[type=checkbox]').prop('checked',false);
        $('.gchoice_1_3 input').prop('checked',true);
    });

});