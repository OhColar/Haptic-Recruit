$( document ).ready(function() {
    
    // SET BROWSER
    var doc = document.documentElement;
    doc.setAttribute('data-useragent', navigator.userAgent);

    // Small Header on on scroll down
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('header').outerHeight();

    $(window).scroll(function(event){
        didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    
    function hasScrolled() {
        var st = $(this).scrollTop();
        
        // Make sure they scroll more than delta
        if(Math.abs(lastScrollTop - st) <= delta)
            return;
        
        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight){
            // Scroll Down
            $('header').removeClass('head-up').addClass('scrolled');
        }
        
        lastScrollTop = st;
    }

    var distance = $('.hero').offset().top,
    $window = $(window);
    
    $window.scroll(function() {
        if ( $window.scrollTop() == distance ) {
            // Your div has reached the top
            $('header').removeClass('scrolled').addClass('head-up');
        } 
    });

    if ( $window.scrollTop() !== distance ) {
        // Your div has reached the top
        $('header').removeClass('head-up').addClass('scrolled');
    } 

    // Question Form JS

    $('.questionFormCandidate .question a.btn').click(function() {
        // get question number
        var goTo = $(this).attr("data-goTo");
        //alert(goTo);

        $(this).parent().fadeOut("fast");
        
         setTimeout(function(){
        //$("#message-green").fadeOut("slow");
        $('#q' + goTo).fadeIn("fast");
        },300);

        return false;
    });

    $('.questionFormClient .question a.btn').click(function() {
        // get question number
        var goTo = $(this).attr("data-goTo");
        //alert(goTo);

        $(this).parent().fadeOut("fast");
        
         setTimeout(function(){
        //$("#message-green").fadeOut("slow");
         $('#client_q' + goTo).fadeIn("fast");
        },300);

        return false;
    });

    $('.questionFormRefer .question a.btn').click(function() {
        // get question number
        var goTo = $(this).attr("data-goTo");
        //alert(goTo);

        $(this).parent().fadeOut("fast");
        
         setTimeout(function(){
        //$("#message-green").fadeOut("slow");
         $('#refer_q' + goTo).fadeIn("fast");
        },300);

        return false;
    });

    // Close PopUp
    $('#closePopup, .finishBtn').click(function() {

       $('.popup form').trigger("reset");

       $('.popup').fadeOut('fast');
       $('.question').fadeOut('fast');

       $('.questionEnd').fadeOut('fast');
       $('#closePopup').fadeOut('fast');
    });

    // Review PopUp
    $('.reviewPopup').click(function() {

       $('.questionEnd').fadeOut('fast');
      
        setTimeout(function(){
        //$("#message-green").fadeOut("slow");
         $('#q1').fadeIn("fast");
        },300);
       
    });

    $('.questionFormClient .reviewPopup').click(function() {

       $('.questionEnd').fadeOut('fast');
      
        setTimeout(function(){
        //$("#message-green").fadeOut("slow");
         $('#client_q1').fadeIn("fast");
        },300);
       
    });

    $('.questionFormRefer .reviewPopup').click(function() {

       $('.questionEnd').fadeOut('fast');
      
        setTimeout(function(){
        //$("#message-green").fadeOut("slow");
         $('#refer_q1').fadeIn("fast");
        },300);
       
    });

    // Navigation
    $('.menuBox').click(function() {

        $('#mask').fadeIn('fast');
        setTimeout(
          function() 
          {
            //do something special
                $('#navigation').fadeIn('1000');
          }, 300);
        return false;

    });

    $('#closeNav').click(function() {

        $('#navigation').fadeOut('1000');
        setTimeout(
          function() 
          {
        $('#mask').fadeOut('fast');
            //do something special
          }, 300);
        return false;

    });


    $('#coffee_header').click(function() {

        $('#coffee_popup').toggleClass('show_popup');

    }); 


    $('#important_message').click(function() {

        $('#important_message_pop').css('display','flex');

    });

    $('#important_message_pop').click(function() {

        $('#important_message_pop').css('display','none');

    });

     // Show Refer Form
    $( "#tabNav > li a" ).click(function() {
        $('#tabNav > li').removeClass('active');
        $('.tabBox').removeClass('active');
        $(this).parent().addClass('active');
        
        var tabID = '#' + $(this).attr('data-id');
        $(tabID).addClass('active');

        return false;
    });
    

    // Remove Map PopUp
    $( "#mapMask" ).click(function() {
        var elem = document.getElementById("markerPop");
        elem.parentElement.removeChild(elem);

        $('#mapMask').fadeOut('fast');
    });


    // Show Candidate Form
    $( "#showCandidate" ).click(function() {

        $('.questionFormCandidate').fadeIn('fast');
        $('#closePopup').fadeIn('fast');
        $('.questionFormCandidate #q1').fadeIn("fast");

        return false;
    });

    // Show Client Form
    $( "#showClient" ).click(function() {

        $('.questionFormClient').fadeIn('fast');
        $('#closePopup').fadeIn('fast');
        $('.questionFormClient #client_q1').fadeIn("fast");


        return false;
    });

    // Show Refer Form
    $( "#showRefer" ).click(function() {

        $('.questionFormRefer').fadeIn('fast');
        $('#closePopup').fadeIn('fast');
        $('.questionFormRefer #refer_q1').fadeIn("fast");


        return false;
    });

    var scrollTo = getParameterByName('scrollTo');
      if(scrollTo!=''){
          $('html, body').animate({
             scrollTop: $("#"+scrollTo).offset().top
           }, 2700);
      }


    // Map Hover Affects

    $("#hubNav li a").hover(function(){

    var location = $(this).attr("data-location");
    var mapLocation = '.map' + location;
    
    $(mapLocation + ' .circle').css("background-color", "#efcd15");
    $('.mapMarker .ringring').css("border-color", "transparent");
    $(mapLocation + ' .ringring').css("border-color", "#efcd15");
    
    }, function(){

    var location = $(this).attr("data-location");
    var mapLocation = '.map' + location;

    $(mapLocation + ' .circle').css("background-color", "#e75118");
    $('.mapMarker .ringring').css("border-color", "#e75118");
    $(mapLocation + ' .ringring').css("border-color", "#e75118");

});

$("#mapContainer .mapMarker").hover(function(){

    var mapMarker = $(this).attr("data-mapLocation");
    var pinLocation = '.pin' + mapMarker;
    
    $('.mapMarker .ringring').css("border-color", "transparent");
    $(pinLocation).css("background-color", "#e75118");
    
    }, function(){

    var mapMarker = $(this).attr("data-mapLocation");
    var pinLocation = '.pin' + mapMarker;

    $(pinLocation).css("background-color", "inherit");
    $('.mapMarker .ringring').css("border-color", "#e75118");
    $(mapLocation + ' .ringring').css("border-color", "#e75118");

});

// Read More Hubs
$('.read_more a').click(function() {
    $(this).parent().next(".more_hub").slideDown('slow');
    $(this).parent().css('display', 'none');
    return false;
});
    

});


function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

// Map Hub Nav
function checkOffset() {
    if($('#hubNav').offset().top + $('#hubNav').height() 
                                           >= $('.aboutBanner').offset().top - 10)
        $('#hubNav').css('position', 'absolute');
    if($(document).scrollTop() + window.innerHeight < $('.aboutBanner').offset().top)
        $('#hubNav').css('position', 'fixed'); // restore when you scroll up
}

$(document).scroll(function() {
    checkOffset();
});


// SOCIAL SHARE
$("#share_article").jsSocials({
    shares: ["email", "twitter", "facebook", "linkedin", "whatsapp"]
});

// Jobs Carousel
$('#jobs_slider').lightSlider({
        item:3,
        loop:true,
        slideMove:2,
        easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
        speed:600,
        auto: true,
        controls: false,
        keyPress: true,
        slideMargin: 25,
        pause: 6000,
        responsive : [
            {
                breakpoint:1400,
                settings: {
                    item:3,
                    slideMove:1,
                    slideMargin:25,
                  }
            },
            {
                breakpoint:860,
                settings: {
                    item:2,
                    slideMove:1
                  }
            },
            {
                breakpoint:660,
                settings: {
                    item:1,
                    slideMove:1
                  }
            }
        ],
        onSliderLoad: function (el) {

        var maxHeight = 0,
            container = $(el),
            children = container.children();

        children.each(function () {
            var childHeight = $(this).height();
            if (childHeight > maxHeight) {
                maxHeight = childHeight;
            }
        });
        container.height(maxHeight);
    }
    });  

// Testimonial Carousel
$('#testimonials').lightSlider({
        item:1,
        loop:true,
        slideMove:2,
        easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
        speed:600,
        auto: true,
        controls: false,
        keyPress: true,
        slideMargin: 25,
        pause: 8000,
        adaptiveHeight: true
    });  

// Smooth Scrolling
    $('a[href*="#scroll"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
    

function isOnScreen(elem) {
    // if the element doesn't exist, abort
    if( elem.length == 0 ) {
        return;
    }
    var $window = jQuery(window)
    var viewport_top = $window.scrollTop()
    var viewport_height = $window.height()
    var viewport_bottom = viewport_top + viewport_height
    var $elem = jQuery(elem)
    var top = $elem.offset().top
    var height = $elem.height()
    var bottom = top + height

    return (top >= viewport_top && top < viewport_bottom) ||
    (bottom > viewport_top && bottom <= viewport_bottom) ||
    (height > viewport_height && top <= viewport_top && bottom >= viewport_bottom)
}

jQuery( document ).ready( function() {
    window.addEventListener('scroll', function(e) {
        if( isOnScreen( jQuery( '#area_anchor' ) ) ) { /* Pass element id/class you want to check */
            $('body').addClass('area_show');
        }else {

            //$('body').removeClass('area_show');
        }
    });
});




