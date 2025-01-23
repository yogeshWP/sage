@extends('layouts.app')

@section('content')
<?php  
$journalscategory = get_queried_object();
$othercategorized_term_id = 11;
$taxonomy = 'journals-categories';
$journalsargs = array(
'show_option_all'    => '',
'show_count'         => 1,
'hide_empty'         => 1,
'order'      => 'DESC',
 'exclude'         =>$othercategorized_term_id,
'taxonomy'           => $taxonomy
);
$journalscategorylist = get_terms($taxonomy, $journalsargs);

?>
<section class="journal-hero-section">
 <div class="container">
  <h1 class="page-title">The Journal</h1>
  <div class="blog-list-filter">
    <ul>
      <li><a href="/journals">All</a></li>
      <?php if($journalscategorylist){
        foreach($journalscategorylist as $journalscategorylistval){
        $category_link = get_category_link($journalscategorylistval->term_id);  
      ?>
      <li><a href="<?php echo $category_link; ?>" <?php if ($journalscategorylistval->term_id == $journalscategory->term_id) { ?> class="active" <?php } ?>><?php echo $journalscategorylistval->name; ?></a></li>
      <?php }} ?>
       <li><a href="/journals-categories/other/" <?php if($journalscategory->term_id==11){?> class="active" <?php } ?>>Other</a></li>
    </ul>
  </div>
</div>
</section>
<?php 
 $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

$journalPosts = array('post_type' => 'journals', 'order' => 'DESC', 'showposts' => '9', 'paged' => $paged,'tax_query' => [
      [
        'taxonomy' => $taxonomy,
        'terms' => $journalscategory->term_id,
        'include_children' => false 
      ],
    ]);
$journalPostsQuery = new WP_Query($journalPosts);

?>
<section class="blog-list-sec">
  <div class="container">
<?php 
$featureposthtml='';
$withoutfeatureposthtml='';
if ($journalPostsQuery->have_posts()) { ?>
    <div class="blog-list-row">
      <?php while ($journalPostsQuery->have_posts()) { $journalPostsQuery->the_post();
        $featurepost=get_field('featured',get_the_id());
        $urlblog = wp_get_attachment_url(get_post_thumbnail_id(get_the_id()));
            $categories = wp_get_post_terms(get_the_id(),$taxonomy);
            $category_names = array();
            if (!empty($categories) && !is_wp_error($categories)) {
              foreach ($categories as $category) {
              $category_names[] = $category->name;
              }
            }

            if($featurepost==1){
              
              $featureposthtml.='<div class="blog-list-item feature-blog-item">';
         if($urlblog){
        $featureposthtml.='<div class="blog-image-wrap">'; 
          if($featurepost==1){
          $featureposthtml.='<img src="'.$urlblog.'" alt="'.get_the_title().'" width="436" height="412">';
           }else{ 
          $featureposthtml.='<img src="'.$urlblog.'" alt="'.get_the_title().'" >';  
        } 
        $featureposthtml.='</div>';
       } 
        $featureposthtml.='<div class="blog-content-wrap">
          <ul class="blog-tp-tag">';
            if($category_names){
            $featureposthtml.='<li>'.implode(' | ',$category_names).'</li>';
          } 
            $featureposthtml.='<li>'.get_the_date('jS F Y').'</li>
          </ul> 
          <div class="blog-title-block">';
             if($featurepost==1){
          $featureposthtml.='<span class="fea-txt">Featured</span>';
           }   
            $featureposthtml.='<a href="'.get_the_permalink().'"><h3>'.get_the_title().'</h3></a>
          </div>';
          if($featurepost==1){
          $featureposthtml.='<p>'.get_the_excerpt().'</p>';
         } 
          $featureposthtml.='<div class="more-btn">
            <a href="'.get_the_permalink().'" class="read-more-link">Read Now</a>
          </div>
        </div>
      </div>';

         }else{  
          $withoutfeatureposthtml.='<div class="blog-list-item">';
         if($urlblog){
        $withoutfeatureposthtml.='<div class="blog-image-wrap">'; 
          if($featurepost==1){
          $withoutfeatureposthtml.='<img src="'.$urlblog.'" alt="'.get_the_title().'" width="436" height="412">';
           }else{ 
          $withoutfeatureposthtml.='<img src="'.$urlblog.'" alt="'.get_the_title().'" >';  
        } 
        $withoutfeatureposthtml.='</div>';
       } 
        $withoutfeatureposthtml.='<div class="blog-content-wrap">
          <ul class="blog-tp-tag">';
            if($category_names){
            $withoutfeatureposthtml.='<li>'.implode(' | ',$category_names).'</li>';
          } 
            $withoutfeatureposthtml.='<li>'.get_the_date('jS F Y').'</li>
          </ul> 
          <div class="blog-title-block">';
            
            $withoutfeatureposthtml.='<a href="'.get_the_permalink().'"><h3>'.get_the_title().'</h3></a>
          </div>';
          
          $withoutfeatureposthtml.='<div class="more-btn">
            <a href="'.get_the_permalink().'" class="read-more-link">Read Now</a>
          </div>
        </div>
      </div>';

       } } 
        echo $featureposthtml.''.$withoutfeatureposthtml;
        ?>
    </div>
     <?php if($journalPostsQuery->max_num_pages >1){ ?>   
      <div class="pagintaion newspagination"> 
      <?php
      $big = 999999999; // need an unlikely integer
      $current_page = max(1, get_query_var('paged'));
      $total_pages = $journalPostsQuery->max_num_pages;

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
  <?php }else{?>

    <p>Data not found</p>
  <?php } ?>
  </div>
</section>
@endsection

