@extends('website.layout.app')
@section('title', 'Home | Dr. ITM Private Limited')
@section('content')
    @include('website.components.index.banner')
    @include('website.components.index.certification-marquee')
    @include('website.components.index.about-us')

    @include('website.components.index.leadership-message')
    @include('website.components.index.team-section')

    @include('website.components.index.services-section')
    @include('website.components.home.work-section')

   @include('website.components.index.review-section')

    @include('website.components.about-us.why-choose-us-section')
    @include('website.components.index.cta')
    @include('website.components.index.testimonial')

    @include('website.components.index.industries-serve')
@endsection
@push('scripts')

    <script>



        window.onload = function () {

            const popup = document.getElementById('landingPopup');

            popup.style.display = 'flex';

            // Auto close after 5 seconds
            setTimeout(function () {
                popup.style.display = 'none';
            }, 3000);

        };

        document.querySelector('.popup-close').addEventListener('click', function () {
            document.getElementById('landingPopup').style.display = 'none';
        });
    </script>

@endpush