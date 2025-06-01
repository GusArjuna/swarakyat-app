@extends('nav.company-profile.layout')
@section('body')
    
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(/company-profile/img/background.png);">
      <div class="container position-relative">
        <h1>Detail Layanan</h1>
        <p>Silahkan Memilih Layanan Yang Tersedia</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current">Detail Layanan</li>
          </ol>
        </nav>
      </div>
    </div>

    
    {{-- <section id="service-details" class="service-details section">
      <div class="container">
        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="services-list">
              <a href="#" class="active" data-target="kasir">Kasir Sederhana</a>
              <a href="#" data-target="software">Software Development</a>
              <a href="#" data-target="product">Product Management</a>
              <a href="#" data-target="graphic">Graphic Design</a>
              <a href="#" data-target="marketing">Marketing</a>
            </div>

            <h4>Detail Layanan</h4>
            <p>Kami Akan Berusaha Memberikan pelayanan Terbaik</p>
          </div>

          <div class="col-lg-8 service-wrapper">

            <div id="kasir" class="service-content active" data-aos="fade-up" data-aos-delay="200">
              <img src="{{ url('company-profile/img/calltoaction.png') }}" alt="" class="img-fluid services-img">
              <h3>Kasir Sederhana</h3>
              <p>Merupakan Alat Kasir Sederhana</p>
              <ul>
                <li><i class="bi bi-check-circle"></i> <span>Sederhana Namun Bagus</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Tidak Bertele-tele</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Simple</span></li>
              </ul>
              <p>Ramah UMKM, cepat tunggu apalagi</p>
              <p>Ramah Banget</p>
            </div>
            
            <div id="software" class="service-content d-none" data-aos="fade-up" data-aos-delay="200">
              <img src="{{ url('company-profile/img/background.png') }}" alt="" class="img-fluid services-img">
              <h3>software</h3>
              <p>Merupakan Alat software</p>
              <ul>
                <li><i class="bi bi-check-circle"></i> <span>Sederhana Namun Bagus</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Tidak Bertele-tele</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Simple</span></li>
              </ul>
              <p>Ramah UMKM, cepat tunggu apalagi</p>
              <p>Ramah Banget</p>
            </div>
          </div>
          
        </div>
      </div>
    </section> --}}
    <section id="service-details" class="service-details section">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-4">
        <div class="services-list">
          <a href="#" class="active" data-target="kasir">Kasir Sederhana</a>
          <a href="#" data-target="software">Software Development</a>
          <a href="#" data-target="product">Product Management</a>
          <a href="#" data-target="graphic">Graphic Design</a>
          <a href="#" data-target="marketing">Marketing</a>
        </div>
        <h4>Detail Layanan</h4>
        <p>Kami Akan Berusaha Memberikan Pelayanan Terbaik</p>
      </div>

      <div class="col-lg-8 service-wrapper">
        <!-- Kasir -->
        <div id="kasir" class="service-content active">
          <img src="{{ url('company-profile/img/background.png') }}" alt="Kasir" class="services-img">
          <h3>Kasir Sederhana</h3>
          <p>Merupakan Alat Kasir Sederhana</p>
          <ul>
            <li>Sederhana Namun Bagus</li>
            <li>Tidak Bertele-tele</li>
            <li>Simple</li>
          </ul>
          <p>Ramah UMKM, cepat tunggu apalagi</p>
        </div>

        <!-- Software -->
        <div id="software" class="service-content">
          <img src="{{ url('company-profile/img/calltoaction.png') }}" alt="Software" class="services-img">
          <h3>Software Development</h3>
          <p>Merupakan alat bantu software modern</p>
          <ul>
            <li>Efisien dan Teruji</li>
            <li>Support banyak platform</li>
            <li>Terus dikembangkan</li>
          </ul>
        </div>
        
      </div>
    </div>
  </div>
</section>
@endsection