{{--
  Template Name: Our Promise Template
--}}

@extends('layouts.app')

@section('content')
    @if(have_rows('our_promise_page_content'))
    @while(have_rows('our_promise_page_content'))
        @php the_row(); @endphp
        @if(get_row_layout() == 'left_image_right_content')
            @include('partials.our-promise.content-after-hero-section')
        @endif
       @if(get_row_layout() == 'card_content')
            @include('partials.our-promise.content-card-content')
        @endif
        
         @if(get_row_layout() == 'content_with_background_image')
            @include('partials.our-promise.content-with-background-image')
        @endif
         @if(get_row_layout() == 'latest_projects')
            @include('partials.our-promise.content-latest-projects')
        @endif
    @endwhile
    @endif
@endsection
