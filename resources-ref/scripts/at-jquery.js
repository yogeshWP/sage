 jQuery(document).on("scroll", function () {
        var pageTop = jQuery(document).scrollTop();
        var pageBottom = pageTop + jQuery(window).height() / 2;
        var tags = jQuery("[data-animation]");
    
        for (var i = 0; i < tags.length; i++) {
            var tag = tags[i];
    
            if (jQuery(tag).offset().top < pageBottom) {
                var dataAnimation = jQuery(tag).data("animation"); // Retrieve data-animation attribute for current tag
                jQuery(tag).addClass("animated");
                if (dataAnimation === 'zoomOutUp') {
                    jQuery(tag).addClass("zoomOutUp");
                } else if (dataAnimation === 'fadeInUp') {
                    jQuery(tag).addClass("fadeInUp");
                }
            }
        }
    });
jQuery(document).ready(function () {
var sticky_navigation_offset_top =0 ;
    var sticky_navigation = function(){
    var scroll_top = jQuery(window).scrollTop(); 
    if (scroll_top > sticky_navigation_offset_top) { 
        jQuery('body').addClass("fixnav");      
    } else {
        jQuery('body').removeClass("fixnav");
    }}; 
    sticky_navigation(); 
    jQuery(window).scroll(function() { sticky_navigation(); });
          
     
 jQuery('.flhlf-owlslider').owlCarousel({
    loop:true,
    autoplay:false,
    margin:4,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        
        1000:{
            items:1
        }
    }
});

jQuery('.our-team-slider').owlCarousel({
    loop:true,
    autoplay:true,
    margin:20,
    item: 1,
    nav:false,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            loop: false,
            autoplay:false,
        },
        768:{
            items:3
        },
        1023:{
            items:4
        }
    }
});

jQuery('.main-menu').find("li ul").parent().addClass("has-sub");
jQuery('.main-menu').find(".has-sub").prepend('<span class="submenu-button"></span>');

jQuery('.has-sub .submenu-button').on('click', function(e) {
    e.preventDefault();
    jQuery(this).siblings('.sub-menu').slideToggle();
    jQuery(this).parent().toggleClass('sub-menu-open');
});


jQuery('.menu-toggle-btn').on('click', function(e) {
    e.preventDefault();
    jQuery('body').toggleClass("menu-active");
    jQuery(this).toggleClass("menu-opened");
    jQuery('.menu-main-menu-container').toggleClass("menu-show");
});

    var sync1 = jQuery("#bigslide");
    var sync2 = jQuery("#thumb-item");
    var slidesPerPage = 4; //globaly define number of elements per page
    var syncedSecondary = true;

    sync1.owlCarousel({
        items: 1,
        slideSpeed: 2000,
        stagePadding: 80,
        margin:40, 
        nav: true,
        autoplay: false, 
        dots: true,
        loop: true,
        responsiveRefreshRate: 200,
        navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
    }).on('changed.owl.carousel', syncPosition);

    sync2
        .on('initialized.owl.carousel', function() {
            sync2.find(".owl-item").eq(0).addClass("current");
        })
        .owlCarousel({
            items: slidesPerPage,
            dots: true,
                drag:false,
                touchDrag  : false,
     mouseDrag  : false,
            nav: true,
            smartSpeed: 200,
            slideSpeed: 500,
            slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
            responsiveRefreshRate: 100
        }).on('changed.owl.carousel', syncPosition2);

    function syncPosition(el) {
        //if you set loop to false, you have to restore this next line
        //var current = el.item.index;

        //if you disable loop you have to comment this block
        var count = el.item.count - 1;
        var current = Math.round(el.item.index - (el.item.count / 2) - .5);

        if (current < 0) {
            current = count;
        }
        if (current > count) {
            current = 0;
        }

        //end block

        sync2
            .find(".owl-item")
            .removeClass("current")
            .eq(current)
            .addClass("current");
        var onscreen = sync2.find('.owl-item.active').length - 1;
        var start = sync2.find('.owl-item.active').first().index();
        var end = sync2.find('.owl-item.active').last().index();

        if (current > end) {
            sync2.data('owl.carousel').to(current, 100, true);
        }
        if (current < start) {
            sync2.data('owl.carousel').to(current - onscreen, 100, true);
        }
    }

    function syncPosition2(el) {
        if (syncedSecondary) {
            var number = el.item.index;
            sync1.data('owl.carousel').to(number, 100, true);
        }
    }

    sync2.on("click", ".owl-item", function(e) {
        e.preventDefault();
        var number = jQuery(this).index();
        sync1.data('owl.carousel').to(number, 300, true);
    });
 
 jQuery(window).resize(function() {
 showHomeSlider();
});

function showHomeSlider() {
 if (sync1.data("owlCarousel") !== "undefined") {
    if (window.matchMedia('(min-width: 768px)').matches) {
      initialHomeSlider();
    } else {
      destroyHomeSlider();
    }
 }
}
showHomeSlider();

function initialHomeSlider() {
 sync1.addClass("owl-carousel").owlCarousel({
    items: 1,
    loop: true,
    autoplay: false,
    autoplayTimeout: 2000,
    smartSpeed: 1000
 });
}

function destroyHomeSlider() {
 sync1.trigger("destroy.owl.carousel").removeClass("owl-carousel");
}


jQuery('.play-video').on('click', function(e) {
   var videpurl=jQuery(this).attr("data-target");
    jQuery(''+videpurl).modal("show");
});




jQuery('#owl-floorplan-model').owlCarousel({
    items: 1,
    loop: true,
    autoplay: false,
    autoplayTimeout: 2000,
    nav: true,
    smartSpeed: 1000
});

});

jQuery(document).ready(function(){
if (window.innerWidth <= 767) {
  var owl = jQuery('#owl-carousel-gallery-modelss').owlCarousel({
    items: 1,
    loop: true,
    autoplay: false,
    autoplayTimeout: 2000,
    nav: true,
    smartSpeed: 1000
});

jQuery('.gall_images').on('click', function() {
    var imgsrc=jQuery(this).attr('src');
    var slidimg=jQuery(this).attr('data-slide');
    slidimg=slidimg-1;
    owl.trigger('to.owl.carousel', [slidimg,300]);
    jQuery('#gallery_images_modal').modal('show');
});
}
});
jQuery(document).on('click','.close',function(){
    var imgsrc=jQuery(this).attr('src');
    jQuery('#gallery_images_modal').modal('hide');
    jQuery('#floorplan_images_modal').modal('hide');
});
jQuery(document).on('click','.floor-plan-imgwrp img',function(){
    jQuery('#floorplan_images_modal').modal('show');
});
jQuery(document).on('click','.the-prime-list .btnwrp a',function(){
   jQuery('html, body').animate({
    scrollTop: jQuery(".join-prime-list").offset().top
 }, 2000);
});
jQuery(window).on('load', function() {
    function getUrlParameter(name) {
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(window.location.href);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

    // Get the 'frm' parameter from the URL on window load
    var frm = getUrlParameter('frm');
    if(frm=='consultation'){
        jQuery('html, body').animate({
    scrollTop: jQuery(".book-consfrm").offset().top
 }, 2000);
    }
  
});

