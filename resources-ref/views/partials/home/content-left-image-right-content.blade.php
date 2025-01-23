   <section class="imgcnt-info-sec ">
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
                <?php  if( have_rows('lirc_links') ){ ?>
                <div class="btnwrp morebtn-wrp">
                <?php  while ( have_rows('lirc_links') ) { the_row(); 
                $lirc_link = get_sub_field('lirc_link'); 
                if(get_sub_field('lirc_link_type')=='darkblue'){?>
                <a href="<?php echo $lirc_link['url'];?>" class="action-btn"><?php echo $lirc_link['title'];?></a>
                  <?php }else if(get_sub_field('lirc_link_type')=='white'){ ?>  
                    <a href="<?php echo $lirc_link['url'];?>" class="outline-action-btn"><?php echo $lirc_link['title'];?></a>
                  <?php }else{ ?>
                    <a href="<?php echo $lirc_link['url'];?>" class="more-mrk"><?php echo $lirc_link['title'];?></a>
                <?php } } ?>
                </div>
                <?php } ?>
            </div>
           </div>

         </div>
      </div>
   </section>