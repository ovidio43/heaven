// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }   

     $('.banner_home').bxSlider({
         mode:'horizontal',
         speed:1000,
         auto:false,
         pager:false,
         controls:true
     });
     $('.slider_product').bxSlider({
         mode:'fade',
         speed:1500,
         auto:true,
         pager:false,
         controls:false,
         pause:1
     });
     $('.slider_dres').bxSlider({
         mode:'horizontal',
         speed:1500,
         auto:true,
         pager:false,
         controls:false,
         pause:4000
     });
     $('.video_slider').bxSlider({
         mode:'horizontal',
         minSlides: 3,
         maxSlides: 4,
         slideWidth: 40,
         slideMargin: 4,
         speed:1500,
         auto:false,
         pager:true,
         controls:true,
         pause:4000
     });
     
     //jQuery('.ad-gallery').adGallery({thumb_opacity: 1});
     //var heaven = heaven || new com.as.Heaven();
     ///heaven.setupStudio();
    

}());


