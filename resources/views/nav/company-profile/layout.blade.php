<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{ $title }}</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link href="{{ url('company-profile/img/favicon.png')}} " rel="icon">
  <link href="{{ url('company-profile/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="{{ url('company-profile/vendor/bootstrap/css/bootstrap.min.css')}} " rel="stylesheet">
  <link href="{{ url('company-profile/vendor/bootstrap-icons/bootstrap-icons.css')}} " rel="stylesheet">
  <link href="{{ url('company-profile/vendor/aos/aos.css')}} " rel="stylesheet">
  <link href="{{ url('company-profile/vendor/glightbox/css/glightbox.min.css')}} " rel="stylesheet">
  <link href="{{ url('company-profile/vendor/swiper/swiper-bundle.min.css')}} " rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
        <h1 class="sitename">Swarakyat Nusantara</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/#home" class="active">Home</a></li>
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li class="dropdown"><a href="#"><span>Layanan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="/services/wifi">Pemasangan Wifi</a></li>
              <li><a href="/services/cctv">Pemasangan CCTV</a></li>
              <li><a href="/services/cctv">Maintenance Atau Pemasangan Kabel FO Atau LAN</a></li>
              <li><a href="/services/cashier">Pengadaan Kasir dan Sistem Pembayaran</a></li>
              <li><a href="/services/dev">Pembuatan Website dan Mobil App</a></li>
              <li><a href="/services/software">Pembuatan Software Pendukung</a></li>
              <li><a href="/services/consulting">Konsultasi IT dan Bisnis IT</a></li>
            </ul>
          </li>
          <li><a href="/#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="cta-btn" href="#about">Jelajahi</a>

    </div>
  </header>

  <main class="main">

    @yield('body')

  </main>
<footer id="footer" class="footer dark-background">
    <div class="container">
      <h3 class="sitename">Swarakyat Nusantara</h3>
      <p>Solusi Digital Terpadu untuk Bisnis Masa Kini.</p>
      <div class="social-links d-flex justify-content-center">
        <a href="https://instagram.com/swarakyatnusantara"><i class="bi bi-instagram"></i></a>
        <a href="https://wa.me/6285156865853"><i class="bi bi-whatsapp"></i></a>
      </div>
      <div class="container">
        <div class="copyright">
          <span>Copyright</span> <strong class="px-1 sitename">Swarakyat Nusantara</strong> <span>All Rights Reserved</span>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <script src="{{ url('company-profile/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('company-profile/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ url('company-profile/vendor/aos/aos.js') }}"></script>
  <script src="{{ url('company-profile/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ url('company-profile/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ url('company-profile/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ url('company-profile/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ url('company-profile/vendor/swiper/swiper-bundle.min.js') }}"></script>
  {{-- <script src="{{ url('company-profile/js/main.js') }}"></script> --}}

</body>

</html>