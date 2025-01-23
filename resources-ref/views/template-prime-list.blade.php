{{--
  Template Name: Prime List Template
--}}

@extends('layouts.app')

@section('content')
    @if(have_rows('the_prime_list_content'))
    @while(have_rows('the_prime_list_content'))
        @php the_row(); @endphp
        @if(get_row_layout() == 'left_image_right_content')
            @include('partials.prime-list.content-after-hero-section')
        @endif
        @if(get_row_layout() == 'box_content')
           @include('partials.prime-list.content-box-content')
        @endif
        @if(get_row_layout() == 'form_section')
           @include('partials.prime-list.content-form-section')
        @endif
        
    @endwhile
    @endif
@endsection
