@php
    $websiteSetting = App\Models\WebsiteSetting::where('is_active', true)->first();
    $social = App\Models\SocialSetting::where('is_active', true)->first();
@endphp
<footer class="footer widget-footer bg-base-dark text-base-white clearfix">
    <div class="cmt-row-wrapper-bg-layer cmt-bg-layer"></div>
    <div class="second-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 widget-area">
                    <div class="widget widget_text clearfix">
                        <div class="footer-logo">
                            @php
                                $logo = optional($websiteSetting)->logo
                                    ? asset('storage/' . $websiteSetting->logo)
                                    : asset('website/images/main-logo.png');
                                $logoWhite = optional($websiteSetting)->logo_white
                                    ? asset('storage/' . $websiteSetting->logo_white)
                                    : asset('website/images/main-logo.png');
                            @endphp
                            <img id="footer-logo-img" class="img-fluid auto_size" height="42" width="132"
                                src="{{ $logoWhite }}" alt="image">

                        </div>
                        <div class="textwidget widget-text">
                            <p align="justify">{{ $websiteSetting->description ?? 'At Dr ITM, we bridge the gap between complex technology and seamless business operations. Our commitment to Value-Driven Excellence ensures scalable, cost-effective solutions that drive superior outcomes for our global partners. ' }}</p>
                        </div>
                        <div class="widget_social_wrapper social-icons pt-40">
                            <h3 class="fs-18 mb-25">Social Info</h3>
                            <ul class="list-inline">
                                @if(!empty($social->facebook_url))
                                    <li>
                                        <a href="{{ $social->facebook_url }}" target="_blank" rel="noopener"
                                            aria-label="facebook">
                                            <i class="icon-facebook"></i>
                                        </a>
                                    </li>
                                @endif

                                @if(!empty($social->twitter_url))
                                    <li>
                                        <a href="{{ $social->twitter_url }}" target="_blank" rel="noopener"
                                            aria-label="twitter">
                                            <i class="icon-twitter"></i>
                                        </a>
                                    </li>
                                @endif

                                @if(!empty($social->linkedin_url))
                                    <li>
                                        <a href="{{ $social->linkedin_url }}" target="_blank" rel="noopener"
                                            aria-label="linkedin">
                                            <i class="icon-linkedin"></i>
                                        </a>
                                    </li>
                                @endif

                                @if(!empty($social->instagram_url))
                                    <li>
                                        <a href="{{ $social->instagram_url }}" target="_blank" rel="noopener"
                                            aria-label="instagram">
                                            <i class="icon-instagram"></i>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 widget-area">
                    <div class="widget widget_cta clearfix">
                        <!-- <h4>{{ $websiteSetting->phone1 ?? '+0022 6544 9977' }}</h4> -->
                        <ul class="widget_contact_wrapper">
                            <li><i class="flaticon-envelope"></i><a
                                    href="mailto:{{ $websiteSetting->email ?? 'info@drit.in' }}"
                                    target="_blank">{{ $websiteSetting->email ?? 'info@drit.in' }}</a>24 x 7
                                Online Support
                            </li>
                            <li><i class="flaticon-pin"></i>{{ $websiteSetting->location ?? 'Mohali' }}</li>
                        </ul>
                        <div class="g-map">
                            <iframe
                                src="https://www.google.com/maps?q={{ urlencode($websiteSetting->location ?? 'Mohali,Punjab,India') }}&output=embed"
                                width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 widget-area">
                    <div class="widget multi_widget clearfix">
                        <!-- <div class="newsletter_widget clearfix">
                            <h3 class="widget-title">Signup for our newsletter</h3>
                            <p>Sign up to our newsletter to get the latest news.</p>
                            <form id="subscribe-form" class="newsletter-form" action="#" data-mailchimp="true">
                                <div class="mailchimp-inputbox clearfix" id="subscribe-content">
                                    <p>
                                        <input type="email" name="email" placeholder="Enter Your Email Address..."
                                            required="">
                                    </p>
                                    <p><button
                                            class="submit cmt-btn cmt-btn-size-md cmt-btn-shape-rounded cmt-btn-style-border cmt-btn-color-skincolor"
                                            type="submit"><i class="icon-right"></i></button></p>
                                </div>
                                <div id="subscribe-msg"></div>
                            </form>
                        </div> -->
                        <div class="widget_nav_menu clearfix">
                            <h3 class="widget-title">Quick links</h3>
                            <ul class="menu-footer-quick-links links-1">
                                <li><a href="{{ route('about-us') }}">About Us</a></li>
                                <li><a href="{{ route('eea') }}">EEA</a></li>
                                <li><a href="{{ route('our-blogs') }}">Our Blogs</a></li>
                                <li><a href="{{ route('contact-us') }}">Contact us</a></li>
                                <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                                <li><a href="{{ route('terms-conditions') }}">Terms and Conditions</a></li>
                            </ul>
                        </div>
                        @php
                            $serviceHeader = App\Models\Service::where('status', 'active')
                                ->orderBy('id', 'desc')
                                ->get();
                        @endphp
                        <div class="widget_nav_menu clearfix">
                            <h3 class="widget-title">Services</h3>
                            <ul class="menu-footer-quick-links links-2">
                                @forelse($serviceHeader as $service)
                                    <li>
                                        <a href="{{ url('service-details/' . $service->slug) }}">
                                            {{ $service->title ?? 'No Name' }}
                                        </a>
                                    </li>
                                @empty
                                    <li>
                                        <a>No Service Found Yet !!</a>
                                    </li>
                                @endforelse

                                <li><a href="https://dritimt.in/" target="_blank">Education </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer-text copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="cpy-text">&copy; <?= date('Y') ?> <a href="{{ route('home') }}">Dr. ITM Private
                            Limited</a> Designed and Developed by <span class=""><a href="http://vibrantick.in/"
                                target="_blank"> Vibrantick Infotech Solutions
                            </a></span>
                </div>
            </div>
        </div>
    </div>
</footer>