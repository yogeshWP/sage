<section class="join-prime-list">
    <div class="container">
      <div class="collab-frm-row">
         <?php $plp_form=get_sub_field('plp_form');
         if($plp_form){
         ?>
         <div class="book-consfrm">
         <?php echo do_shortcode($plp_form);?>
         </div>
         <?php } ?>
      </div>
    </div>
</section>