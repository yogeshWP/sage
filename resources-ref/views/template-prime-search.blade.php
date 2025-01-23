{{--
  Template Name: Prime Search Template
--}}

@extends('layouts.app')

@section('content')
    @if(have_rows('prime_search_content'))
    @while(have_rows('prime_search_content'))
        @php the_row(); @endphp
        @if(get_row_layout() == 'left_image_right_content')
            @include('partials.prime-search.content-after-hero-section')
        @endif
        @if(get_row_layout() == 'how_we_do_it')
           @include('partials.prime-search.content-how-we-do-it')
        @endif
         @if(get_row_layout() == 'form_section')
           @include('partials.prime-search.content-form-section')
        @endif
    @endwhile
    @endif
@endsection
