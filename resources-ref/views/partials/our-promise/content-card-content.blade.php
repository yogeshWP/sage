<section class="promise-card-sec">
   <div class="container">
      <div class="promise-card-grid">
          <?php if( get_sub_field('card_content_list') ){
            while ( have_rows('card_content_list') ) { the_row(); ?>
         <div class="promise-card">
            <div class="card-content">
               <h2><?php echo get_sub_field('card_content_title');?></h2>
               <p><?php echo get_sub_field('card_content_excerpt');?></p>
            </div>
            <?php $card_content_image=get_sub_field('card_content_image');
            if($card_content_image){?>
            <div class="card-img">
               <img src="<?php echo $card_content_image['url'];?>" alt="<?php echo $card_content_image['title'];?>">
            </div>
         <?php } ?>
         </div>
      <?php }}?>
      </div>
   </div>
</section>