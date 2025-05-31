@extends('nav.company-profile.layout')
@section('body')
    
    <section id="home" class="hero section dark-background">
      <img src="{{ url('company-profile/img/background.png') }}" alt="" data-aos="fade-in">
      <div class="container d-flex flex-column align-items-center text-center">
        <h2 data-aos="fade-up" data-aos-delay="100">Welcome to Swarakyat Nusantara</h2>
        <p data-aos="fade-up" data-aos-delay="200">Solusi Digital Terpadu untuk Bisnis Masa Kini.</p>
        <div data-aos="fade-up" data-aos-delay="300">
          <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
        </div>
      </div>
    </section>

    
    <section id="about" class="about section">   
      <div class="container section-title" data-aos="fade-up">
        <h2>Sekilas Tentang Swarakyat Nusantara</h2>
        <p>Solusi IT Terpercaya, Terjangkau, dan Siap Dukung UMKM Tumbuh.</p>
      </div>

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100" style="text-align: justify">
            <p>
              Visi
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> <span>Menjadi mitra solusi IT terpercaya yang mendorong transformasi digital bagi UMKM dan bisnis di Indonesia melalui layanan teknologi yang berkualitas, terjangkau, dan berkelanjutan.</span></li>
            </ul>
            <p>
              Misi
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> <span>Menyediakan layanan pemasangan jaringan (WiFi, CCTV, kabel LAN/FO) yang cepat, aman, dan andal.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Mendukung operasional bisnis dengan solusi kasir dan sistem pembayaran yang praktis dan efisien.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Mengembangkan website, mobile app, dan software pendukung yang sesuai kebutuhan bisnis klien.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Memberikan layanan konsultasi IT dan strategi bisnis berbasis teknologi yang tepat guna.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Menawarkan harga yang kompetitif dan pelayanan yang ramah, khususnya untuk pelaku UMKM.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Menjaga kualitas layanan melalui tim profesional dan dukungan teknis yang responsif.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Terus berinovasi agar dapat menghadirkan solusi IT yang relevan dengan perkembangan zaman.</span></li>
            </ul>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200" style="text-align: justify">
            <p>Kami adalah penyedia layanan IT yang hadir untuk membantu bisnis dan UMKM berkembang melalui solusi digital yang terjangkau, efisien, dan berkualitas. Kami menawarkan berbagai layanan mulai dari pemasangan WiFi dan CCTV, maintenance serta instalasi kabel LAN dan fiber optik, hingga pengadaan sistem kasir dan solusi pembayaran modern. Tidak hanya itu, kami juga mengembangkan website, aplikasi mobile, dan software pendukung yang dirancang sesuai kebutuhan klien. Dengan dukungan tim yang berpengalaman di bidang teknologi dan bisnis, kami siap menjadi mitra strategis Anda dalam menghadapi tantangan digital. Kami percaya bahwa setiap bisnis, besar maupun kecil, berhak mendapatkan teknologi yang andal dengan harga yang ramah di kantong. Karena itu, kami berkomitmen untuk memberikan layanan profesional yang mempermudah operasional bisnis Anda, sambil terus mendukung pertumbuhan UMKM di era digital ini.</p>
            <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>
      </div>
    </section>

    
    <section id="services" class="services section">    
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Beragam solusi IT terbaik, siap bantu bisnis Anda tumbuh.</p>
      </div>

      <div class="container">
        <div class="row gy-4">

          @foreach ($services as $service)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item  position-relative">
                <div class="icon">
                  <i class="bi bi-{{ $service['icon'] }}"></i>
                </div>
                <a href="{{ $service['url'] }}" class="stretched-link">
                  <h3>{{ $service['name'] }}</h3>
                </a>
                <p>{{ $service['tagline'] }}</p>
              </div>
            </div>
          @endforeach

        </div>
      </div>
    </section>

    
    <section id="call-to-action" class="call-to-action section dark-background">
      <img src="{{ url('company-profile/img/calltoaction.png') }}" alt="">
      <div class="container">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-9 text-center text-xl-start">
            <h3>Buat Janji Temu</h3>
            <p>Diskusikan kebutuhan Anda, kami siap hadir membantu.</p>
          </div>
          <div class="col-xl-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="https://wa.me/6285156865853">Call To Action</a>
          </div>
        </div>
      </div>
    </section>
    
    <section id="features" class="features section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Mitra</h2>
        <p>Kolaborasi yang memperkuat dan memperluas jangkauan layanan kami.</p>
      </div>

      <div class="container">
        <div class="row gy-4">
          <div class="features-image col-lg-6 order-lg-2" data-aos="fade-up" data-aos-delay="100"><img src="{{ url('company-profile/img/mitra.png') }}" alt=""></div>
          <div class="col-lg-6 order-lg-1">

            <div class="features-item d-flex ps-0 ps-lg-3 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-shield-check flex-shrink-0"></i>
              <div>
                <h4>Perangkat Berkualitas Terbaik</h4>
                <p>Kami hanya menggunakan perangkat dari brand terpercaya seperti Dahua, Mikrotik, dan sekelasnya untuk hasil kerja yang tahan lama dan optimal.</p>
              </div>
            </div>

            <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-router flex-shrink-0"></i>
              <div>
                <h4>Koneksi dan Jaringan Andal</h4>
                <p>Pemasangan WiFi dan kabel kami didukung oleh teknologi jaringan kelas enterprise untuk performa maksimal di segala kondisi.</p>
              </div>
            </div>

            <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-cpu flex-shrink-0"></i>
              <div>
                <h4>Sistem Digital Modern</h4>
                <p>Software, kasir, dan sistem pembayaran yang kami integrasikan memakai platform yang aman, fleksibel, dan mudah digunakan.</p>
              </div>
            </div>

            <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-briefcase flex-shrink-0"></i>
              <div>
                <h4>Mitra Profesional & Tersertifikasi</h4>
                <p>Kami bermitra dengan vendor dan penyedia resmi yang memiliki reputasi serta dukungan teknis yang terpercaya.</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    
    <section id="clients" class="clients section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-0 clients-wrap">

          @foreach ($mitras as $mitra)
            <div class="col-xl-3 col-md-4 client-logo">
              <img src="{{ $mitra['url'] }}" class="img-fluid" alt="{{ $mitra['name'] }}">
            </div>
          @endforeach

        </div>
      </div>
    </section>

    
    <section id="stats" class="stats section dark-background">
      <img src="{{ url('company-profile/img/bgclient.png') }}" alt="" data-aos="fade-in">
      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="subheading">
          <h3>Pencapaian Kami</h3>
          <p>Langkah kecil kami, berdampak besar untuk mitra dan pelanggan.</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section id="portfolio" class="portfolio section">    
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Lihat hasil kerja kami yang sudah dipercaya berbagai klien.</p>
      </div>

      <div class="container">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            @foreach ($portofolios as $portofolio)
              <li data-filter=".filter-{{ $portofolio['category'] }}">{{ $portofolio['category'] }}</li>
            @endforeach
          </ul>
          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
            
            @foreach ($portofolios as $portofolio)
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ $portofolio['category'] }}">
                <img src="{{ $portofolio['url'] }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{ $portofolio['name'] }}</h4>
                  <p>{{ $portofolio['description'] }}</p>
                  <a href="{{ $portofolio['url'] }}" title="{{ $portofolio['category'] }} 1" data-gallery="portfolio-gallery-{{ $portofolio['category'] }}" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="/portofolio-details/{{ $portofolio['id'] }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            @endforeach

          </div>
        </div>
      </div>
    </section>
       
    <section id="faq" class="faq section">
      <div class="container-fluid">
        <div class="row gy-4">
          <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

            <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
              <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
              <p>
                Temukan jawaban atas pertanyaan yang sering ditanyakan.
              </p>
            </div>

            <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

              <div class="faq-item faq-active">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Apakah layanan Swarakyat Nusantara cocok untuk UMKM?</h3>
                <div class="faq-content">
                  <p>Tentu saja! Kami hadir untuk membantu UMKM berkembang dengan solusi IT yang terjangkau namun tetap profesional, mulai dari sistem kasir, pemasangan CCTV, hingga website usaha. Kami percaya teknologi harus mudah diakses oleh semua pelaku bisnis, tanpa harus mahal.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Apakah saya bisa memesan layanan custom sesuai kebutuhan usaha saya?</h3>
                <div class="faq-content">
                  <p>Ya, kami sangat fleksibel! Swarakyat Nusantara menyediakan layanan berbasis kebutuhan baik itu pemasangan Wifi di kantor kecil, pembuatan aplikasi bisnis, maupun sistem pembayaran. Tim kami akan bantu konsultasi dari awal sampai solusi siap digunakan.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Mengapa memilih Swarakyat Nusantara dibanding penyedia IT lainnya?</h3>
                <div class="faq-content">
                  <p>Karena kami tidak hanya sekadar pasang lalu pergi. Kami menawarkan layanan end-to-end dengan dukungan teknis, penggunaan alat berkualitas dari mitra terpercaya, serta pengalaman proyek di berbagai skala dari rumah usaha hingga perusahaan. Dan yang terpenting: kami mendengar kebutuhanmu.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-5 order-1 order-lg-2">
            <img src="{{ url('company-profile/img/faq.png') }}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div>
        </div>

      </div>
    </section>
    
    <section id="contact" class="contact section light-background">   
      <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>
        <p>Hubungi kami sekarang dan temukan solusi yang Anda butuhkan.</p>
      </div>

      <div class="container" data-aos="fade" data-aos-delay="100">
        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>Graha Familiy</p>
              </div>
            </div>

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+62 851 5686 5853</p>
              </div>
            </div>

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>admin@swarakyat.com</p>
              </div>
            </div>

          </div>

          <div class="col-lg-8">
            <form action="/contact" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
@endsection