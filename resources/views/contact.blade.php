@extends("base")
@section("content")
<!-- Google Maps -->
<div class="container-fluid p-0">
    <div id="map1" class="gmap gmap-xl" data-latitude="51.513569" data-longitude="-0.123443"></div>			
</div>
<!-- end Google Maps -->
<!-- Contact section -->
<div class="section">
    <div class="container">
        <div class="row g-4">
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
            <div class="col-12 col-md-8">
                <div class="contact-form text-md-end">
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
                        <button class="button button-sm btn-warnig mt-3" href="#">SUBMIT</button>
                    </form>
                    <!-- Submit result -->
                    <div class="submit-result">
                        <span id="success">Thank you! Your Message has been sent.</span>
                        <span id="error">Something went wrong, Please try again!</span>
                    </div>
                </div>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</div>
<!-- end Contact section -->
@endsection