<section class="marketing-imgcnt-sec prtnr-prg-sec">
         <div class="container">
            <div class="imgcnt-info-grybx <?php echo (get_sub_field('pp_layout_type')=='lcri')? 'rtl' : '';?>">
               <?php  $pp_image =get_sub_field('pp_image');
               if($pp_image){
               ?>
               <div class="imgcl">
               <img src="<?php echo $pp_image['url'];?>" alt="<?php echo $pp_image['title'];?>">
               </div>
               <?php } ?>
               <div class="cntcl">
                  <div class="cntwrp-inner">
                     <?php  $pp_icon =get_sub_field('pp_icon');
                     if($pp_icon){
                     ?>
                     <div class="icn">
                     <img src="<?php echo $pp_icon['url'];?>" alt="<?php echo $pp_icon['title'];?>">
                     </div>
                     <?php } ?>
                     <div class="heading-block">
                        <h2><?php echo get_sub_field('pp_sec_title');?></h2>
                     </div>
                     <div class="cnttxt">
                         <?php echo get_sub_field('pp_text_block');?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>