@extends('website.layout.app')
@section('title', 'Home | Dr. ITM Private Limited')
@section('content')
    @include('website.components.home.banner')
    @include('website.components.home.benefit-section')
    @include('website.components.home.about-section')

    @include('website.components.home.team')
    @include('website.components.home.work-section')


    @include('website.components.home.case-studies')
    @include('website.components.home.blog-section')
@endsection
@push('scripts')
    <!-- <script>
                var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?86687';
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = url;
                var options = {
                    "enabled": true,
                    "chatButtonSetting": {
                        "backgroundColor": "#2ACA45;",
                        "ctaText": "",
                        "borderRadius": "25",
                        "marginLeft": "20",
                        "marginBottom": "30",
                        "marginRight": "50",
                        "position": "left"
                    },
                    "brandSetting": {
                        "brandName": "Dr ITM Limied",
                        "brandSubTitle": "Typically replies within a day",
                        "brandImg": "../website/images/fav.png",
                        "welcomeText": "Hi there!\nHow can I help you?",
                        "messageText": "Hello, I have a question about ",
                        "backgroundColor": "#2ACA45;",
                        "ctaText": "Start Chat",
                        "borderRadius": "25",
                        "autoShow": false,
                        "phoneNumber": ""
                    }
                };
                s.onload = function () {
                    CreateWhatsappChatWidget(options);
                };
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            </script> -->
@endpush