<section>
   <div class="imgcnt-afthero-sec">
      <div class="container">
         <div class="imgcnt-info-grid ltr">
            <?php $ahs_image=get_field('ahs_image');
            if($ahs_image){ ?>
            <div class="imgcl">
                   <img src="<?php echo $ahs_image['url'];?>" alt="<?php echo $ahs_image['title'];?>">
            </div>
            <?php } ?>
            <div class="cntcl">
               <div class="cntwrp-inner">
                  <div class="cnttxt">
                      <?php echo get_field('ahs_excerpt');?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>