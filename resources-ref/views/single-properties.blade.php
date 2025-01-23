@extends('layouts.app')
@section('content')
<?php $data = get_fields();
//echo "<pre>";
//print_r($data['additional_images']);
 ?>
<section class="property-detail-sld">
  <div class="container">
    <div class="back-link">
      <a href="/property-search" class="back">Back to properties</a>
    </div>
    <div class="property-row">
      <div class="leftwrp">
        <div class="gallery-block-wrp">
           <ul class="tabs">
             <li>
               <a href="#tab1"><img src="<?php echo get_stylesheet_directory_uri();?>/resources/images/picture1.svg" />Gallery</a>
             </li>

             <li>
               <a href="#tab2"><img src="<?php echo get_stylesheet_directory_uri();?>/resources/images/picture1.svg" />Video tour</a>
             </li>
             <li>
               <a href="#tab3"><img src="<?php echo get_stylesheet_directory_uri();?>/resources/images/picture2.svg" />Map</a>
             </li>
             <li>
               <a href="#tab4"><img src="<?php echo get_stylesheet_directory_uri();?>/resources/images/picture3.svg" />Floorplan</a>
             </li>
             <li>
               <a href="#tab5"><img src="<?php echo get_stylesheet_directory_uri();?>/resources/images/picture4.svg" />EPC</a>
             </li>
             <li>
               <a href="#tab6"><img src="<?php echo get_stylesheet_directory_uri();?>/resources/images/picture5.svg" />Brochure</a>
             </li>
           </ul>
           
           <div class="tab_container">
              <div id="tab1" class="tab_content">
                  @include('partials.property-details.content-property-gallery')
              </div>
              <div id="tab2" class="tab_content">
                   @include('partials.property-details.content-virtual-video')
              </div>
              <div id="tab3" class="tab_content">
                 @include('partials.property-details.content-map')
              </div>
              <div id="tab4" class="tab_content">
                @include('partials.property-details.content-floor-plan')
              </div>
             </div>
             <div id="tab5" class="tab_content">
               @include('partials.property-details.content-epc')
            </div>
            <div id="tab6" class="tab_content">
               @include('partials.property-details.content-brochure')
          </div>
    </div>
    <div class="about-the-property">
        <div class="heading">
          <h3>About the Property</h3>
        </div>
        <?php echo the_content();?>
    </div>
  </div>

  <div class="rightwrp ">
    @include('partials.property-details.content-right-sidebar')
  </div>
</div>
</div>
</section>

<?php 
$propertieslist = similerpropertylist(get_the_id());
if ($propertieslist->have_posts()) {
?>
<section class="similar-listings">
@include('partials.property-details.content-similar-property')
</section>
<?php } ?>
  <script type="text/javascript">
    jQuery(document).ready(function () {
      //When page loads...
      jQuery(".tab_content").hide(); //Hide all content
      jQuery("ul.tabs li:first").addClass("active").show(); //Activate first tab
      jQuery(".tab_content:first").show(); //Show first tab content

      //On Click Event
      jQuery("ul.tabs li").click(function () {
        jQuery("ul.tabs li").removeClass("active"); //Remove any "active" class
        jQuery(this).addClass("active"); //Add "active" class to selected tab
        jQuery(".tab_content").hide(); //Hide all tab content

        var activeTab = jQuery(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
        jQuery(activeTab).fadeIn(); //Fade in the active ID content
        return false;
      });
   });
   
   jQuery(document).ready(function () {
      var GallerySlider = jQuery("#GallerySlider");
      var GallerySliderThumb = jQuery("#GallerySliderThumb");
      var slidesPerPage = 5;
      var syncedSecondary = true;
      GallerySlider.owlCarousel({
         items: 1,
         slideSpeed: 2000,
         nav: true,
         autoplay: false,
         dots: false,
         loop: true,
         navText: [],
      }).on("changed.owl.carousel", syncPosition);
      
      GallerySliderThumb.on("initialized.owl.carousel", function () {
         GallerySliderThumb.find(".owl-item").eq(0).addClass("current");
      }).owlCarousel({
         margin: 20,
         items: slidesPerPage,
         dots: false,
         nav: false,
         smartSpeed: 200,
         slideSpeed: 500,
         slideBy: slidesPerPage,
         responsiveRefreshRate: 100,
         responsive:{
        0:{
            items:3
        },
        
        1280:{
            items:5
        }
    }
      }).on("changed.owl.carousel", syncPosition2);

      function syncPosition(el) {
         var count = el.item.count - 1;
         var current = Math.round(el.item.index - el.item.count / 2 - 0.5);
         if (current < 0) {
            current = count;
         }
         if (current > count) {
            current = 0;
         }
         GallerySliderThumb.find(".owl-item").removeClass("current").eq(current).addClass("current");
         var onscreen = GallerySliderThumb.find(".owl-item.active").length - 1;
         var start = GallerySliderThumb.find(".owl-item.active").first().index();
         var end = GallerySliderThumb.find(".owl-item.active").last().index();
         
         if (current > end) {
            GallerySliderThumb.data("owl.carousel").to(current, 100, true);
         }
         if (current < start) {
            GallerySliderThumb.data("owl.carousel").to(current - onscreen, 100, true);
         }
      }
      
      function syncPosition2(el) {
         if (syncedSecondary) {
            var number = el.item.index;
            GallerySlider.data("owl.carousel").to(number, 100, true);
         }
      }
      
      GallerySliderThumb.on("click", ".owl-item", function (e) {
         e.preventDefault();
         var number = jQuery(this).index();
         GallerySlider.data("owl.carousel").to(number, 300, true);
      });
   });

   jQuery(document).ready(function() {
    
            function showModalOnMobile() {
                if (jQuery(window).width() < 768) {
                    jQuery('#contactpopup').addClass('modal fade');
                } else {
                     jQuery('.pro-close').hide();
                    jQuery('#contactpopup').removeClass('modal fade');
                }
            }

            // Run on page load
            showModalOnMobile();
             // jQuery('#contactpopup').modal('show');
            
            // Optionally, run on window resize
            jQuery(window).resize(showModalOnMobile);
            jQuery('.mob-contactmodal-btn').click(function() {
                jQuery('.pro-close').show();
                jQuery('#contactpopup').modal('show');
             });

            jQuery('.for-sale-acc').click(function() {
                // Hide all accordion contents
                jQuery('.forsale-acc-cnt').slideUp();
                jQuery(this).parent(".for-sale").removeClass("popup-active");
                // Toggle the clicked section
                if (jQuery(this).next('.forsale-acc-cnt').is(':visible')) {
                    jQuery(this).next('.forsale-acc-cnt').slideUp();
                    jQuery(this).parents(".for-sale").removeClass("popup-active")
                } else {
                    jQuery(this).next('.forsale-acc-cnt').slideDown();
                    jQuery(this).parents(".for-sale").addClass("popup-active")
                }
            });
        });
  </script>
@endsection
