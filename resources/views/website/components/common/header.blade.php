<header id="masthead" class="header cmt-header-style-02">
    <!-- site-header-menu -->
    <div id="site-header-menu" class="site-header-menu">
        <div class="site-header-menu-inner cmt-stickable-header">
            <div class="container">
                <div class="row">
                    @php
                        $websiteSetting = App\Models\WebsiteSetting::where('is_active', true)->first();
                        $socialSetting = App\Models\SocialSetting::where('is_active', true)->first();
                    @endphp
                    <div class="col-lg-12">
                        <!--site-navigation -->
                        <div class="site-navigation d-flex align-items-center justify-content-between">
                            <!-- site-branding -->
                            <div class="site-branding me-auto">
                                @php
                                    $logo = optional($websiteSetting)->logo
                                        ? asset('storage/' . $websiteSetting->logo)
                                        : asset('website/images/main-logo.png');
                                    $logoWhite = optional($websiteSetting)->logo_white
                                        ? asset('storage/' . $websiteSetting->logo_white)
                                        : asset('website/images/main-logo.png');
                                @endphp
                                <a class="home-link" href="{{ route('home') }}" title="Devfox" rel="home">
                                    <img id="logo-img" height="48" width="147" class="img-fluid auto_size"
                                        src="{{ $logo }}" alt="logo-img">
                                </a>
                            </div><!-- site-branding end -->
                            <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                <span class="menubar-box">
                                    <span class="menubar-inner"></span>
                                </span>
                            </div>
                            <!-- menu -->
                            <nav class="main-menu menu-mobile" id="menu">
                                <ul class="menu">
                                    <li class="mega-menu-item">
                                        <a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="mega-menu-item">
                                        <a href="#" class="mega-menu-link">Company</a>
                                        <ul class="mega-submenu">
                                            <li class="mega-menu-item">
                                                <a href="{{ route('about-us') }}">About Us</a>
                                            </li>
                                            <li class="mega-menu-item">
                                                <a href="{{ route('eea') }}">EEA</a>
                                            </li>

                                        </ul>
                                    </li>
                                    @php
                                        $serviceHeader = App\Models\Service::where('status', 'active')
                                            ->orderBy('id', 'desc')
                                            ->get();
                                    @endphp
                                    <li class="mega-menu-item">
                                        <a href="#" class="mega-menu-link">Our Services</a>
                                        <ul class="mega-submenu">
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
                                    </li>
                                    @php
                                        $technologyHeader = App\Models\Technology::where('status', 'active')
                                            ->orderBy('id', 'desc')
                                            ->get();
                                    @endphp

                                    <li class="mega-menu-item">
                                        <a href="#" class="mega-menu-link">Our Technology</a>

                                        <ul class="mega-submenu">
                                            @forelse($technologyHeader as $technology)
                                                <li>
                                                    <a href="{{ url('technology-details/' . $technology->slug) }}">
                                                        {{ $technology->name ?? 'No Name' }}
                                                    </a>
                                                </li>
                                            @empty
                                                <li>
                                                    <p>No Technology Found Yet !!</p>
                                                </li>
                                            @endforelse
                                        </ul>
                                    </li>
                                    <li class="mega-menu-item">
                                        <a href="{{ route('our-clients') }}">Our Clients</a>
                                    </li>
                                    <li class="mega-menu-item d-xl-none d-lg-none">
                                        <a href="{{ route('contact-us') }}">Contact us</a>
                                    </li>
                                </ul>
                            </nav><!-- menu end -->
                            <!-- header_extra -->
                            <div class="header_extra d-flex flex-row align-items-center">
                                <div class="header_btn"><a
                                        class="cmt-btn btn-inline cmt-icon-btn-right cmt-btn-size-md cmt-btn-color-skincolor"
                                        href="{{ route('contact-us') }}">Need A Help<i class="icon-right"></i></a></div>

                            </div><!-- header_extra end -->
                        </div><!-- site-navigation end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- site-header-menu end-->

</header><!--header end-->