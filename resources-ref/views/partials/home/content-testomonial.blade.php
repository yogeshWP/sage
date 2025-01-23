<section class="more-cust-test-sec">
      <div class="container">
            <div class="more-cust-test-row">
                  <div class="cnttxt">
                    <p class="h2"><?php echo get_sub_field('testomonial_content');?></p>
                 </div>
                 <?php $testomonial_link=get_sub_field('testomonial_link');
                 if($testomonial_link){?>
                  <div class="btnwrp">
                     <a href="<?php echo $testomonial_link['url'];?>" class="outline-action-btn secondary-btn"><?php echo $testomonial_link['title'];?></a>
                  </div>
            <?php } ?> 
            </div>
      </div>
</section>