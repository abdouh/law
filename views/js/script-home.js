// -------------------------------------------------------------
// INDEX
// -------------------------------------------------------------
//	1. Google Map Customization
//	2. WOW setup
//	3. Timer setup
//	4. progress-bar activator
//	5. Scroll Menu / Navigation Scroll
//	6. Collapse menu on click (only for mobile)
//	7. Accordion
//	8. bxSlider
// -------------------------------------------------------------
// End INDEX
// -------------------------------------------------------------



// -------------------------------------------------------------
// Google Map Customization
// -------------------------------------------------------------

jQuery(function ($) {

    'use strict';

    var map;

    map = new GMaps({
        el: '#map-wrapper',
        lat: 41.886489,
        lng: -87.63458789999999,
        scrollwheel: false,
        zoom: 16,
        zoomControl: true,
        panControl: true,
        streetViewControl: true,
        mapTypeControl: false,
        overviewMapControl: false,
        clickable: false,
        click: function () {
            if (isInfoWindowOpen(map.markers[0].infoWindow)) {
            } else {
                (map.markers[0].infoWindow).open(map.map, map.markers[0]);
            }
        }
    });
    var address = "211 W Upper Wacker Dr Chicago, IL 60606 USA";
    GMaps.geocode({
        address: address,
        callback: function (results, status) {
            if (status == 'OK') {
                var latlng = results[0].geometry.location;
            }
        }
    });

    var infoWin = new google.maps.InfoWindow();

    var image = '';
    map.addMarker({
        lat: 41.886489,
        lng: -87.63458789999999,
        //icon: image,
        clickable: true,
        title: 'Rowmaker Law',
        animation: google.maps.Animation.DROP,
        verticalAlign: 'bottom',
        horizontalAlign: 'center',
        backgroundColor: '#d3cfcf',
        infoWindow: {
            content: '<div style="color:#000000;">\n\
<h4>The Romaker Law Firm</h4>\n\
\n\
<a target="_blank" href="https://www.google.com/maps?q=211+W+Upper+Wacker+Dr+Chicago,+IL+60606+USA">\n\
<h5>211 W Upper Wacker Dr Chicago, IL 60606 USA</h5></a>\n\
<h5>Phone: (312) 377-7000</h5>\n\
<h5>Fax: (312) 345-1940</h5>\n\
</div>'
        }
    });

    (map.markers[0].infoWindow).open(map.map, map.markers[0]);

    function isInfoWindowOpen(infoWindow) {
        var map = infoWindow.getMap();
        return (map !== null && typeof map !== "undefined");
    }

    var styles = [
    {
        "featureType": "road",
        "stylers": [
        {
            "color": "#ffffff"
        }
        ]
    }, {
        "featureType": "water",
        "stylers": [
        {
            "color": "#99b3cc"
        }
        ]
    }, {
        "featureType": "landscape",
        "stylers": [
        {
            "color": "#f2efe9"
        }
        ]
    }, {
        "elementType": "labels.text.fill",
        "stylers": [
        {
            "color": "#d3cfcf"
        }
        ]
    }, {
        "featureType": "poi",
        "stylers": [
        {
            "color": "#ded2ac"
        }
        ]
    }, {
        "elementType": "labels.text",
        "stylers": [
        {
            "saturation": 1
        },
        {
            "weight": 0.1
        },
        {
            "color": "#000000"
        }
        ]
    }

    ];

    map.addStyle({
        styledMapName: "Styled Map",
        styles: styles,
        mapTypeId: "map_style"
    });

    map.setStyle("map_style");
}());




// -------------------------------------------------------------
// Timer setup
// -------------------------------------------------------------


$('#achievement').bind('inview', function (event, visible, visiblePartX, visiblePartY) {
    if (visible) {
        $(this).find('.timer').each(function () {
            var $this = $(this);
            $({
                Counter: 0
            }).animate({
                Counter: $this.text()
            }, {
                duration: 2000,
                easing: 'swing',
                step: function () {
                    $this.text(Math.ceil(this.Counter));
                }
            });
        });
        $(this).unbind('inview');
    }
});


// -------------------------------------------------------------
// progress-bar activator
// -------------------------------------------------------------

$('#about-our-firm').bind('inview', function (event, visible, visiblePartX, visiblePartY) {
    if (visible) {
        $(this).find('.progress-bar').each(function () {
            var $this = $(this);
            var width = $this.text();
            $(this).animate({
                width: width,
                duration: 1000
            });
            $({
                Counter: 0
            }).animate({
                Counter: $this.text()
            }, {
                duration: 6000,
                easing: 'swing',
                step: function () {
                    $this.text(Math.ceil(this.Counter) + '%');
                }
            });
        });
        $(this).unbind('inview');
    }
});



// -------------------------------------------------------------
// Scroll Menu / Navigation Scroll
// -------------------------------------------------------------


(function () {

    $(window).scroll(function (event) {
        Scroll();
    });

    $('.navbar-collapse ul li a').click(function () {
        $('html, body').animate({
            scrollTop: $(this.hash).offset().top - 65
        }, 1000);
        return false;
    });

    // User define function
    function Scroll() {
        var contentTop = [];
        var contentBottom = [];
        var winTop = $(window).scrollTop();
        var rangeTop = 200;
        var rangeBottom = 500;
        $('.navbar-collapse').find('.scroll a').each(function () {
            contentTop.push($($(this).attr('href')).offset().top);
            contentBottom.push($($(this).attr('href')).offset().top + $($(this).attr('href')).height());
        })
        $.each(contentTop, function (i) {
            if (winTop > contentTop[i] - rangeTop) {
                $('.navbar-collapse li.scroll')
                .removeClass('active')
                .eq(i).addClass('active');
            }
        })

    }
    
}());



// -------------------------------------------------------------
// Collapse menu on click (only for mobile)
// -------------------------------------------------------------

$(function () {
    $(".navbar-collapse a").click(function () {
        $(".navbar-collapse").removeClass("in");
        $(".navbar-collapse").css({
            'height': '0px'
        });
    });
}());




// -------------------------------------------------------------
// Accordion
// -------------------------------------------------------------

(function () {
    $('.collapse').on('show.bs.collapse', function () {
        var id = $(this).attr('id');
        $('a[href="#' + id + '"]').closest('.panel-heading').addClass('active-faq');
        $('a[href="#' + id + '"] .panel-title span').html('<i class="fa fa-angle-down"></i>');
    });

    $('.collapse').on('hide.bs.collapse', function () {
        var id = $(this).attr('id');
        $('a[href="#' + id + '"]').closest('.panel-heading').removeClass('active-faq');
        $('a[href="#' + id + '"] .panel-title span').html('<i class="fa fa-angle-right"></i>');
    });
}());



// -------------------------------------------------------------
// Contact form
// -------------------------------------------------------------

//Ajax contact

$(function () {
    $('#contact-form').submit(function () {
        $('html, body').animate({
            scrollTop: $("#how-to-reach-us").offset().top
        }, 2000);
        $('.show-on-error').hide();
        $('.show-on-success').show();
        $('.show-on-success').html($('#contact_processing').html());
        var name = $('#name').val();
        var email = $('#email').val();
        var subject = $('#subject').val();
        var message = $('#message').val();
        var captcha = $('#captcha').val();
        $.ajax({
            type: 'POST',
            url: $('#contact_link').html(),
            data: {
                name: name,
                email: email,
                subject: subject,
                message: message,
                captcha: captcha
            },
            success: function (incoming) {
                $('.show-on-success').html('');
                $('.show-on-error').html('');
                document.getElementById('captcha_img').src = '/index/captcha?' + Math.random();
                $('input[name="captcha"]').val('');
                console.log(incoming);
                var data = jQuery.parseJSON(incoming);
                if (data.operation == 1) {
                    $('#contact-form').trigger('reset');
                    $('.show-on-error').hide();
                    $('.show-on-success').html($('#contact_success').html());
                    $('.show-on-success').show("slow");
                } else {
                    $('.show-on-success').hide();
                    $('.show-on-error').html(data.error);
                    $('.show-on-error').show("slow");
                }
            }
        });
        return false;
    });
})

// -------------------------------------------------------------
// bxSlider
// -------------------------------------------------------------
$('.slider').bxSlider({
    auto: true,
    speed: 1000,
    pause: 9000,
    touchEnabled: false,
    controls: false,
    onSlideAfter: function (currentSlideNumber, totalSlideQty, currentSlideHtmlObject) {
        console.log(currentSlideHtmlObject);
        $('.active-slide').removeClass('active-slide');
        $('.slider>.item').eq(currentSlideHtmlObject + 1).addClass('active-slide')
    },
    onSliderLoad: function () {
        $('.slider>.item').eq(1).addClass('active-slide')
    }
});


// --------------------------
// LOGO WIDTH
// --------------------------

var wid = $(window).width();

if(wid <580){
    $('#logo-int').attr('width','250px');
}