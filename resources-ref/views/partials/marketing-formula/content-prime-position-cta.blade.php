<section class="book-consl-sec">
    <div class="container">
         <div class="book-consl-box">
               <h2><?php echo get_field('ppcta_title');?></h2>
               <p><?php echo get_field('ppcta_excerpt');?></p>
               <div class="btnwrp">
                  <?php $ppcta_button_link = get_field('ppcta_button_link'); 
                if($ppcta_button_link){?>
                <a href="<?php echo $ppcta_button_link['url'];?>" class="action-btn"><?php echo $ppcta_button_link['title'];?></a>
                 <?php } ?>
                     <p class="smltxt"><?php echo get_field('ppcta_button_side_text');?></p>
               </div>
         </div>
   </div>
</section>