{{--
  Template Name: Partnership Program Template
--}}

@extends('layouts.app')

@section('content')
    @if(have_rows('partnership_cta_blocks'))
    @while(have_rows('partnership_cta_blocks'))
        @php the_row(); @endphp
        @if(get_row_layout() == 'left_image_right_content')
            @include('partials.partnership-programe.content-after-hero-section')
        @endif

        @if(get_row_layout() == 'whats_included_content')
           @include('partials.partnership-programe.content-whats-included-content')
        @endif
        @if(get_row_layout() == 'partnership_program_image_with_content')
           @include('partials.partnership-programe.content-partnership-program-image_with-content')
        @endif
        @if(get_row_layout() == 'pp_form_section')
           @include('partials.partnership-programe.content-form-section')
        @endif
       
    @endwhile
    @endif
        
@endsection
