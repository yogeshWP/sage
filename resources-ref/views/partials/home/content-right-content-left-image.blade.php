<section class="imgcnt-info-sec h-journal-sec">
      <div class="container">
         <div class="imgcnt-info-grid rtl">
            <?php $lcri_image=get_sub_field('lcri_image');
            if($lcri_image){
            ?>
               <div class="imgcl">
                     <img src="<?php echo $lcri_image['url'];?>" alt="<?php echo $lcri_image['title'];?>">
               </div>
           <?php } ?>
           <div class="cntcl">
             <div class="cntwrp-inner">
               <div class="heading-block">
                    <h2><?php echo get_sub_field('lcri_title');?></h2>
               </div>
               <div class="cnttxt">
                   <p><?php echo get_sub_field('lcri_excerpt');?></p>
               </div>
                <?php  if( have_rows('lcri_links') ){ ?>
                <div class="btnwrp morebtn-wrp">
                <?php  while ( have_rows('lcri_links') ) { the_row(); 
                $lcri_link = get_sub_field('lcri_link'); 
                if(get_sub_field('lcri_link_type')=='darkblue'){?>
                <a href="<?php echo $lcri_link['url'];?>" class="action-btn"><?php echo $lcri_link['title'];?></a>
                  <?php }else if(get_sub_field('lcri_link_type')=='white'){ ?>  
                    <a href="<?php echo $lcri_link['url'];?>" class="outline-action-btn"><?php echo $lcri_link['title'];?> </a>
                  <?php }else{ ?>
                    <a href="<?php echo $lcri_link['url'];?>" class="link-arrow"><?php echo $lcri_link['title'];?> </a>
                <?php } } ?>
                
                <?php } ?>
            </div>
           </div>

         </div>
      </div>
   </section>