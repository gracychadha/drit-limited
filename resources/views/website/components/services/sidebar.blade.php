<div class="col-lg-4 widget-area sidebar-left">
    <aside class="widget widget-nav-menu with-title">
        <h3 class="widget-title">Departments</h3>
        <ul>
            <li><a href="{{ route('service-details') }}"> IT & ITES </a></li>
            <li class="active"><a href="{{ route('service-details') }}"> BPO </a></li>
            <li><a href="{{ route('service-details') }}"> Education </a></li>
            <li><a href="{{ route('service-details') }}"> Digitalization </a></li>
            <li><a href="{{ route('service-details') }}"> Lifecycle Management </a></li>
            <li><a href="{{ route('service-details') }}"> Our BPO Services </a></li>
        </ul>
    </aside>
    <aside class="widget widget-banner with-title">
        <div class="cmt-col-bgcolor-yes bg-base-skin text-base-white col-bg-img-five cmt-col-bgimage-yes cmt-bg">
            <div class="cmt-col-wrapper-bg-layer cmt-bg-layer bg-base-skin">
                <div class="cmt-col-wrapper-bg-layer-inner bg-base-skin"></div>
            </div>
            <div class="layer-content text-center">
                <div class="icon-img mb-25">
                    <img src="{{ asset('website/images/icon-service.png') }}" alt="icon-service.png">
                </div>
                <h3>For Tommorow We Can Take Action Today!</h3>
                <a class="cmt-btn btn-inline cmt-icon-btn-right cmt-btn-size-md cmt-btn-color-white"
                    href="contact-us.html">Join With Us<i class="icon-right"></i></a>
            </div>
        </div>
    </aside>
    <aside class="widget widget-download with-title">
        <h3 class="widget-title">Download</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
        <div class="d-flex">
            <div class="download_block mr-15">
                <a href="#">
                    <div class="download_img_icon">
                        <img class="img-fluid auto_size" width="59" height="72"
                            src="{{ asset('website/images/icon.png') }}" alt="download-pdf-img">
                    </div>
                    <span>PDF Presentation</span>
                </a>
            </div>
            <div class="download_block ml-15">
                <a href="#">
                    <div class="download_img_icon">
                        <img class="img-fluid auto_size" width="59" height="72"
                            src="{{ asset('website/images/icon.png') }}" alt="download-pdf-img">
                    </div>
                    <span>PDF Presentation</span>
                </a>
            </div>
        </div>
    </aside>
</div>