
<header class="<?php echo (get_field('background_type') == 'white' || get_field('background_type') == ''  ||  is_single() || is_archive()) ? 'header-white' : ''; ?>">
   <div class="container">
      <div class="header-wrp">
         <div class="logo">
           <?php if(get_field('background_type')=='white' || is_single() || is_archive() || get_field('background_type')==''){ ?>
            <?php $secondary_header_logo = get_field('secondary_header_logo', 'option');
             if ($secondary_header_logo){ ?>
            <a href="<?php echo WP_HOME; ?>"><img src="<?php echo $secondary_header_logo['url']; ?>" alt="<?php echo $secondary_header_logo['alt']; ?>"></a>
          <?php }else{ ?>
            <h1 class="site-title">
              <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
            </h1>
         <?php } }else{ ?>
            <?php $logo = get_field('main_logo', 'option');
             if ($logo){ ?>
            <a href="<?php echo WP_HOME; ?>"><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"></a>
          <?php }else{ ?>
            <h1 class="site-title">
              <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
            </h1>
         <?php } } ?>
         
         </div>
         <div class="logo mobile-logo" style="display:none;">
            <?php $logo = get_field('main_logo', 'option');
             if ($logo){ ?>
            <a href="<?php echo WP_HOME; ?>"><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"></a>
          <?php }?>
         </div>
         <div class="main-menu <?php echo (get_field('header_right_button_color')=='secondary')? 'secondary-btn' : '';?>">
            <div class="menu-toggle-btn"></div>
            @if (has_nav_menu('primary_navigation'))
             {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
               @endif
               <div class="btnwrp secondary-btn">
            {!! wp_nav_menu(['theme_location' => 'header_right_navigation',  'echo' => false]) !!}
         </div>
         </div>
         <div class="btnwrp <?php echo (get_field('header_right_button_color')=='secondary')? 'secondary-btn' : '';?>">
            {!! wp_nav_menu(['theme_location' => 'header_right_navigation',  'echo' => false]) !!}
         </div>
      </div>
   </div>
</header>
<?php 
    if(get_field('background_type')=='image'){ ?>
<section class="hero-banner-sec">
    <?php 
      $header_background=get_field('header_background');
      if($header_background){
      ?>
   <div class="hero-banner-img">
       <img src="<?php echo $header_background['url'];?>" alt="<?php echo $header_background['title'];?>">
   </div>
<?php } ?>
   <div class="hero-banner-cntwrp">
      <div class="container">
         <div class="hero-banner-row">
            <div class="hero-cnt-box" >
               <div class="hero-head-wrp">
                  <h1><?php echo (get_field('header_hero_title')) ? get_field('header_hero_title') : get_the_title();?></h1>
               </div>
               <?php if(get_field('header_hero_excerpt')){?>
               <div class="hero-cnt-blk">
                  <p><?php echo get_field('header_hero_excerpt');?></p>
               </div>
               <?php } if(get_field('header_hero_anchor_group')==true){
                  $header_hero_button_cta=get_field('header_hero_button_cta');
                  if($header_hero_button_cta){
                  ?>
               <div class="btnwrp">
                  <a href="<?php echo $header_hero_button_cta['url'];?>" class="action-btn btn-white"><?php echo $header_hero_button_cta['title'];?></a>
               </div>
            <?php } } ?>
            </div>
         </div>
      </div>
   </div>
</section>
<?php }else  if(get_field('background_type')=='darkblue'){ ?>

<section class="inner-banner-sec inner-banner-bluebg">
   <div class="container">
      <div class="inner-banner-row">
         <div class="inner-banner-cnt">
            <div class="banner-main-title">
               <h1><?php echo (get_field('header_hero_title')) ? get_field('header_hero_title') : get_the_title();?></h1>
            </div>
            <div class="inner-banner-txtwrp">
            <p><?php echo get_field('header_hero_excerpt');?></p>
            </div>
            <?php if(get_field('header_hero_anchor_group')==true){
                  $header_hero_button_cta=get_field('header_hero_button_cta');
                  if($header_hero_button_cta){
                  ?>
               <div class="btnwrp">
                  <a href="<?php echo $header_hero_button_cta['url'];?>" class="action-btn btn-white"><?php echo $header_hero_button_cta['title'];?></a>
               </div>
            <?php } } ?>
         </div>
      </div>
   </div>
</section>
<?php }else  if(get_field('background_type')=='white'){ 
if(get_field('header_hero_title')!='' || get_field('header_hero_excerpt')!=''){
   ?>
<section class="imgcnt-afthero-header">
   <div class="inner-banner-sec  inner-banner-grybg">
       <div class="container">
           <div class="inner-banner-row">
               <div class="inner-banner-cnt">
                 
                   <div class="banner-main-title">
                       <h1><?php echo (get_field('header_hero_title')) ? get_field('header_hero_title') : get_the_title();?></h1>
                   </div>
                <?php  if(get_field('header_hero_excerpt')){?>
                   <div class="inner-banner-txtwrp">
                       <p><?php echo get_field('header_hero_excerpt');?>
                       </p>
                   </div>
                <?php } ?>
               </div>
           </div>
       </div>
   </div>
</section>
<?php } } ?>