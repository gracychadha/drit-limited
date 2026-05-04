@extends('website.layout.app')
@section('title', 'Home | Dr. IT Limited')
@section('content')
    @include('website.components.home.banner')
    @include('website.components.home.benefit-section')
    @include('website.components.home.about-section')
    
    @include('website.components.home.team')
    @include('website.components.home.work-section')
    

    @include('website.components.home.case-studies')
    @include('website.components.home.blog-section')
@endsection