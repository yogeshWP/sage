<section class="get-touch-sec">
    <div class="container">
        <div class="section-header-wrap">
           <h2><?php echo get_field('contact_heading');?></h2>
        </div>
           <?php $conatct_form=get_field('conatct_form');
         if($conatct_form){
         ?>
        <div class="collab-frm-row">
         <div class="book-consfrm-wrap">
         <?php echo do_shortcode($conatct_form);?>
         </div>
        </div>
         <?php } ?>
    </div>
</section>