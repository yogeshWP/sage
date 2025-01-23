{{--
  Template Name: Our People Template
--}}

@extends('layouts.app')

@section('content')
    @if(have_rows('our_people_page_content'))
    @while(have_rows('our_people_page_content'))
        @php the_row(); @endphp
        @if(get_row_layout() == 'left_image_right_content')
            @include('partials.our-people.content-after-hero-section')
        @endif
        @if(get_row_layout() == 'our_team')
           @include('partials.our-people.content-our-team')
        @endif
        
    @endwhile
    @endif
@endsection
