@php
    $websiteSetting = App\Models\WebsiteSetting::where('is_active', true)->first();
    $social = App\Models\SocialSetting::where('is_active', true)->first();
@endphp
<section class="cmt-row padding_top_zero-section bg-layer-equal-height clearfix">
    <div class="container">
        <!-- row end -->
        <div class="row align-items-center">

            <div class="col-lg-7">
                <div class="pl-10 res-991-pl-0 res-991-pt-40">
                    <!-- section title -->
                    <div class="section-title">
                        <div class="title-header">
                            <h3>Join Our Growing Team</h3>
                            <h2 class="title">Explore Exciting Career Opportunities and Build Your Future With Us.</h2>
                        </div>
                    </div><!-- section title end -->
                    <form id="contact-form" action="{{ route('career.application.store') }}" method="POST"
                        class="query_form wrap-form clearfix"  enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    <span class="text-input">
                                        <input name="name" type="text" placeholder="Full Name" required>
                                    </span>
                                </label>
                            </div>

                            <div class="col-md-6">
                                <label>
                                    <span class="text-input">
                                        <input name="email" type="email" placeholder="Email Address" required>
                                    </span>
                                </label>
                            </div>

                            <div class="col-md-6">
                                <label>
                                    <span class="text-input">
                                        <input name="phone" type="text" placeholder="Phone Number"
                                            pattern="[6-9]{1}[0-9]{9}" maxlength="10" required>
                                    </span>
                                </label>
                            </div>

                            <div class="col-md-6">
                                <label>
                                    <span class="text-input select-option">
                                        <select name="specialization" required>
                                            <option value="">Specialization</option>
                                            <option value="Customer Support Executive">Customer Support Executive
                                            </option>
                                            <option value="Telecaller">Telecaller</option>
                                            <option value="Technical Support Executive">Technical Support Executive
                                            </option>
                                            <option value="Team Leader">Team Leader</option>
                                            <option value="HR Executive">HR Executive</option>
                                            <option value="Business Development Executive">Business Development
                                                Executive</option>
                                        </select>
                                    </span>
                                </label>
                            </div>

                            <div class="col-md-6">
                                <label>
                                    <span class="text-input select-option">
                                        <select name="experience" required>
                                            <option value="">Experience</option>
                                            <option value="Fresher">Fresher</option>
                                            <option value="0-1 Years">0-1 Years</option>
                                            <option value="1-3 Years">1-3 Years</option>
                                            <option value="3-5 Years">3-5 Years</option>
                                            <option value="5+ Years">5+ Years</option>
                                        </select>
                                    </span>
                                </label>
                            </div>

                            <div class="col-md-6">
                                <label>
                                    <span class="text-input">
                                        <input type="file" name="resume" accept=".pdf,.doc,.docx" id="resume" required>
                                    </span>
                                </label>
                            </div>

                            <div class="col-md-12">
                                <label>
                                    <span class="text-input">
                                        <textarea name="message" rows="4"
                                            placeholder="Tell us about yourself, your skills, or why you'd like to join our team"></textarea>
                                    </span>
                                </label>
                            </div>

                            <!-- recaptcha hidden input -->
                            <input type="hidden" name="g-recaptcha-response" id="recaptcha-token">

                            <div class="col-md-12">
                                <button
                                    class="submit cmt-btn btn-default cmt-icon-btn-left cmt-btn-size-md cmt-btn-color-dark mt-5"
                                    type="submit">
                                    <i class="icon-right"></i>
                                    <span>Apply Now</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="cmt-bg cmt-col-bgcolor-yes bg-base-dark cmt-bg border-rad_5 overflow-hidden spacing-6">
                    <div class="cmt-col-wrapper-bg-layer cmt-bg-layer bg-base-dark">
                        <div class="cmt-col-wrapper-bg-layer-inner"></div>
                    </div>
                    <div class="layer-content">
                        <!-- section title -->
                        <!-- section title -->
                        <div class="section-title">
                            <div class="title-header">
                                <h3>We're Hiring</h3>
                                <h2 class="title">
                                    Shape Your Future With DRITM BPO
                                </h2>
                            </div>
                            <div class="title-desc">
                                <p>
                                    Discover opportunities to grow, learn, and make an impact. Join a dynamic workplace
                                    where innovation, collaboration, and career development are at the heart of
                                    everything we do.
                                </p>
                            </div>
                        </div>
                        <!-- section title end --><!-- section title end -->
                        <div class="g-map mt-30" id="map">
                            <iframe
                                src="https://www.google.com/maps?q={{ urlencode($websiteSetting->location ?? 'Mohali,Punjab,India') }}&output=embed"
                                title="London Eye, London, United Kingdom"
                                aria-label="London Eye, London, United Kingdom"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>