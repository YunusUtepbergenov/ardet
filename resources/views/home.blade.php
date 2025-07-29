<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Ardet | Строительные материалы и промышленные решения в Узбекистане</title>
  <meta name="description" content="Ardet предлагает высококачественные строительные материалы, включая краски, клеи и промышленные решения, разработанные специально для рынка Узбекистана.">
  <meta name="keywords" content="Ardet, строительные материалы Узбекистан, клеи, краски, строительные материалы, промышленные решения">
  <link rel="canonical" href="https://ardet.uz" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicons -->
  <link href="{{asset('img/logo.png')}}" rel="icon">
  <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    @livewireStyles

  <style>
    #map {
      height: 400px;
      width: 100%;
    }
  </style>
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="/" class="logo d-flex align-items-center me-auto">
        <img src="{{ asset('img/logo.png') }}" alt="Logo">
      </a>

      <!-- Hidden checkbox to toggle nav -->
      <input type="checkbox" id="menu-toggle" class="menu-toggle">
      <label for="menu-toggle" class="mobile-nav-toggle">
          <i class="bi bi-list"></i>
      </label>

      <nav class="navmenu d-flex align-items-center gap-3">
        <ul class="d-flex mb-0 align-items-center list-unstyled">
          <li><a href="#hero" class="active">{{ __('nav.home') }}</a></li>
          <li><a href="#services">{{ __('nav.advantages') }}</a></li>
          <li><a href="#portfolio">{{ __('nav.products') }}</a></li>
          <li><a href="#contact">{{ __('nav.contacts') }}</a></li>

          <li class="dropdown lang-dropdown">
            <select class="selectpicker" data-width="fit" onchange="window.location.href=this.value;">
              <option value="{{ route('lang.switch', 'ru') }}" {{ app()->getLocale() == 'ru' ? 'selected' : '' }}>🇷🇺 Русский</option>
              <option value="{{ route('lang.switch', 'uz') }}" {{ app()->getLocale() == 'uz' ? 'selected' : '' }}>🇺🇿 Oʻzbek</option>
            </select>
          </li>
        </ul>
      </nav>
    </div>
  </header>


  <main class="main">

    <section id="hero" class="hero section dark-background">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1>{{__('hero.heading')}}</h1>
            <p>{{__('hero.text')}}</p>
          </div>
          <div class="col-lg-7 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="/img/Untitled design.png" class="img-fluid animated" alt="Hero Image">
          </div>
        </div>
      </div>

    </section>

    <!-- Services Section -->
    <section id="services" class="services section light-background">

      <div class="container section-title" data-aos="fade-up">
        <h2>{{__('nav.advantages')}}</h2>
      </div>

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-building"></i></div>
              <h4><a href="" class="stretched-link">{{__('advantages.heading1')}}</a></h4>
              <p>{{__('advantages.heading1_text')}}</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-thermometer-sun icon"></i></div>
              <h4><a href="" class="stretched-link">{{__('advantages.heading2')}}</a></h4>
              <p>{{__('advantages.heading2_text')}}</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-patch-check icon"></i></div>
              <h4><a href="" class="stretched-link">{{__('advantages.heading3')}}</a></h4>
              <p>{{__('advantages.heading3_text')}}</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-tools icon"></i></div>
              <h4><a href="" class="stretched-link">{{__('advantages.heading4')}}</a></h4>
              <p>{{__('advantages.heading4_text')}}</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>{{__('nav.products')}}</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <livewire:product-list />

        </div>

      </div>

    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>{{__('nav.contacts')}}</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-5">
            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>{{__('contact.address_h')}}</h3>
                  <p>{{__('contact.address')}}</p>
                </div>
              </div><!-- End Info Item -->
      
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>{{__('contact.phone')}}</h3>
                  <p>+998 90 864 00 07</p> <!-- Change to your real number -->
                </div>
              </div><!-- End Info Item -->
      
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>{{__('contact.email')}}</h3>
                  <p>info@example.com</p>
                </div>
              </div><!-- End Info Item -->
              <div id="map"></div>
              {{-- <iframe src="" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
            </div>
          </div>
      
          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">
                <div class="col-md-6">
                  <label for="name-field" class="pb-2">{{__('contact.name')}}</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>
      
                <div class="col-md-6">
                  <label for="email-field" class="pb-2">{{__('contact.email_m')}}</label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>
      
                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">{{__('contact.theme')}}</label>
                  <input type="text" class="form-control" name="subject" id="subject-field" required="">
                </div>
      
                <div class="col-md-12">
                  <label for="message-field" class="pb-2">{{__('contact.message')}}</label>
                  <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                </div>
      
                <div class="col-md-12 text-center">
                  <div class="loading">Загрузка...</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Ваше сообщение отправлено. Спасибо!</div>
      
                  <button type="submit">{{__('contact.send_message')}}</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

  </main>

  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">Ardet.</span>
          </a>
          <div class="footer-contact pt-3">
            <p>{{__('contact.address')}}</p>
            <p class="mt-3"><strong>{{__('contact.phone')}}</strong> <span>+998 90 864 00 07</span></p>
            <p><strong>{{__('contact.email')}}</strong> <span>info@example.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>{{__('footer.sections')}}</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">{{ __('nav.home') }}</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">{{ __('nav.advantages') }}</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">{{ __('nav.products') }}</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">{{ __('nav.contacts') }}</a></li>
          </ul>
        </div>

        <div class="offset-lg-2 col-lg-4 col-md-12">
          <h4>{{__('footer.subs')}}</h4>
          <p>{{__('footer.subs_text')}}</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @livewireScripts

    <script>
      const lat = 39.091796;
      const lng = 66.833958;

      const map = L.map('map').setView([lat, lng], 10);

      // Add OpenStreetMap tiles
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
      }).addTo(map);

      // Add a marker with popup
      L.marker([lat, lng]).addTo(map)
        .bindPopup("<b>Ardet.</b>")
        .openPopup();

        $(function() {
    $('.selectpicker').selectpicker();
    $('pick__lang').selectpicker();
});
    </script>
</body>

</html>