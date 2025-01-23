<div class="imgcnt-info-grybx rtl">
    <?php 
    $lcri_image=get_sub_field('lcri_image');
    if($lcri_image){
    ?>
       <div class="imgcl">
             <img src="<?php echo $lcri_image['url'];?>" alt="<?php echo $lcri_image['title'];?>">
       </div>
   <?php }?>
 <div class="cntcl">
    <div class="cntwrp-inner">
        <?php $lcri_icon=get_sub_field('lcri_icon');
        if($lcri_icon){
        ?>
       <div class="icn">
          <img src="<?php echo $lcri_icon['url'];?>" alt="<?php echo $lcri_icon['title'];?>">
       </div>
   <?php } ?>
       <div class="heading-block">
          <h2><?php echo get_sub_field('lcri_title');?></h2>
       </div>
       <div class="cnttxt">
         <?php echo get_sub_field('lcri_excerpt');?>
       </div>
    </div>
 </div>
</div>