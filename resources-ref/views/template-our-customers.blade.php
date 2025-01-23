{{--
  Template Name: Our Customers Template
--}}

@extends('layouts.app')

@section('content')
    @if(have_rows('our_customers_section'))
        <section class="customers-story-sec">
    @while(have_rows('our_customers_section'))
        @php the_row(); @endphp
        @if(get_row_layout() == 'our_customer_stories')
            @include('partials.our-customers.content-our-customer-stories')
        @endif
       @if(get_row_layout() == 'middle_content_cta')
            @include('partials.our-customers.content-middle-content-cta')
       @endif
    @endwhile
       </section>
    @endif
@endsection
