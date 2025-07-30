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

    .index-page .header {
    position: relative;
    --background-color: #37517e;
    --heading-color: #ffffff;
    --nav-color: #ffffff;
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
          <li><a href="{{route('home')}}/#home" class="active">{{ __('nav.home') }}</a></li>
          <li><a href="{{route('home')}}/#services">{{ __('nav.advantages') }}</a></li>
          <li><a href="{{route('home')}}/#portfolio">{{ __('nav.products') }}</a></li>

          <li class="dropdown"><a href="#"><span>Категории</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{route('categories.show', 'mix_dry')}}">Сухие смеси</a></li>
              <li><a href="{{route('categories.show', 'colors')}}">Краски</a></li>
              <li><a href="{{route('categories.show', 'primers')}}">Грунтовки</a></li>
              <li><a href="{{route('categories.show', 'fixbeton')}}">Бетонконтакты</a></li>
            </ul>
          </li>

          <li><a href="{{route('home')}}/#contact">{{ __('nav.contacts') }}</a></li>
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

    <section class="portfolio section">

      <div class="container section-title" data-aos="fade-up">
        @if($category === 'mix_dry')
            <h2>Сухие смеси</h2>
        @elseif ($category === 'colors')
            <h2>Краски</h2>
        @elseif ($category === 'primers')
            <h2>Грунтовки</h2>
        @elseif ($category === 'fixbeton')
            <h2>Бетонконтакты</h2>        
        @endif
      </div>

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <div class="row gy-4 isotope-container">
                @foreach($products as $product)
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ $product->category }}">
                        <img src="{{ asset($product->image) }}" class="img-fluid" alt="Образцы строительных материалов от Ardet">
                        <div class="portfolio-info">
                            <h4>{{ $product->getTranslated('title') }}</h4>
                            <p>{{ $product->getTranslated('short_desc') }}</p>
                            <a href="{{ asset($product->image) }}" data-gallery="portfolio-gallery-{{ $product->category }}" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        </div>
                    </div>
                @endforeach        
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