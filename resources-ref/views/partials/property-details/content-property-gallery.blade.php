
<?php if($data['additional_images']){ ?>
<div class="gallery-block">
 <div id="GallerySlider"class="gallery-slider owl-carousel owl-theme">
  <?php $s=1; foreach ($data['additional_images'] as $additional_imagesurl){?> 
   <div class="item">
     <img src="<?php echo $additional_imagesurl['url'];?>" alt="<?php echo $additional_imagesurl['title'];?>" class="gall_images" data-slide="<?php echo $s;?>" id="ga-img-<?php echo $s;?>" />
   </div>
 <?php $s++; } ?>
 </div>
<div id="GallerySliderThumb" class="gallery-slider-thumb owl-carousel owl-theme">
    <?php foreach ($data['additional_images'] as $additional_imagesurl){?> 
   <div class="item">
     <img src="<?php echo $additional_imagesurl['url'];?>" alt="<?php echo $additional_imagesurl['title'];?>" />
   </div>
 <?php } ?>
 </div>
</div>
<?php } ?>

 <div class="modal fade gallery-modal-maincls" id="gallery_images_modal" tabindex="-1" role="dialog" aria-labelledby="virtourLabel" aria-hidden="true">
                <span data-dismiss="modal" aria-label="Close" class="close genericon genericon-close-alt">&#x2715;</span>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-body">
                <div class="btn-div">
                    <ul><li><a href="" class="action-btn backbtn"><img src="<?php echo get_stylesheet_directory_uri();?>/resources/images/arrow-left.svg">Back</a></li><li><button class="action-btn secondary-btn reqbtn" href="">Request a viewing</button></li></ul>
                </div>
                <div class="section d-flex justify-content-center embed-responsive embed-responsive-16by9">

                    <div id="owl-carousel-gallery-models"class="">

                      <?php $s=1; foreach ($data['additional_images'] as $additional_imagesurl){?> 
                       <div class="item">
                         <img src="<?php echo $additional_imagesurl['url'];?>" alt="<?php echo $additional_imagesurl['title'];?>" class="gall_images" id="ga-img-<?php echo $s;?>" />
                       </div>
                     <?php $s++; } ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
  