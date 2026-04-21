<header id="masthead" class="header cmt-header-style-02">
    <!-- site-header-menu -->
    <div id="site-header-menu" class="site-header-menu">
        <div class="site-header-menu-inner cmt-stickable-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!--site-navigation -->
                        <div class="site-navigation d-flex align-items-center justify-content-between">
                            <!-- site-branding -->
                            <div class="site-branding me-auto">
                                <a class="home-link" href="{{ route('home') }}" title="Devfox" rel="home">
                                    <img id="logo-img" height="48" width="147" class="img-fluid auto_size"
                                        src="{{ asset('website/images/main-logo.png') }}" alt="logo-img">
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
                                                <a href="">EEA</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="mega-menu-item">
                                        <a href="#" class="mega-menu-link">Our Services</a>
                                        <ul class="mega-submenu">
                                            <li><a href="{{ route('service-details') }}">IT &amp; ITES </a></li>
                                            <li><a href="{{ route('service-details') }}">BPO </a></li>
                                            <li><a href="https://dritimt.in/" target="_blank">Education </a></li>
                                            <li><a href="{{ route('service-details') }}">Digitalization </a></li>
                                            <li><a href="{{ route('service-details') }}">Lifecycle Management </a></li>
                                            <li><a href="{{ route('service-details') }}">Our BPO Services </a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-item">
                                        <a href="#" class="mega-menu-link">Our Technology</a>
                                        <ul class="mega-submenu">
                                            <li><a href="{{ route('technology-details') }}">Overview</a></li>
                                            <li><a href="{{ route('technology-details') }}">Technical Support</a></li>
                                            <li><a href="{{ route('technology-details') }}">Network & Security</a></li>
                                            <li><a href="{{ route('technology-details') }}">Open Source Services</a>
                                            </li>
                                            <li><a href="{{ route('technology-details') }}">Application Development</a>
                                            </li>
                                            <li><a href="{{ route('technology-details') }}">Data Center Services</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-item">
                                        <a href="{{ route('our-clients') }}">Our Clients</a>
                                    </li>
                                    <li class="mega-menu-item">
                                        <a href="{{ route('contact-us') }}">Contact us</a>
                                    </li>
                                </ul>
                            </nav><!-- menu end -->
                            <!-- header_extra -->
                            <div class="header_extra d-flex flex-row align-items-center">
                                <div class="header_btn"><a
                                        class="cmt-btn btn-inline cmt-icon-btn-right cmt-btn-size-md cmt-btn-color-skincolor"
                                        href="contact-us.html">Need A Help<i class="icon-right"></i></a></div>
                                <div class="header_search">
                                    <a href="#" class="btn-default search_btn"><i class="icon-search-1"></i></a>
                                    <div class="header_search_content">
                                        <div class="header_search_content_inner">
                                            <a href="#" class="close_btn"><i class="icon-cancel-2"></i></a>
                                            <form id="searchbox" method="get" action="#">
                                                <input class="search_query" type="text" id="search_query_top" name="s"
                                                    placeholder="Type Your Search..." value="">
                                                <button type="submit" class="btn close-search"><i
                                                        class="icon-search-1"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- header_extra end -->
                        </div><!-- site-navigation end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- site-header-menu end-->

</header><!--header end-->