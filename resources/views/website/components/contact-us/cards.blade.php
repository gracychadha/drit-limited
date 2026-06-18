@php
    $websiteSetting = App\Models\WebsiteSetting::where('is_active', true)->first();
    $social = App\Models\SocialSetting::where('is_active', true)->first();
@endphp
<section class="cmt-row conatct-section bg-img6 clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <!-- section-title -->
                <div class="section-title title-style-center_text">
                    <div class="title-header">
                        <h3>Your Business, Our Support—Let’s Talk
                        </h3>
                        <h2 class="title">The Backbone of Your Contact Center Starts Here. Connect with Our Experts.
                        </h2>
                    </div>
                </div><!-- section-title end -->
            </div>
        </div>
        <div class="row">
            <!-- <div class="col-lg-4 col-md-6">
              
                <div
                    class="featured-icon-box icon-align-before-content p-25 bg-base-white border border-color border-rad_5">
                    <div class="featured-icon">
                        <div
                            class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-darkgrey cmt-icon_element-size-sm cmt-icon_element-style-round">
                            <i class="flaticon flaticon-phone-call"></i>
                        </div>
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <h2 class="fs-15 fw-normal bodyfont-color mb-5">Phone Number</h2>
                            <h3 class="fs-24 text-base-skin mb-0">{{ $websiteSetting->phone1 ?? '+0022 6544 9977' }}</h3>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="col-lg-6 col-md-6">
                <!-- featured-icon-box -->
                <div
                    class="featured-icon-box icon-align-before-content p-25 bg-base-white border border-color border-rad_6">
                    <div class="featured-icon">
                        <div
                            class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-darkgrey cmt-icon_element-size-sm cmt-icon_element-style-round">
                            <i class="flaticon flaticon-envelope"></i>
                        </div>
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <h2 class="fs-15 fw-normal bodyfont-color mb-0">Any Questions? Email us</h2>
                            <h3 class="fs-15 fw-500 mb-0">{{ $websiteSetting->email ?? 'info@drit.in' }} | hr@drit.in |
                                Hr.noida@drit.in </h3>
                        </div>
                    </div>
                </div><!-- featured-icon-box end -->
            </div>
            <div class="col-lg-6 col-md-6">
                <!-- featured-icon-box -->
                <div
                    class="featured-icon-box icon-align-before-content p-25 bg-base-white border border-color border-rad_6">
                    <div class="featured-icon">
                        <div
                            class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-darkgrey cmt-icon_element-size-sm cmt-icon_element-style-round">
                            <i class="flaticon flaticon-pin"></i>
                        </div>
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <h2 class="fs-15 fw-500 mb-0"><b>Mohali
                                    :</b> Dr IT Group, Plot No: 4, IT Park, Sector-67 Mohali
                                <br>
                                <b>Noida :</b>
                               Dr ITM Pvt Ltd  C 56A/10&11, sector 62
                                Noida - 201301
                            </h2>
                        </div>
                    </div>
                </div><!-- featured-icon-box end -->
            </div>
            <div class="col-lg-12">
                <div class="mt-20 text-center">
                    <p><span class="fs-20 fw-600 text-base-dark"> </span>A Trusted Growth Partner for <span
                            class="text-base-skin fs-18"><strong><i>38k+</i></strong></span> Brands</p>
                </div>
            </div>
        </div>
    </div>
</section>