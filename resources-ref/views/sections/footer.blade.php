 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<section class="book-appraisal">
   <div class="book-appr-grid">
         <?php $footer_image=get_field('footer_image', 'option');
         if($footer_image){
         ?>
            <div class="imgcl">
                  <img src="<?php echo $footer_image['url'];?>" alt="<?php echo $footer_image['title'];?>">
            </div>
        <?php } ?>
         <div class="cntcl">
            <div class="cntwrp">
               <h2><?php echo get_field('footer_title', 'option');?></h2>
               <p><?php echo get_field('footer_content', 'option');?></p>
               <?php $footer_button_link=get_field('footer_button_link', 'option');
              if($footer_button_link){?>
               <div class="btnwrp">
                  <a href="<?php echo $footer_button_link['url'];?>" class="action-btn "><?php echo $footer_button_link['title'];?></a>
               </div>
         <?php } ?> 
            </div>
         </div>
   </div>
</section>
<footer>
         <div class="container">
            <div class="footer-row">
               <div class="fo-info-cl">
                  <div class="fo-logo">
                  <?php $footer_logo = get_field('footer_logo', 'option');
                  ?>
                  <?php if ($footer_logo) : ?>
                  <a href="<?php echo WP_HOME; ?>"><img src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['alt']; ?>"></a>
                  <?php else : ?>
                  <h1 class="site-title">
                  <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                  </h1>
                  <?php endif; ?>
                  <?php  
                  $instagram_link = get_field('instagram_link', 'option');
                  $facebook_link = get_field('facebook_link', 'option');
                  $youtube_link = get_field('youtube_link', 'option');
                  $linkedin_link = get_field('linkedin_link', 'option');
                  if($instagram_link || $facebook_link || $youtube_link || $linkedin_link){
                  ?>
                  <div class="social-links">
                     <ul>
                        <?php if($instagram_link!=''){?>
                        <li><a href="<?php echo $instagram_link;?>"><img src="<?php echo get_stylesheet_directory_uri();?>/resources/images/social-Instagram.svg"></a></li>
                     <?php } if($facebook_link!=''){?>
                         <li><a href="<?php echo $facebook_link;?>"><img src="<?php echo get_stylesheet_directory_uri();?>/resources/images/social-facebok.svg"></a></li>
                     <?php } if($youtube_link!=''){?>
                         <li><a href="<?php echo $youtube_link;?>"><img src="<?php echo get_stylesheet_directory_uri();?>/resources/images/socia-youtube.svg"></a></li>
                     <?php } if($linkedin_link!=''){?>

                            <li><a href="<?php echo $linkedin_link;?>"><img src="<?php echo get_stylesheet_directory_uri();?>/resources/images/social-linkedin.svg"></a></li>
                     <?php } ?>


                     </ul>
                  </div>
               <?php } ?>
                  </div>
                    <?php $copyright_text = get_field('copyright_text', 'option');
                  ?>
                  <?php if ($copyright_text) : ?>
                  <div class="fo-reg-txt">
                     <?php echo $copyright_text;?>
                  </div>
                  <?php endif; ?>
               </div>
               <div class="fo-links-cl">
                  @if (has_nav_menu('footer_navigation'))
                  {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
                  @endif
               </div>
            </div>
         </div>
      </footer>
