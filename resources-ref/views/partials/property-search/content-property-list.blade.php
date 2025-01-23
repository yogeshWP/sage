<?php 
$postcode=(isset($_GET['postcode']))?$_GET['postcode']:'';
$radius=(isset($_GET['radius']))?$_GET['radius']:'';
$min_budget=(isset($_GET['min-budget']))?$_GET['min-budget']:'';
$min_bedrooms=(isset($_GET['min-bedrooms']))?$_GET['min-bedrooms']:'';
$orderby=(isset($_GET['orderby']))?$_GET['orderby']:'';
$post_count = 8;
$propertieslist = propertyfilter($postcode,$min_budget, $min_bedrooms, 8,$radius); 
// error_reporting(0);
?>
<section class="property-search-sec">
   <div class="container">
      <div class="property-search-wrp">
         <?php 
        $i=1;
        if ($propertieslist->have_posts()) {
        while ($propertieslist->have_posts()) { $propertieslist->the_post();
          $propertyimage = wp_get_attachment_url(get_post_thumbnail_id(get_the_id()));
         $fields = get_fields($propertieslist->ID);
          ?>
         <div class="property-search-card">
            <div class="image-wrp">
               <?php if($propertyimage){?>
               <a href="<?php echo get_the_permalink();?>">
               <div class="image">
                  <img src="<?php echo  $propertyimage;?>" alt="<?php echo get_the_title();?>">
               </div>
               </a>
              <?php }
               $status = property_status( $fields["marketing_type"], $fields["sale_status"] ); 
               if($status!=''){
               ?>
               <div class="under-offer <?php echo $status['value'];?>">
                  <span><?php echo $status['label'];?></span>
               </div>
            <?php } ?>
            </div>
            <?php 
            $addtitle='';
           // print_r($fields["property_location"]);exit;
            if($fields["property_location"]){

                  if(isset($fields["property_location"]["city"]) && isset($fields["property_location"]["post_code"])){
                     $addtitle=(($fields["property_location"]["city"]) )?$fields["property_location"]["city"].' | '. $fields["property_location"]["post_code"]:'';
                  }else{

                     $addtitle=$fields["property_location"]["city"];
                  }

            }?>
            <div class="content">
               <ul>
                  <li><?php echo $addtitle; ?></li>
                  <li>£<?php echo number_format(get_field('price')); ?></li>
               </ul>
               <?php $property_type=get_field('property_type'); ?>
               <ul>
                  <a href="<?php echo get_the_permalink();?>"><li><?php echo get_the_title();?></li></a>
                  <?php if($property_type['property_type_ownership']!=''){?>
                  <li><?php echo $property_type['property_type_ownership'];?></li>
               <?php } ?>
               </ul>
            </div>
         </div>
         <?php if($i==5){?>
         <?php $journals = array('post_type' => 'journals', 'order' => 'DESC', 'showposts' => '1','post_status'    => 'publish','meta_key' => 'featured', 'meta_value'    => '1');
         $journalslist = new WP_Query($journals);
         if ($journalslist->have_posts()) {
        while ($journalslist->have_posts()) { $journalslist->the_post();?>
         <div class="property-search-card deferent">
            <div class="top-heading">
               <p>The Journal</p>
               <h2><?php echo get_the_title();?></h2>
            </div>
            <div class="bottom-content">
               <a href="<?php echo get_the_permalink();?>" class="action-btn secondary-btn">Read More</a>
            </div>
         </div>
         <?php } } }
         $i++;
          } }else{?>
             <div class="no-results">
              <h4>Sorry, no properties were found.</h4>
          </div>
         <?php  }  wp_reset_postdata();?>
      </div>
       <?php if($propertieslist->max_num_pages >1){ ?>   
      <div class="pagintaion"> 
      <?php
      $big = 999999999; // need an unlikely integer
      $current_page = max(1, get_query_var('paged'));
      $total_pages = $propertieslist->max_num_pages;

      $pagination_links = paginate_links(array(
          'base' => str_replace($big, '%#%', get_pagenum_link($big)),
          'format' => '?paged=%#%',
          'current' => $current_page,
          'total' => $total_pages,
          'type' => 'array',
          'prev_text' => '',
          'next_text' => ''
      ));

      if ($pagination_links) {
          echo '<ul class="pagination">';

          // Previous Page Link
          if ($current_page > 1) {
              echo '<li class="prev"><a href="' . get_pagenum_link($current_page - 1) . '">Prev</a></li>';
          } else {
              echo '<li class="prev disabled"><span>Prev</span></li>';
          }

          // Pagination Links
          foreach ($pagination_links as $link) {
              echo '<li>' . $link . '</li>';
          }

          // Next Page Link
          if ($current_page < $total_pages) {
              echo '<li class="next"><a href="' . get_pagenum_link($current_page + 1) . '">Next</a></li>';
          } else {
              echo '<li class="next disabled"><span>Next</span></li>';
          }

          echo '</ul>';
      }
      ?>

      </div>
      <?php } ?>
   </div>
</section>