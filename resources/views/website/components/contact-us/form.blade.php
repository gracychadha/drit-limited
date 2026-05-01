<section class="cmt-row padding_top_zero-section bg-layer-equal-height clearfix">
    <div class="container">
        <!-- row end -->
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="cmt-bg cmt-col-bgcolor-yes bg-base-dark cmt-bg border-rad_5 overflow-hidden spacing-6">
                    <div class="cmt-col-wrapper-bg-layer cmt-bg-layer bg-base-dark">
                        <div class="cmt-col-wrapper-bg-layer-inner"></div>
                    </div>
                    <div class="layer-content">
                        <!-- section title -->
                        <div class="section-title">
                            <div class="title-header">
                                <h3>Need Some Advice?</h3>
                                <h2 class="title">Feel free to contact Devfox!</h2>
                            </div>
                            <div class="title-desc">
                                <p>Devfox IT Solutions pride on world class customer service. To help you contact the
                                    right department for your query we’ve put it all in one central place for you</p>
                            </div>
                        </div><!-- section title end -->
                        <div class="g-map mt-30" id="map">
                            <iframe
                                src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&t=m&z=10&output=embed&iwloc=near"
                                title="London Eye, London, United Kingdom"
                                aria-label="London Eye, London, United Kingdom"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="pl-10 res-991-pl-0 res-991-pt-40">
                    <!-- section title -->
                    <div class="section-title">
                        <div class="title-header">
                            <h3>Need Some Advice?</h3>
                            <h2 class="title">Contact Us To Learn More.</h2>
                        </div>
                    </div><!-- section title end -->
                    <form id="contact-form" action="{{ route('contact-us.store') }}" method="POST"
                        class="query_form wrap-form clearfix">
                        <div class="row">
                            <div class="col-md-6">
                                <label>
                                    <span class="text-input"><input name="name" type="text" value=""
                                            placeholder="First Name" required="required"></span>
                                </label>
                            </div>

                            <div class="col-md-6">
                                <label>
                                    <span class="text-input"><input name="email" type="text" value=""
                                            placeholder="Email Address" required="required"></span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label>
                                    <span class="text-input"><input name="phone" type="text"
                                            placeholder="Enter Phone Numner" pattern="[6-9]{1}[0-9]{9}" maxlength="10"
                                            required></span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label>
                                    <span class="text-input select-option">
                                        <select name="enquiry_for">
                                            <option value="Experience Design">Experience Design</option>
                                            <option value="IT Consultancy">IT Consultancy</option>
                                        </select>
                                    </span>
                                </label>
                            </div>
                            <div class="col-md-12">
                                <label>
                                    <span class="text-input"><textarea name="message" rows="4"
                                            placeholder="Message goes here" required="required"></textarea></span>
                                </label>
                            </div>
                            <!-- recaptcha hidden input -->
                            <input type="hidden" name="g-recaptcha-response" id="recaptcha-token">

                            <div class="col-md-12">
                                <button
                                    class="submit cmt-btn btn-default cmt-icon-btn-left cmt-btn-size-md cmt-btn-color-dark mt-5"
                                    type="submit"><i class="icon-right"></i><span>Send Message</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
