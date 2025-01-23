<section class="let-project-sec">
  <div class="container">
       <div class="let-proj-row">
             <div class="section-head-wrp">
                 <h2><?php echo get_sub_field('lpc_heading');?></h2>
                 <p><?php echo get_sub_field('lpc_sub_text');?></p>
             </div>
             <?php  if( have_rows('latest_projects_content') ){?>
             <div class="let-proj-grid"> 
                    <?php  
                    while ( have_rows('latest_projects_content') ) { the_row(); 
                    $lpc_image = get_sub_field('lpc_image'); 
                    ?>
                   <div class="let-pro-item">
                       <?php if($lpc_image){?> 
                       <div class="imgwrp">
                            <img src="<?php echo $lpc_image['url'];?>" alt="<?php echo $lpc_image['title'];?>">
                       </div>
                   <?php } ?>
                       <div class="let-pro-cntwrp">
                            <h4><?php echo get_sub_field('lpc_title');?></h4>
                            <p><?php echo get_sub_field('lpc_project_content');?></p>
                            <?php $lpc_project_link = get_sub_field('lpc_project_link'); 
                            if( $lpc_project_link){
                            ?>
                            <div class="more-btn">
                                  <a href="<?php echo $lpc_project_link['url'];?>" class="more-link"><?php echo $lpc_project_link['title'];?></a>
                            </div>
                        <?php } ?>
                       </div>
                   </div>
                  <?php } ?>
             </div>
         <?php } ?>
       </div>
  </div>
</section>