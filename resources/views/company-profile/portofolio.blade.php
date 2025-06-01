@extends('nav.company-profile.layout')
@section('body')
    
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(company-profile/img/background.png);">
      <div class="container position-relative">
        <h1>Portofolio</h1>
        <p>Lihat hasil kerja kami dengan berbagai mitra dan berbagai client</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current">Portofolio</li>
          </ol>
        </nav>
      </div>
    </div>

    
    <section id="starter-section" class="starter-section section">

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

    </section>
@endsection