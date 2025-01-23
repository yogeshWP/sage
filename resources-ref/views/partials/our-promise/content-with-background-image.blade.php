<section class="img-ovrlapecnt-sec emr-innv-sec">
         <div class="img-ovrlapecnt-wrap">
            <?php $cwbi_background_image=get_sub_field('cwbi_background_image');
            if($cwbi_background_image){ ?>
               <div class="imgbg">
                     <img src="<?php echo $cwbi_background_image['url'];?>" alt="<?php echo $cwbi_background_image['title'];?>">
               </div>
           <?php } ?>
               <div class="img-ovrlp-bgcnt">
                        <?php $cwbi_section_logo=get_sub_field('cwbi_section_logo');
                        if($cwbi_section_logo){
                        ?>
                      <div class="logo">
                           <img src="<?php echo $cwbi_section_logo['url'];?>" alt="<?php echo $cwbi_section_logo['title'];?>">
                      </div>
                      <?php } ?>  
                      <div class="img-ovrlp-cnttxt">
                           <?php if(get_sub_field('cwbi_title')){ ?><h2><?php echo get_sub_field('cwbi_title');?></h2><?php } ?>
                           <p><?php echo get_sub_field('cwbi_content');?></p>
                           <?php $cwbi_linkscount = (get_sub_field('cwbi_links')) ? count(get_sub_field('cwbi_links')): ''; 
                            $buttoncls=($cwbi_linkscount>1) ? 'two-button' : 'one-button';
                           ?>
                            <?php  if( have_rows('cwbi_links') ){?>
                            <div class="morebtn-wrp <?php echo $buttoncls;?>">
                            <?php  while ( have_rows('cwbi_links') ) { the_row(); 
                            $cwbi_link = get_sub_field('cwbi_link'); 
                            if(get_sub_field('cwbi_link_type')=='darkblue'){?>
                            <a href="<?php echo $cwbi_link['url'];?>" class="action-btn"><?php echo $cwbi_link['title'];?></a>
                              <?php }else if(get_sub_field('cwbi_link_type')=='white'){ ?>  
                                <a href="<?php echo $cwbi_link['url'];?>" class="outline-action-btn"><?php echo $cwbi_link['title'];?></a>
                              <?php }else{ ?>
                                <a href="<?php echo $cwbi_link['url'];?>" class="more-mrk"><?php echo $cwbi_link['title'];?></a>
                            <?php } } ?>
                            </div>
                            <?php } ?>
                      </div>
               </div>
         </div>
   </section>