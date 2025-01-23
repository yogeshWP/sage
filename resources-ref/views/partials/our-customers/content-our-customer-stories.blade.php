<?php $ocs_layout_type=get_sub_field('ocs_layout_type');?>
<div class="lr-owlslide-cnt-grid customers-story-grid <?php echo ($ocs_layout_type=='lisrc')? 'even' : '';?> ">
    <div class="leftcl ">
        <div class="slide-cnt-wrp">
            <div class="heading-block">
                <span class="header-sml-txt"><?php echo get_sub_field('ocs_property_location');?></span>
                <h2><?php echo get_sub_field('ocs_property_title');?></h2>
            </div>
            <?php echo get_sub_field('ocs_story_details');?>
            <div class="pro-info-list">
                <ul>
                    <li>
                        <img src="<?php echo get_stylesheet_directory_uri();?>/resources/images/bed-icn.svg" alt="">
                        <?php echo number_format(get_sub_field('ocs_bedrooms'));?> Bedrooms
                    </li>
                    <li>
                        <img src="<?php echo get_stylesheet_directory_uri();?>/resources/images/room-icn.svg" alt="">
                        <?php echo number_format(get_sub_field('ocs_reception_rooms'));?> Reception Rooms
                    </li>
                    <li>
                        <img src="<?php echo get_stylesheet_directory_uri();?>/resources/images/bathroom-icn.svg" alt="">
                        <?php echo number_format(get_sub_field('ocs_bathrooms'));?> Bathrooms
                    </li>
                    <li>
                        <img src="<?php echo get_stylesheet_directory_uri();?>/resources/images/acres-icn.svg" alt="">
                        <?php echo get_sub_field('ocs_area');?> Acres
                    </li>
                </ul>
            </div>
            <div class="mrkvalue h3">
                <span class="label-title">Market Value:</span> £<?php echo number_format(get_sub_field('ocs_market_value'));?>
            </div>
        </div>
    </div>
   <?php  if( have_rows('ocs_customer_story_images') ){ ?>
    <div class="rightcl">
        <div class="flhlf-owlslider owl-carousel">
         <?php while ( have_rows('ocs_customer_story_images') ) { the_row(); 
         $csi_image = get_sub_field('csi_image'); 
         if($csi_image){
         ?>
            <div class="item">
                <img src="<?php echo $csi_image['url'];?>" alt="<?php echo $csi_image['title'];?>">
            </div>
            <?php } }?>
        </div>
    </div>
 <?php  } ?>
</div>