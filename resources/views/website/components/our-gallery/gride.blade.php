@php
    use App\Models\GalleryImages;

    $galleryImages = GalleryImages::where('status', 'active')->get();
@endphp

<section class="cmt-row padding_bottom_zero-section clearfix">
    <div class="container">
        <div class="row mt_15 mb_15">

            @if($galleryImages->count() > 0)

                @foreach($galleryImages as $image)
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
                        <div class="featured-imagebox featured-imagebox-portfolio style2">
                            <div class="featured-thumbnail">
                                <img
                                    src="{{ asset('storage/' . $image->image) }}"
                                    class="img-fluid"
                                    alt="{{ $image->title ?? 'Gallery Image' }}">
                            </div>
                        </div>
                    </div>
                @endforeach

            @else

                <!-- Fallback Images -->

                <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
                    <div class="featured-imagebox featured-imagebox-portfolio style2">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{ asset('website/images/upload/gallery-09.png') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
                    <div class="featured-imagebox featured-imagebox-portfolio style2">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{ asset('website/images/upload/gallery-10.png') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
                    <div class="featured-imagebox featured-imagebox-portfolio style2">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{ asset('website/images/upload/sm-03.png') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-6 col-sm-6 mb-2">
                    <div class="featured-imagebox featured-imagebox-portfolio style2">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{ asset('website/images/upload/lg-01.png') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
                    <div class="featured-imagebox featured-imagebox-portfolio style2">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{ asset('website/images/upload/sm-01.png') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
                    <div class="featured-imagebox featured-imagebox-portfolio style2">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{ asset('website/images/upload/sm-02.png') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-6 col-sm-6 mb-2">
                    <div class="featured-imagebox featured-imagebox-portfolio style2">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{ asset('website/images/upload/lg-02.png') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-6 co    l-sm-6 mb-2">
                    <div class="featured-imagebox featured-imagebox-portfolio style2">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{ asset('website/images/upload/lg-03.png') }}" alt="">
                        </div>
                    </div>
                </div>

            @endif

        </div>
    </div>
</section>