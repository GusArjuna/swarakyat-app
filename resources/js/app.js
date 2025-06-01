// import './bootstrap';
// import './vendor/bootstrap/js/bootstrap.bundle.min.js';
// import './vendor/php-email-form/validate.js';
// import './vendor/aos/aos.js';
// import './vendor/glightbox/js/glightbox.min.js';
// import './vendor/purecounter/purecounter_vanilla.js';
// import './vendor/imagesloaded/imagesloaded.pkgd.min.js';
// import './vendor/isotope-layout/isotope.pkgd.min.js';
// import './vendor/swiper/swiper-bundle.min.js';
import './js/main.js';
document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll('.services-list a');
    const contents = document.querySelectorAll('.service-content');

    links.forEach(link => {
      link.addEventListener('click', function (e) {
        e.preventDefault();
        const targetId = this.getAttribute('data-target');

        // Reset semua
        links.forEach(l => l.classList.remove('active'));
        contents.forEach(c => c.classList.remove('active'));

        // Aktifkan yang dipilih
        this.classList.add('active');
        document.getElementById(targetId).classList.add('active');
      });
    });
  });
