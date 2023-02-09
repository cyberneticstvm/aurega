@extends("base")
@section("content")
<!-- Hero section -->
<div class="section-xl bg-image parallax" data-bg-src="{{ public_path().'/assets/images/aurega/home-bg.jpg' }}">
    <div class="bg-dark-05">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 col-sm-10 col-md-8">
                    <div class="bg-color-spring-red-07 p-5 border-radius">
                        <h2 class="fw-light m-0 text-yellow">Great things in business are never done by one person. They're done by a team of people.</h2>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
</div>
<!-- end Hero section -->
<div class="n-margin-6">
    <div class="container icon-5xl">
        <div class="row g-4">
            <!-- Feature box 1 -->
            <div class="col-12 col-lg-4">
                <img class="border-radius" src="{{ public_path().'/assets/images/aurega/medium-shot-men-women-work.jpg' }}" alt="">
                <div class="bg-white box-shadow hover-float p-4 p-xl-5">
                    <h5 class="fw-light text-center">We do<br><span class="fw-normal">Company Incorporation & Trade Licenses</span></h5>
                    <p class="text-justify">Considering starting a business in the UAE? Now is the perfect time for it. Dubai has millions of tourists flocking into the city daily-shopping, dining and taking in Dubai's tourist sites.</p>
                    <div class="text-center"><a class="button button-sm btn-warnig mt-3" href="/services/company-incorporation-and-trade-license">Let's Talk</a></div>
                </div>
            </div>
            <!-- Feature box 2 -->
            <div class="col-12 col-lg-4">
                <img class="border-radius" src="{{ public_path().'/assets/images/aurega/medium-shot-smiley-woman-with-passport.jpg' }}" alt="">
                <div class="bg-white box-shadow hover-float p-4 p-xl-5">
                    <h5 class="fw-light text-center">We do<br><span class="fw-normal">Golden Visa</span></h5>
                    <p class="text-justify">The United Arab Emirates (UAE) recently decided to issue a 10-year golden visa to professionals that will include foreign investors, entrepreneurs, engineers, physicians, Ph.Ds. who are from UAE accredited universities.</p>
                    <div class="text-center"><a class="button button-sm btn-warnig mt-3" href="/services/golden-visa">Let's Talk</a></div>
                </div>
            </div>
            <!-- Feature box 3 -->
            <div class="col-12 col-lg-4">
                <img class="border-radius" src="{{ public_path().'/assets/images/aurega/male-female-office-workers.jpg' }}" alt="">
                <div class="bg-white box-shadow hover-float p-4 p-xl-5">
                    <h5 class="fw-light text-center">We do<br><span class="fw-normal">Business Consulting</span></h5>
                    <p class="text-justify">Aurega helps to create greater opportunities and the new work of modern business. Let’s create new ways for Business to do Business who wants to increase their efficiency and gain a competitive edge in the marketplace.</p>
                    <div class="text-center"><a class="button button-sm btn-warnig mt-3" href="/services/business-consulting">Let's Talk</a></div>
                </div>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</div>
<!-- About section -->
<div class="section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-12 col-lg-6 col-xl-7">
                <img class="border-radius" src="{{ public_path().'/assets/images/aurega/minimalistic-business-desk-arrangement.jpg' }}" alt="">
            </div>
            <div class="col-12 col-lg-6 col-xl-5">
                <h2 class="fw-normal">About Aurega</h2>
                <p class="text-justify">Aurega Group is the global gateway to multidisciplinary business requirements. We're one of the most trusted business setup advisory establishments which give comprehensive professional services to individuals, associations and large corporates. As we've times of experience in serving the trade and new business sector universally, we give largely substantiated business setup services and veritable cooperative platform to our clients.</p>
                <div class="text-center"><a class="button button-sm btn-warnig mt-3" href="/about">Let's Know More</a></div>
            </div>
        </div><!-- end row -->
    </div>
</div>
<!-- end About section -->

<!-- Testimonial section -->
<div class="section-xl bg-image parallax" data-bg-src="{{ public_path().'/assets/images/aurega/aerial-view-business-team.jpg' }}">
    <div class="bg-dark-05">
        <div class="container">
            <div class="owl-carousel" data-owl-dots="false" data-owl-nav="true" data-owl-margin="30" data-owl-xs="1" data-owl-sm="1" data-owl-md="1" data-owl-lg="2" data-owl-xl="2">
                <!-- Testimonial Slider Item 1 -->
                <div class="bg-color-spring-red-07 border-radius p-5">
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-inline-block me-3">
                            <img class="img-mask-avatar-sm" src="{{ public_path().'/assets/images/img-avatar-sm.jpg' }}" alt="">
                        </div>
                        <div class="d-inline-block">
                            <h5 class="fw-normal m-0 line-height-140">Emiley Haley</h5>
                            <span class="font-small text-white-09">Manager - Cybernetics</span>
                        </div>
                    </div>
                    <p class="text-white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                </div>
                <!-- Testimonial Slider Item 2 -->
                <div class="bg-color-spring-red-07 border-radius p-5">
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-inline-block me-3">
                            <img class="img-mask-avatar-sm" src="{{ public_path().'/assets/images/img-avatar-sm.jpg' }}" alt="">
                        </div>
                        <div class="d-inline-block">
                            <h5 class="fw-normal m-0 line-height-140">Andrew Palmer</h5>
                            <span class="font-small text-white-09">Developer - Enieco</span>
                        </div>
                    </div>
                    <p class="text-white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                </div>
                <!-- Testimonial Slider Item 3 -->
                <div class="bg-color-spring-red-07 border-radius p-5">
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-inline-block me-3">
                            <img class="img-mask-avatar-sm" src="{{ public_path().'/assets/images/img-avatar-sm.jpg' }}" alt="">
                        </div>
                        <div class="d-inline-block">
                            <h5 class="fw-normal m-0 line-height-140">Anna Mullen</h5>
                            <span class="font-small text-white-09">Designer - Energy Engineering</span>
                        </div>
                    </div>
                    <p class="text-white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                </div>
                <!-- Testimonial Slider Item 4 -->
                <div class="bg-color-spring-red-07 border-radius p-5">
                    <div class="d-flex align-items-center mb-3">
                        <div class="d-inline-block me-3">
                            <img class="img-mask-avatar-sm" src="{{ public_path().'/assets/images/img-avatar-sm.jpg' }}" alt="">
                        </div>
                        <div class="d-inline-block">
                            <h5 class="fw-normal m-0 line-height-140">John Smith</h5>
                            <span class="font-small text-white-09">Marketer - Mono</span>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                </div>
            </div><!-- end owl-carousel -->
        </div><!-- end container -->
    </div><!-- end bg-dark-* -->
</div>
<!-- end Testimonial section -->

<!-- Contact section -->
<div class="section">
    <div class="container">
        <div class="row g-4">
            <!-- Contact Info -->
            <div class="col-12 col-md-4">
                <div class="mb-4">
                    <h6 class="fw-medium m-0">Phone:</h6>
                    <p>+(971) 52 868 6158</p>
                    <p>+(971) 50 693 9558</p>
                </div>
                <div class="mb-4">
                    <h6 class="fw-medium m-0">Email:</h6>
                    <p>mail@auregacs.com</p>
                </div>
                <div>
                    <h6 class="fw-medium m-0">Address:</h6>
                    <p>Dubai, UAE</p>
                </div>
            </div>
            <!-- Contact Form -->
            <div class="col-12 col-md-8">
                <div class="contact-form text-end">
                    <form method="post" id="contactform">
                        <div class="row gx-3 gy-0">
                            <div class="col-12 col-sm-6">
                                <input type="text" id="name" name="name" placeholder="Name" required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" id="email" name="email" placeholder="E-Mail" required>
                            </div>
                        </div>
                        <input type="text" id="contact" name="contact" placeholder="Contact Number" required>
                        <input type="text" id="subject" name="subject" placeholder="Subject" required>
                        <textarea name="message" id="message" placeholder="Message"></textarea>
                        <div><a class="button button-sm btn-warnig mt-3" href="#">SUBMIT</a></div>
                    </form>
                    <!-- Submit result -->
                    <div class="submit-result">
                        <span id="success">Thank you! Your Message has been sent.</span>
                        <span id="error">Something went wrong, Please try again!</span>
                    </div>
                </div>
            </div>
            <!-- end Contact Form -->
        </div><!-- end row -->
        <!-- Google Maps -->
        <div id="map1" class="gmap gmap-md mt-5" data-latitude="51.513569" data-longitude="-0.123443"></div>
    </div><!-- end container -->
</div>
<!-- end Contact section -->
@endsection