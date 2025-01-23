<link  href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {   
   $(".fancybox").fancybox();       
});
</script>
<section class="our-teamlist-sec">
   <div class="container">
      <div class="our-teamlist-row">
         <div class="section-head-wrp">
               <h2><?php echo get_sub_field('heading');?></h2>
               <p><?php echo get_sub_field('content');?></p>
         </div>
         <div class="teamlst-card-grid">
            <?php $ourteammember=get_sub_field('our_team_member');
            if($ourteammember){
            $i = 1; 
            foreach($ourteammember as $ourteammembervalue){
            $teamimg = wp_get_attachment_url(get_post_thumbnail_id($ourteammembervalue->ID)); 
            ?>
            <div class="team-member-card">
               <?php  if($teamimg!=''){?>
               <div class="eam-card-img">
                   <img src="<?php echo $teamimg;?>" alt="<?php echo $ourteammembervalue->post_title;?>">
               </div>
               <?php } ?>
               <div class="team-card-content">
                  <div class="team-name">
                     <h4><?php echo $ourteammembervalue->post_title;?> <?php if(get_field('qualification',$ourteammembervalue->ID)){?><span><?php echo get_field('qualification',$ourteammembervalue->ID);?></span><?php } ?></h4>
                     <p class="team-pos"><?php echo get_field('designation',$ourteammembervalue->ID);?></p>
                     <p><?php echo get_field('location',$ourteammembervalue->ID);?></p>
                  </div>
                  <div class="team-desc">
                    <p><?php echo wp_trim_words($ourteammembervalue->post_content, 32, '...'); ?></p>
                    <?php $word_count = str_word_count($ourteammembervalue->post_content); ?>
                    <?php if($word_count > 32) { ?><a class="fancybox" href="#pop<?php echo $i;?>">Read More</a><?php } ?>
                  </div>
               </div>
            </div>
            <div style="display:none;">
               <div id="pop<?php echo $i;?>" style="width:100%;max-width:700px;">
                  <h4><?php echo $ourteammembervalue->post_title;?> <?php if(get_field('qualification',$ourteammembervalue->ID)){?><span><?php echo get_field('qualification',$ourteammembervalue->ID);?></span><?php } ?></h4>
                  <?php echo $ourteammembervalue->post_content; ?>
               </div>
            </div>
            <?php $i++; }} ?>
            <?php $our_team_last_card_backgroung_image=get_sub_field('our_team_last_card_backgroung_image');?>
            <div class="team-cntifo-card" style="<?php echo ($our_team_last_card_backgroung_image) ? 'background:url('.$our_team_last_card_backgroung_image['url'].') no-repeat' : '';?>">
                  <div class="team-cntinfo-cnt">
                     <?php $our_team_last_card_logo = get_sub_field('our_team_last_card_logo'); 
                        if($our_team_last_card_logo){
                        ?>
                        <div class="logo">
                           <img src="<?php echo $our_team_last_card_logo['url'];?>" alt="<?php echo $our_team_last_card_logo['title'];?>" width="70">
                        </div>
                     <?php } ?>
                        <div class="cnttxt">
                            <?php echo get_sub_field('our_people_card_text');?>  
                        </div>                     
                  </div>
            </div>

         </div>
      </div>
   </div>
</section>
