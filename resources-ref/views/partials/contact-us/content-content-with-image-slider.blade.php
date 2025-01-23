<section class="lr-owlslide-cnt-sec  hfea-list-sec contact-lr-owl">
         <div class="lr-owlslide-cnt-grid ">
            <div class="leftcl ">
               <div class="slide-cnt-wrp">
                  <div class="heading-block">
                     <h2><?php echo get_field('cwis_title');?></h2>
                  </div>
                 <?php echo get_field('cwis_excerpt');?>
               </div>
            </div>
            <?php if( get_field('cwis_images') ){ ?>
            <div class="rightcl">
               <div class="flhlf-owlslider owl-carousel">
                  <?php while ( have_rows('cwis_images') ) { the_row(); 
                     $cwis_image=get_sub_field('cwis_image');
                     if($cwis_image){
                     ?>
                  <div class="item">
                     <img src="<?php echo $cwis_image['url'];?>" alt="<?php echo $cwis_image['title'];?>">
                  </div>
               <?php } } ?>
               </div>
            </div>
            <?php } ?>
         </div>
      </section>