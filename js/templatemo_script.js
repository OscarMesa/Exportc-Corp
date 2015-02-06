var top_menu_height = 0;
jQuery(function ($) {
    $(document).ready(function () {
         // load google map
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
                'callback=initialize';
        document.body.appendChild(script);

        top_menu_height = $('.templatemo-top-menu').height(); 
        // scroll spy to auto active the nav item
        $('body').scrollspy({ target: '#templatemo-nav-bar', offset: 300 });

//          $("html, body").animate({ scrollTop: 0 }, "slow");


        // scroll to top
        $('#btn-back-to-top').click(function (e) {
            e.preventDefault();
            scrollTo('#templatemo-top');
        });

        // scroll to specific id when click on menu
        $('.templatemo-top-menu .navbar-nav a').click(function (e) {
//            $('.navbar-nav li').removeClass('active');
//            $(this).parent().addClass('active');
            e.preventDefault();
            var linkId = $(this).attr('href');
            scrollTo(linkId);
            if ($('.navbar-toggle').is(":visible") == true) {
                $('.navbar-collapse').collapse('toggle');
            }
            setTimeout(function(){
                
            },900);
            $(this).blur();
            return false;
        });

        // to stick navbar on top
        $('.templatemo-top-menu ').stickUp();

        // gallery category
       

        //gallery light box setup
        $('a.colorbox').colorbox({
            rel: function () {
                return $(this).data('group');

            }
        });
    });
});

function initialize() {
    var myLatlng = new google.maps.LatLng(22.9700624, 113.3206309,9);
    var mapOptions = {
        zoom: 12,
        center: myLatlng,
        scrollwheel: false,
        navigationControl: false,
        mapTypeControl: false,
        scaleControl: false,
        draggable: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: 'Import Logistic'
    });
}

// scroll animation 
function scrollTo(selectors)
{
    
    if (!$(selectors).size())
        return;
    var selector_top = $(selectors).offset().top - top_menu_height;
    $('html,body').animate({scrollTop: selector_top}, 'slow');

}