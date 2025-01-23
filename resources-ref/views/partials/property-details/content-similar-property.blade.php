<?php if($propertieslist->have_posts()){ ?>
<div class="container">
 <div class="heading">
    <h2>similar listings</h2>
 </div>
 <ul>
  <?php  while($propertieslist->have_posts()) { $propertieslist->the_post();
  $propertyimage = wp_get_attachment_url(get_post_thumbnail_id(get_the_id()));
  $fields = get_fields($propertieslist->ID);?>
    <li>
       <?php if($propertyimage){?>
        <div class="image-wrp">
           <a href="<?php echo get_the_permalink();?>">
               <img src="<?php echo  $propertyimage;?>" alt="<?php echo get_the_title();?>">    
            </a>
       <?php 
       $status = property_status( $fields["marketing_type"], $fields["sale_status"] ); 
           if($status!=''){
           ?>
           <div class="under-offer <?php echo $status['value'];?>">
              <span><?php echo $status['label'];?></span>
           </div>
        <?php } ?>
       </div>
          <?php } ?>
           
       <div class="content">
          <a href="<?php echo get_the_permalink();?>"> <h5><?php echo get_the_title();?></h5></a>
          <h4>£<?php echo number_format(get_field('price')); ?></h4>
       </div>
    </li>
    <?php  }  wp_reset_postdata();?>
 </ul>
</div>
<?php } ?>