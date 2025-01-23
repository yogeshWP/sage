<section class="marketing-imgcnt-sec">
   <div class="container">
      <div class="section-head-wrap">
         <h2><?php echo get_field('cc_title');?></h2>
         <?php echo get_field('cc_excerpt');?>
      </div>
    @if(have_rows('marketing_formula_page_section'))
    @while(have_rows('marketing_formula_page_section'))
        @php the_row(); @endphp
        @if(get_row_layout() == 'left_image_right_content')
            @include('partials.marketing-formula.content-left-image-right-content')
        @endif
        @if(get_row_layout() == 'left_content_right_image')
            @include('partials.marketing-formula.content-left-content-right-image')
        @endif
        
    @endwhile
    @endif
   </div>
</section>
@include('partials.marketing-formula.content-prime-position-cta')
