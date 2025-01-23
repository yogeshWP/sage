<?php if( get_sub_field('box_content') ){ ?>
<section class="prime-infolist-sec">
   <div class="container">
         <div class="prime-ifolstitm-rw">
            <?php while ( have_rows('box_content') ) { the_row(); ?>
                <div class="prime-infitem-bx">
                     <h2><?php echo  get_sub_field('plp_title');?></h2>
                     <div class="subhead-txt"><?php echo  get_sub_field('plp_sub_title');?></div>
                     <p><?php echo  get_sub_field('plp_excerpt');?></p>
                </div>
             <?php } ?>
         </div>
   </div>
</section>
<?php } ?>