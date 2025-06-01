@extends('nav.company-profile.layout')
@section('body')
    
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(/company-profile/img/background.png);">
      <div class="container position-relative">
        <h1>Portfolio Details</h1>
        <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Portfolio Details</li>
          </ol>
        </nav>
      </div>
    </div>

    
    <section id="portfolio-details" class="portfolio-details section">

      <div class="container" data-aos="fade-up">

        <div class="portfolio-details-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              },
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">

            <div class="swiper-slide">
              <img src="{{ url('company-profile/img/background.png') }}" alt="">
            </div>

            <div class="swiper-slide">
              <img src="{{ url('company-profile/img/background.png') }}" alt="">
            </div>

            <div class="swiper-slide">
              <img src="{{ url('company-profile/img/background.png') }}" alt="">
            </div>

            <div class="swiper-slide">
              <img src="{{ url('company-profile/img/background.png') }}" alt="">
            </div>

          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-pagination"></div>
        </div>

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8" data-aos="fade-up">
            <div class="portfolio-description">
              <h2>Pemasangan CCTV Telkom</h2>
              <p>
                Pemasangan dilakukan di 120 Titik
              </p>
              <p>
                pemasangan dibawah pengawasan Vendor
              </p>

              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Saya Suka terhadap Kinerja Tim Swarakyat Nusantara</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <div>
                  <img src="{{ url('company-profile/img/background.png') }}" class="testimonial-img" alt="">
                  <h3>Arjuna</h3>
                  <h4>PIC Telkom</h4>
                </div>
              </div>

              <p>
                project dilakukan mulai 30 mei 2025 hingga 31 juni 2025
              </p>

              <p>
                project ini melibatkan 300 orang
              </p>

            </div>
          </div>

          <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong> Pemasangan CCTV</li>
                <li><strong>Client</strong> Telkom University</li>
                <li><strong>Project date</strong> 30 Mei 2025 - 31 Juni 2025</li>
                <li><strong>Project URL</strong> <a href="#">telkom</a></li>
                <li><a href="#" class="btn-visit align-self-start">Visit Website</a></li>
              </ul>
            </div>
          </div>

        </div>

      </div>

    </section>
@endsection