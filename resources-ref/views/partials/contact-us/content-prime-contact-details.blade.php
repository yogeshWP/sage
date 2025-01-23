<section class="prime-contact-dtl">
<div class="container">
   <div class="prime-contactdtl-row">
      <div class="section-head-wrap">
          <h2><?php echo get_field('pcd_heading');?></h2>
      </div>
      <div class="contact-info-grid">
          <div class="contact-block">
              <div class="icn">
                  <img src="<?php echo get_stylesheet_directory_uri();?>/resources/images/tel-icn.svg" alt="">
              </div>
              <div class="contact-dtl">
                  <span class="sml-txt">Call Us</span>
                  <a href="tel:<?php echo get_field('pcd_phone_number');?>" class="big-txt h2"><?php echo get_field('pcd_phone_number');?></a>
              </div>
          </div>
          <div class="contact-block">
              <div class="icn">
                  <img src="<?php echo get_stylesheet_directory_uri();?>/resources/images/mail-icn.svg" alt="">
              </div>
              <div class="contact-dtl">
                  <span class="sml-txt">Email Us</span>
                  <a href="mailto:<?php echo get_field('pcd_email');?>" class="big-txt h2"><?php echo get_field('pcd_email');?></a>
              </div>
          </div>
      </div>
   </div>
</div>
</section>