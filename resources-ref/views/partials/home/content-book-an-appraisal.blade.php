<section class="book-appraisal">
      <div class="book-appr-grid">
            <?php $ba_image=get_sub_field('ba_image');
            if($ba_image){
            ?>
               <div class="imgcl">
                     <img src="<?php echo $ba_image['url'];?>" alt="<?php echo $ba_image['title'];?>">
               </div>
           <?php } ?>
            <div class="cntcl">
               <div class="cntwrp">
                  <h2><?php echo get_sub_field('ba_title');?></h2>
                  <p><?php echo get_sub_field('ba_excerpt');?></p>
                  <?php $ba_link=get_sub_field('ba_link');
                 if($ba_link){?>
                  <div class="btnwrp">
                     <a href="<?php echo $ba_link['url'];?>" class="action-btn secondary-btn"><?php echo $ba_link['title'];?></a>
                  </div>
            <?php } ?> 
               </div>
            </div>
      </div>
   </section>