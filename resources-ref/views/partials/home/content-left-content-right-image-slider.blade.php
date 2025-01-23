 <section class="lr-owlslide-cnt-sec  hfea-list-sec">
         <div class="lr-owlslide-cnt-grid ">
            <div class="leftcl ">
               <div class="slide-cnt-wrp">
                  <div class="heading-block">
                     <h2><?php echo  get_sub_field('lcris_title');?></h2>
                  </div>
                  <p><?php echo  get_sub_field('lcris_excerpt');?></p>
               </div>
            </div>
               <div class="rightcl">
                
               <div class="flhlf-owlslider owl-carousel">
                <?php  if( have_rows('home_right_side_images_slider') ){ while ( have_rows('home_right_side_images_slider') ) { the_row(); 
                $home_right_side_images_slider_images = get_sub_field('home_right_side_images_slider_images'); 
                 $home_right_side_images_slider_link=get_sub_field('home_right_side_images_slider_link');
                 $link='#';
                 if($home_right_side_images_slider_link){
                  $link=$home_right_side_images_slider_link['url'];
                 }
                 ?>
                  <div class="item">
                     <a href="<?php echo $link;?>">
                     <img src="<?php echo $home_right_side_images_slider_images['url'];?>" alt="<?php echo $home_right_side_images_slider_images['title'];?>">
                   </a>
                  </div>
                  <?php  } }
                  ?>
               </div>
            </div>
         </div>
      </section>