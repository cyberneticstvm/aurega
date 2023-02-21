<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $title }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ public_path().'/assets/images/aurega/favicon.ico' }}" rel="icon">
  <link href="{{ public_path().'/assets/images/aurega/favicon.ico' }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ public_path().'/landing/assets/vendor/aos/aos.css' }}" rel="stylesheet">
  <link href="{{ public_path().'/landing/assets/vendor/bootstrap/css/bootstrap.min.css' }}" rel="stylesheet">
  <link href="{{ public_path().'/landing/assets/vendor/bootstrap-icons/bootstrap-icons.css' }}" rel="stylesheet">
  <link href="{{ public_path().'/landing/assets/vendor/boxicons/css/boxicons.min.css' }}" rel="stylesheet">
  <link href="{{ public_path().'/landing/assets/vendor/swiper/swiper-bundle.min.css' }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"/>

  <!-- Template Main CSS File -->
  <link href="{{ public_path().'/landing/assets/css/style.css' }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: SoftLand - v4.10.0
  * Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="col-5 logo">
        <!--<h1><a href="index.html">Aurega</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html"><img src="{{ public_path().'/assets/images/aurega/logo-white.png' }}" alt="Aurega" class="img-fluid"></a>
      </div>
      <div class="col-5 text-end"><a href="tel:+91 9212155400" class="a_phone_head"><i class="bx bx-mobile-alt" aria-hidden="true"></i> +919212155400</a></div>
      <div class="col-2 text-end"><img src="{{ public_path().'/landing/assets/img/30-years-badge-logo.png' }}" style="height:25%; width:25%;"></div>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section class="hero-section" id="hero">

    <div class="wave">

      <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
            <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
          </g>
        </g>
      </svg>

    </div>

    <div class="container mt-10">
      <div class="row">
        <div class="col-12">
          <div class="row">
            <div class="col-lg-6 text-center text-lg-start">
              <h1 data-aos="fade-right">Setup Your Company <span class="text-warning">in UAE</span></h1>
              <p class="mb-5" data-aos="fade-right" data-aos-delay="100">Our expert shall assist you to setup your Crypto, Trading, Manufacturing and other business of choice in Dubai and other Emirates of UAE.</p>
            </div>
            <div class="col-lg-6 enqform" data-aos-delay="200">
                <h5 class="text-center text-warning mb-3">Enquire Now</h5>
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                    <div class="col-md-6 form-group mb-3">
                        <input type="text" name="first_name" class="form-control" placeholder="First Name *" required>
                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <input type="text" name="last_name" class="form-control" placeholder="Last Name *" required>
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email *" required>
                    </div>
                    <div class="col-md-3 form-group mt-3">
                        <select class="form-control">
                            <option value="+971">+971 (UAE)</option>
                            <option value="+91">+91 (India)</option>
                        </select>
                    </div>
                    <div class="col-md-9 form-group mt-3">
                        <input type="text" class="form-control" name="mobile" maxlength="10" placeholder="Mobile *" required>
                    </div>
                    <div class="col-md-12 form-group mt-3">
                        <select class="form-control" name="service">
                            <option value="">Select Service *</option>
                            <option value="">Company Incorporation</option>
                            <option value="">Brand Registration</option>
                            <option value="">Accounting & Book-keeping</option>
                            <option value="">Trade Licenses</option>
                            <option value="">PRO Services</option>
                            <option value="">Immigration Services</option>
                            <option value="">VAT/Taxation Services</option>
                            <option value="">Corporate Service Agent</option>
                        </select>
                    </div>
                    <div class="col-md-12 form-group mt-3">
                        <button type="submit" class="btn btn-warning float-end text-white">SUBMIT</button>
                    </div>
                </div>

                </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Home Section ======= -->
    <section class="section">
      <div class="container">

        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-5" data-aos="fade-up">
            <h2 class="section-heading text-warning">Start Your Business Without Any Hassles</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1 bg-warning">
                <i class="bi bi-people"></i>
              </div>
              <h3 class="mb-3">We Listen</h3>
              <p>We listen, we discuss, we advise. We listen to your requirements, ideas, plans and objectives for your business. We then select the best fitting solution.</p>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <i class="bi bi-brightness-high"></i>
              </div>
              <h3 class="mb-3">Experience</h3>
              <p>Our highly experienced staff are industry veterans with many years of experience in offshore company incorporation and bank account opening.</p>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <i class="bi bi-bar-chart"></i>
              </div>
              <h3 class="mb-3">Low Prices</h3>
              <p>We offer best price in town for incorporating international business company in the UAE. All the charges are informed and there are no hidden costs.</p>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <i class="bi bi-people"></i>
              </div>
              <h3 class="mb-3">Quality Service</h3>
              <p>With the help of our talented, reliable and trustworthy consultants and staffs, we ensure that your decision to choose Aurega Group is one you will be proud of.</p>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <i class="bi bi-people"></i>
              </div>
              <h3 class="mb-3">Customer Satisfaction</h3>
              <p>With Aurega, you can enjoy a seamless experience incorporating your business in the UAE. We are always available just a phone call away.</p>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <i class="bi bi-people"></i>
              </div>
              <h3 class="mb-3">Under One Roof</h3>
              <p>Aurega is your ‘one-stop-shop’ consulting agency providing everything you need to successfully start your business in the UAE.</p>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section class="section">

      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-5" data-aos="fade-up">
            <h2 class="section-heading text-warning">End-to-End Business Solutions</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="step">
              <span class="number">01</span>
              <h3>Business Setup Services</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="step">
              <span class="number">02</span>
              <h3>Offshore Company Services</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="step">
              <span class="number">03</span>
              <h3>Consulting & Advisory Services</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="step">
              <span class="number">04</span>
              <h3>Freezone Companies</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
            </div>
          </div>          
          <div class="col-md-4">
            <div class="step">
              <span class="number">05</span>
              <h3>PRO Services</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
            </div>
          </div>
        </div>
      </div>

    </section>

    <section class="section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4 me-auto">
            <h2 class="mb-4">Quick, Easy & Secure Business Setup</h2>
            <p class="mb-4">Get your business registered in 3 to 7 days with complete ownership, confidentiality, tax optimization and asset protection.</p>
            <p><a href="#" class="btn btn-primary">Connect with Us</a></p>
          </div>
          <div class="col-md-6" data-aos="fade-left">
            <img src="{{ public_path().'/landing/assets/img/undraw_svg_2.svg' }}" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4 ms-auto order-2">
            <h2 class="mb-4">Always By Your Side</h2>
            <p class="mb-4">Over 100 partner office connections across the Americas, Asia Pacific, Europe, Africa and the Middle East.</p>
            <p><a href="#" class="btn btn-primary">Get Started with Your Business</a></p>
          </div>
          <div class="col-md-6" data-aos="fade-right">
            <img src="{{ public_path().'/landing/assets/img/undraw_svg_3.svg' }}" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </section>

    <!-- ======= Testimonials Section ======= -->
    <section class="section border-top border-bottom">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-4">
            <h2 class="section-heading">Our Success Stories</h2>
          </div>
        </div>
        <div class="row justify-content-center text-center">
          <div class="col-md-7">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="review text-center">
                    <p class="stars">
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                    </p>
                    <h3>Golden Visa</h3>
                    <blockquote>
                      <p>The employees and the company itself are very hardworking. Excellent service and quick response. They are really welcoming as well. Highly recommended <i class="fa fa-thumbs-up"></i></p>
                    </blockquote>

                    <p class="review-user">
                      <img src="{{ public_path().'/landing/assets/img/person_1.jpg' }}" alt="Image" class="img-fluid rounded-circle mb-3">
                      <span class="d-block">
                        <span class="text-black">Jeena Jacob</span>
                      </span>
                    </p>

                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="review text-center">
                    <p class="stars">
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                    </p>
                    <h3>PRO Service</h3>
                    <blockquote>
                      <p>Right consultation and swift process. Very professional. Recommending to choose Aurega Group.</p>
                    </blockquote>

                    <p class="review-user">
                      <img src="{{ public_path().'/landing/assets/img/person_2.jpg' }}" alt="Image" class="img-fluid rounded-circle mb-3">
                      <span class="d-block">
                        <span class="text-black">Anand Krishna</span>
                      </span>
                    </p>

                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="review text-center">
                    <p class="stars">
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                      <span class="bi bi-star-fill"></span>
                    </p>
                    <h3>Business Setup</h3>
                    <blockquote>
                      <p>Definitely recommended if you are establishing your business anywhere in the UAE.</p>
                    </blockquote>

                    <p class="review-user">
                      <img src="{{ public_path().'/landing/assets/img/person_3.jpg' }}" alt="Image" class="img-fluid rounded-circle mb-3">
                      <span class="d-block">
                        <span class="text-black">Jean Thunberg</span>
                      </span>
                    </p>

                  </div>
                </div><!-- End testimonial item -->

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4 mb-md-0">
          <h3>About Aurega</h3>
          <p class="text-justify">Aurega Group is the global gateway to multidisciplinary business requirements. We're one of the most trusted business setup advisory establishments which give comprehensive professional services to individuals, associations and large corporates. As we've times of experience in serving the trade and new business sector universally, we give largely substantiated business setup services and veritable cooperative platform to our clients.</p>
          <p class="social">
            <a href="#"><span class="bi bi-twitter"></span></a>
            <a href="#"><span class="bi bi-facebook"></span></a>
            <a href="#"><span class="bi bi-linkedin"></span></a>
          </p>
        </div>
        <div class="col-md-7 ms-auto">
          <div class="row site-section pt-0">
            <div class="col-md-6 mb-4 mb-md-0">
              <h3>India Contact Details</h3>
              <p>Raman Tandon, Chartered Accountant,<br>Managing Partners, MONDIALS<br>+91 9212155400<br>+919958688331</p>
            </div>
            <div class="col-md-6 mb-4 mb-md-0">
              <h3>UAE Contact Details</h3>
              <p>#1403, The Prism Tower, Business Bay, Dubai<br>Email: hello@auregacs.com<br>+(971) 52 868 6158<br>+(971) 50 693 9558</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-center text-center">
        <div class="col-md-7">
          <p class="copyright">&copy; {{ date('Y') }} Aurega Corporate Services. All Rights Reserved</p>
        </div>
      </div>

    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ public_path().'/landing/assets/vendor/aos/aos.js' }}"></script>
  <script src="{{ public_path().'/landing/assets/vendor/bootstrap/js/bootstrap.bundle.min.js' }}"></script>
  <script src="{{ public_path().'/landing/assets/vendor/swiper/swiper-bundle.min.js' }}"></script>
  <script src="{{ public_path().'/landing/assets/vendor/php-email-form/validate.js' }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ public_path().'/landing/assets/js/main.js' }}"></script>

</body>

</html>