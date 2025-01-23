{{--
  Template Name: Property Search Template
--}}

@extends('layouts.app')

@section('content')
       @include('partials.home.content-search-property')
       @include('partials.property-search.content-property-list')
       @include('partials.property-search.content-prime-list')
@endsection
