<section class="prcsrh-sdrimgcnt-sec">
   <div class="container">
      <div class="section-head-wrap">
         <h2><?php echo get_sub_field('main_heading');?></h2>
      </div>
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
       <?php  if( have_rows('how_we_do_it') ){?>
         <div class="sdrimgcnt-wrapper">
            <div id="thumb-item" class="owl-carousel owl-theme thumb-item">
               <?php  while ( have_rows('how_we_do_it') ) { the_row(); 
                 $ps_heading_icon=get_sub_field('ps_heading_icon');
                 ?>
                 <div class="item-tab-btn">
                  <?php if($ps_heading_icon){ ?><div class="icn"> <img src="<?php echo $ps_heading_icon['url'];?>" alt="icon"></div><?php } ?> <?php echo get_sub_field('ps_heading');?>
               </div>
            <?php } ?>
         </div>
         <div id="bigslide" class="owl-carousel owl-theme bigslider">
           <?php  while ( have_rows('how_we_do_it') ) { the_row();
              $ps_image=get_sub_field('ps_image');
              $ps_icon=get_sub_field('ps_icon');
              ?>
              <div class="imgcnt-info-grybx">
                <?php if($ps_image){ ?>
                  <div class="imgcl">
                     <img src="<?php echo $ps_image['url'];?>" alt="icon">
                  </div>
               <?php } ?>
               <div class="cntcl">
                  <div class="cntwrp-inner">
                     <?php if($ps_icon){ ?>
                        <div class="icn">
                           <img src="<?php echo $ps_icon['url'];?>" alt="icon">
                        </div>
                     <?php } ?>
                     <div class="heading-block">
                        <h2><?php echo get_sub_field('ps_title');?></h2>
                     </div>
                     <div class="cnttxt">
                        <?php echo get_sub_field('ps_content');?>
                     </div>
                  </div>
               </div>
            </div>
         <?php } ?>
      </div>
   </div>
<?php } ?>
</div>
</section>