@extends('website.layout.app')
@section('title', 'About Us | Dr. IT Limited')
@section('content')

    @include('website.components.about-us.banner')
    @include('website.components.about-us.about-section')
    @include('website.components.about-us.counter')
    @include('website.components.about-us.why-choose-us-section')
    @include('website.components.common.testimonial-section')
  
  
@endsection