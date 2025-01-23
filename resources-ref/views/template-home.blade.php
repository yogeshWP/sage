{{--
  Template Name: Home Page Template
--}}

@extends('layouts.app')

@section('content')
   @include('partials.home.content-search-property')
  @if(have_rows('home_page_content'))
    @while(have_rows('home_page_content'))
        @php the_row(); @endphp

        @if(get_row_layout() == 'left_content_right_image_slider')
            @include('partials.home.content-left-content-right-image-slider')
        @endif
         @if(get_row_layout() == 'content_with_background_image')
            @include('partials.home.content-with-background-image')
        @endif
        @if(get_row_layout() == 'left_image_right_content')
            @include('partials.home.content-left-image-right-content')
        @endif
        @if(get_row_layout() == 'our_people')
            @include('partials.home.content-our-people')
        @endif
        @if(get_row_layout() == 'right_content_left_image')
            @include('partials.home.content-right-content-left-image')
        @endif
        @if(get_row_layout() == 'testomonial')
            @include('partials.home.content-testomonial')
        @endif
        @if(get_row_layout() == 'book_an_appraisal')
            @include('partials.home.content-book-an-appraisal')
        @endif
    @endwhile
@endif

@endsection

