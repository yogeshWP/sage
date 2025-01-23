<section>
   <div class="imgcnt-afthero-sec">
      <div class="container">
         <div class="imgcnt-info-grid ltr">
            <?php $lirc_image=get_sub_field('lirc_image');
            if($lirc_image){
            ?>
            <div class="imgcl">
                   <img src="<?php echo $lirc_image['url'];?>" alt="<?php echo $lirc_image['title'];?>">
                   <span><?php echo get_sub_field('lirc_title');?></span>
            </div>
            <?php } ?>
            <div class="cntcl">
               <div class="cntwrp-inner">
                 
                  <div class="cnttxt">
                      <?php echo get_sub_field('lirc_excerpt');?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>