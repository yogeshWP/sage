<section class="our-team-sec">
      <div class="container">
            <div class="our-team-row">
                  <div class="team-headingcnt-block">
                        <div class="section-head-wrap">
                              <h2><?php echo get_sub_field('op_heading');?></h2>
                        </div>
                        <p><?php echo get_sub_field('content');?></p>
                  </div>
                  <?php $ourteammember=get_sub_field('team_member');
                  if($ourteammember){?>
                    <div class="our-team-slider owl-carousel">
                    <?php  
                    foreach($ourteammember as $ourteammembervalue){
                    $teamimg = wp_get_attachment_url(get_post_thumbnail_id($ourteammembervalue->ID)); 
                    ?>
                        <div class="team-member">
                           <?php  if($teamimg!=''){?>
                           <div class="team-thumb">
                               <a href="/our-people/"><img src="<?php echo $teamimg;?>" alt="<?php echo $ourteammembervalue->post_title;?>"></a>
                           </div>
                           <?php } ?>
                           <div class="team-info">
                               <h4 class="name"><a href="/our-people/"><?php echo $ourteammembervalue->post_title;?></a></h4>
                               <div class="position-held"><?php echo get_field('designation',$ourteammembervalue->ID);?></div>
                               </div>
                        </div>
                     <?php  }  ?>
                    </div>
              <?php } ?>
              
            </div>
      </div>
   </section>