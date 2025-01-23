 <section class="collab-frm-sec">
         <div class="container">
            <div class="collab-frm-row">
               <div class="collab-info-txtblk">
                  <h2><?php echo get_sub_field('form_heading');?></h2>
                  <?php echo get_sub_field('form_text');?>
               </div>
               <div class="book-consfrm-wrap">
                  <?php $form=get_sub_field('form_short_code');
                  if($form){
                  ?>
                  <div class="book-consfrm">
                     <?php echo do_shortcode($form);?>
                  </div>
               <?php } ?>
               </div>
            </div>
         </div>
      </section>