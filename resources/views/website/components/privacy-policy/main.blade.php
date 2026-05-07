@php
    $privacyPolicy = App\Models\PrivacyPolicy::where('is_active', true)->first();
@endphp
<section class="cmt-row about-section clearfix">
    <div class="container">
        <!-- row -->
        <div class="row align-items-center">

            <div class="col-xl-12">
                <div class="pl-20 res-1199-pt-40 mb-20 res-1199-mb-0 res-1199-pl-0">
                    <!-- section title -->
                    <div class="section-title">
                        <div class="title-header">
                            <h3>{{ $privacyPolicy->sub_title ?? ' Privacy Policy' }}</h3>
                            <h2 class="title">{{ $privacyPolicy->main_title ?? 'Privacy Policy' }}</h2>
                        </div>
                        <div class="title-desc">
                            <p align="justify">{{ $privacyPolicy->description_1 ?? 'No Data Found Yet !!' }}</p>
                        </div>
                    </div><!-- section title end -->

                </div>
            </div>
        </div><!-- row end -->
    </div>
</section>