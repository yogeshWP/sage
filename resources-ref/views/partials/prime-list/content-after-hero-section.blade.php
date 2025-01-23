<section>
   <div class="imgcnt-afthero-sec">
      <div class="container">
         <div class="imgcnt-info-grid ltr">
            <?php $lirc_image=get_sub_field('lirc_image');
            if($lirc_image){
            ?>
            <div class="imgcl">
                   <img src="<?php echo $lirc_image['url'];?>" alt="<?php echo $lirc_image['title'];?>">
            </div>
            <?php } ?>
            <div class="cntcl">
               <div class="cntwrp-inner">
                  <div class="heading-block">
                        <h2><?php echo get_sub_field('lirc_title');?></h2>
                     </div>
                  <div class="cnttxt">
                      <?php echo get_sub_field('lirc_excerpt');?>
                  </div>
                  <?php $lirc_button_link=get_sub_field('lirc_button_link');
                     if($lirc_button_link){
                  ?>
                  <div class="btnwrp">
                           <a href="<?php echo $lirc_button_link['url'];?>" class="action-btn"><?php echo $lirc_button_link['title'];?></a>
                  </div>
               <?php } ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>