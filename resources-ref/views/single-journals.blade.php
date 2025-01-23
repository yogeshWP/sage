@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
<?php  
$taxonomy = 'journals-categories';
$post_id = get_the_id();
$categories = wp_get_post_terms($post_id,$taxonomy);

$category_names = array();
$similercategories = array();
if (!empty($categories) && !is_wp_error($categories)) {
foreach ($categories as $category) {
$category_names[] = $category->name;
$similercategories[] = $category->term_id;
}
}

?>
          <section class="blog-post-wrapper">
            <div class="inner-banner-grybg">
             <div class="container">
               <div class="blog-page-content">
                <div class="back-blog">
                 <a href="/journals" class="back-blog-link">Back to blog</a>
               </div>
               <h1 class="single-blog-title"><?php echo get_the_title();?></h1>
               <ul class="single-blog-tp-tag">
                <?php if($category_names){?>
                <li><?php echo implode(' | ',$category_names);?></li>
                <?php } ?>
                <li><?php echo get_the_date('jS F Y'); ?></li>
              </ul>
             <?php the_content();?>
           </div>
         </div>
        </div>
        </div>
        </section>
    <?php 
   
$journalPosts = array('post_type' => 'journals','order' => 'DESC', 'showposts' => '3','post__not_in' => [$post_id],'tax_query' => [
      [
        'taxonomy' => $taxonomy,
        'terms' => $similercategories,
        'include_children' => false 
      ],
    ]);
$journalPostsQuery = new WP_Query($journalPosts);
    if($journalPostsQuery->have_posts()){
    ?>
        <section class="blog-list-sec blog-post-sec">
            <div class="container">
                  <div class="heading">
                     <h2>Similar Posts</h2>
                  </div>
                    <div class="blog-list-row">
                       <?php while ($journalPostsQuery->have_posts()) { $journalPostsQuery->the_post(); 
                        $featurepost=get_field('featured',get_the_id());
                        $urlblog = wp_get_attachment_url(get_post_thumbnail_id(get_the_id()));
                        $categoriesnames = wp_get_post_terms(get_the_id(),$taxonomy);
                        $category_names1 = array();
                        if (!empty($categoriesnames) && !is_wp_error($categoriesnames)) {
                            foreach ($categoriesnames as $category) {
                            $category_names1[] = $category->name;
                            }
                        }
                      ?>
                      <div class="blog-list-item ">
                        <?php if($urlblog){?>
                            <div class="blog-image-wrap"> 
                              <?php if($featurepost==1){?>
                                  <img src="<?php echo $urlblog;?>" alt="<?php echo get_the_title();?>" width="433" height="412">
                              <?php }else{ ?>
                                  <img src="<?php echo $urlblog;?>" alt="<?php echo get_the_title();?>" >  
                              <?php  } ?>
                          </div>
                      <?php } ?>
                      <div class="blog-content-wrap">
                          <ul class="blog-tp-tag">
                            <?php if($category_names1){?>
                                <li><?php echo implode(' | ',$category_names1);?></li>
                            <?php } ?>
                            <li><?php echo get_the_date('jS F Y'); ?></li>
                        </ul> 
                        <div class="blog-title-block">
                            <a href="<?php echo get_the_permalink();?>"><h3><?php echo get_the_title();?></h3></a>
                        </div>
                      <div class="more-btn">
                        <a href="<?php echo get_the_permalink();?>" class="read-more-link">Read Now</a>
                    </div>
                </div>
            </div> 
        <?php } ?>
            </div>
          </div>
        </section>
    <?php } ?>
  @endwhile
@endsection
