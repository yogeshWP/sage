<div class="imgcnt-info-grybx ">
     <?php 
    $lirc_image =get_sub_field('lirc_image');
    if($lirc_image){
      ?>
         <div class="imgcl">
             <img src="<?php echo $lirc_image['url'];?>" alt="<?php echo $lirc_image['title'];?>">
         </div>
      <?php } ?>
   <div class="cntcl">
      <div class="cntwrp-inner">
          <?php $lirc_icon=get_sub_field('lirc_icon');
               if($lirc_icon){
               ?>
                  <div class="icn">
                     <img src="<?php echo $lirc_icon['url'];?>" alt="<?php echo $lirc_icon['title'];?>">
                  </div>
               <?php } ?>
         <div class="heading-block">
            <h2><?php echo get_sub_field('lirc_title');?></h2>
         </div>
         <div class="cnttxt">
           <?php echo get_sub_field('lirc_excerpt');?>
         </div>
      </div>
   </div>
</div>