<?php $plp_form=get_sub_field('pp_become_a_partner_form');
if($plp_form){
 ?>
<section class="join-prime-list">
    <div class="container">
      <div class="collab-frm-row">
         <div class="book-consfrm">
         <?php echo do_shortcode($plp_form);?>
         </div>
      </div>
    </div>
</section>
<?php } ?>