<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    public function index()
    {
        return view('company-profile.index',[
            "services"=>[
                [
                    'name' => 'Pemasangan Wifi',
                    // 'url' => url('/services/wifi'),
                    'category' => url('/services/1'),
                    'icon' => 'wifi',
                    'tagline' => 'Koneksi cepat dan stabil untuk semua kebutuhan Anda.',
                ],
                [
                    'name' => 'Pemasangan CCTV',
                    // 'url' => url('/services/cctv'),
                    'category' => url('/services/2'),
                    'icon' => 'camera-video',
                    'tagline' => 'Awasi aset dan aktivitas bisnis Anda, kapan saja.',
                ],
                [
                    'name' => 'Maintenance Atau Pemasangan Kabel FO Atau LAN',
                    // 'url' => url('/services/cable'),
                    'category' => url('/services/3'),
                    'icon' => 'tools',
                    'tagline' => 'Jaringan kabel rapi, kuat, dan tahan lama.',
                ],
                [
                    'name' => 'Pengadaan Kasir dan Sistem Pembayaran',
                    // 'url' => url('/services/payment'),
                    'category' => url('/services/4'),
                    'icon' => 'qr-code-scan',
                    'tagline' => 'Transaksi lebih cepat, bisnis makin lancar.',
                ],
                [
                    'name' => 'Pembuatan Website dan Mobil App',
                    // 'url' => url('/services/dev'),
                    'category' => url('/services/5'),
                    'icon' => 'display',
                    'tagline' => 'Tingkatkan kehadiran digital bisnis Anda secara profesional.',
                ],
                [
                    'name' => 'Pembuatan Software Pendukung',
                    // 'url' => url('/services/software'),
                    'category' => url('/services/6'),
                    'icon' => 'code-slash',
                    'tagline' => 'Solusi software yang disesuaikan untuk mendukung operasional Anda.',
                ],
                [
                    'name' => 'Konsultasi IT dan Bisnis IT',
                    // 'url' => url('/services/consulting'),
                    'category' => url('/services/7'),
                    'icon' => 'chat-dots',
                    'tagline' => 'Bimbingan teknologi dan strategi untuk perkembangan bisnis Anda.',
                ],
            ],
            "mitras"=>[
                [
                    'name' => 'cisco',
                    'url' => url('/company-profile/img/mitra/cisco.png'),
                ],
                [
                    'name' => 'dahua',
                    'url' => url('/company-profile/img/mitra/dahua.png'),
                ],
                [
                    'name' => 'hikvision',
                    'url' => url('/company-profile/img/mitra/hikvision.png'),
                ],
                [
                    'name' => 'huawei',
                    'url' => url('/company-profile/img/mitra/huawei.png'),
                ],
                [
                    'name' => 'lenovo',
                    'url' => url('/company-profile/img/mitra/lenovo.png'),
                ],
                [
                    'name' => 'mikrotik',
                    'url' => url('/company-profile/img/mitra/mikrotik.png'),
                ],
                [
                    'name' => 'nec',
                    'url' => url('/company-profile/img/mitra/nec.png'),
                ],
                [
                    'name' => 'ubiquiti',
                    'url' => url('/company-profile/img/mitra/ubiquiti.png'),
                ],
            ],
            "portofolios"=>[
                [
                    'name' => 'Telkom',
                    'url' => url('company-profile/img/mitra.png'),
                    'category' => 'WiFI',
                    'id' => 1,
                    'description' => 'Pemasangan Wifi pada Telkom',
                ],
                [
                    'name' => 'Telkom',
                    'url' => url('company-profile/img/faq.png'),
                    'category' => 'Cable',
                    'id' => 2,
                    'description' => 'Pengkabelan',
                ],
            ],
            "portofolioCategories"=>[
                [
                    'name' => 'WiFi',
                ],
                [
                    'name' => 'Cable',
                ],
            ],
            'title' => 'Home || Swarakyat Nusantara'
        ]);
    }
    public function portofolio(){
        return view('company-profile.portofolio',[
            "services"=>[
                [
                    'name' => 'Pemasangan Wifi',
                    // 'url' => url('/services/wifi'),
                    'category' => url('/services/1'),
                    'icon' => 'wifi',
                    'tagline' => 'Koneksi cepat dan stabil untuk semua kebutuhan Anda.',
                ],
                [
                    'name' => 'Pemasangan CCTV',
                    // 'url' => url('/services/cctv'),
                    'category' => url('/services/2'),
                    'icon' => 'camera-video',
                    'tagline' => 'Awasi aset dan aktivitas bisnis Anda, kapan saja.',
                ],
                [
                    'name' => 'Maintenance Atau Pemasangan Kabel FO Atau LAN',
                    // 'url' => url('/services/cable'),
                    'category' => url('/services/3'),
                    'icon' => 'tools',
                    'tagline' => 'Jaringan kabel rapi, kuat, dan tahan lama.',
                ],
                [
                    'name' => 'Pengadaan Kasir dan Sistem Pembayaran',
                    // 'url' => url('/services/payment'),
                    'category' => url('/services/4'),
                    'icon' => 'qr-code-scan',
                    'tagline' => 'Transaksi lebih cepat, bisnis makin lancar.',
                ],
                [
                    'name' => 'Pembuatan Website dan Mobil App',
                    // 'url' => url('/services/dev'),
                    'category' => url('/services/5'),
                    'icon' => 'display',
                    'tagline' => 'Tingkatkan kehadiran digital bisnis Anda secara profesional.',
                ],
                [
                    'name' => 'Pembuatan Software Pendukung',
                    // 'url' => url('/services/software'),
                    'category' => url('/services/6'),
                    'icon' => 'code-slash',
                    'tagline' => 'Solusi software yang disesuaikan untuk mendukung operasional Anda.',
                ],
                [
                    'name' => 'Konsultasi IT dan Bisnis IT',
                    // 'url' => url('/services/consulting'),
                    'category' => url('/services/7'),
                    'icon' => 'chat-dots',
                    'tagline' => 'Bimbingan teknologi dan strategi untuk perkembangan bisnis Anda.',
                ],
            ],
            "portofolios"=>[
                [
                    'name' => 'Telkom',
                    'url' => url('company-profile/img/mitra.png'),
                    'category' => 'WiFI',
                    'id' => 1,
                    'description' => 'Pemasangan Wifi pada Telkom',
                ],
                [
                    'name' => 'Telkom',
                    'url' => url('company-profile/img/faq.png'),
                    'category' => 'Cable',
                    'id' => 2,
                    'description' => 'Pengkabelan',
                ],
            ],
            "portofolioCategories"=>[
                [
                    'name' => 'WiFi',
                ],
                [
                    'name' => 'Cable',
                ],
            ],
            'title' => 'Portofolio || Swarakyat Nusantara',
        ]);
    }
    public function portofolio_details(Request $request){
        return view('company-profile.portofolio-details',[
            'title' => 'Detail Portofolio || Swarakyat Nusantara',
            "services"=>[
                [
                    'name' => 'Pemasangan Wifi',
                    // 'url' => url('/services/wifi'),
                    'category' => url('/services/1'),
                    'icon' => 'wifi',
                    'tagline' => 'Koneksi cepat dan stabil untuk semua kebutuhan Anda.',
                ],
                [
                    'name' => 'Pemasangan CCTV',
                    // 'url' => url('/services/cctv'),
                    'category' => url('/services/2'),
                    'icon' => 'camera-video',
                    'tagline' => 'Awasi aset dan aktivitas bisnis Anda, kapan saja.',
                ],
                [
                    'name' => 'Maintenance Atau Pemasangan Kabel FO Atau LAN',
                    // 'url' => url('/services/cable'),
                    'category' => url('/services/3'),
                    'icon' => 'tools',
                    'tagline' => 'Jaringan kabel rapi, kuat, dan tahan lama.',
                ],
                [
                    'name' => 'Pengadaan Kasir dan Sistem Pembayaran',
                    // 'url' => url('/services/payment'),
                    'category' => url('/services/4'),
                    'icon' => 'qr-code-scan',
                    'tagline' => 'Transaksi lebih cepat, bisnis makin lancar.',
                ],
                [
                    'name' => 'Pembuatan Website dan Mobil App',
                    // 'url' => url('/services/dev'),
                    'category' => url('/services/5'),
                    'icon' => 'display',
                    'tagline' => 'Tingkatkan kehadiran digital bisnis Anda secara profesional.',
                ],
                [
                    'name' => 'Pembuatan Software Pendukung',
                    // 'url' => url('/services/software'),
                    'category' => url('/services/6'),
                    'icon' => 'code-slash',
                    'tagline' => 'Solusi software yang disesuaikan untuk mendukung operasional Anda.',
                ],
                [
                    'name' => 'Konsultasi IT dan Bisnis IT',
                    // 'url' => url('/services/consulting'),
                    'category' => url('/services/7'),
                    'icon' => 'chat-dots',
                    'tagline' => 'Bimbingan teknologi dan strategi untuk perkembangan bisnis Anda.',
                ],
            ],
        ]);
    }
    public function service(Request $request){
        return view('company-profile.service',[
            'title' => 'Detail Layanan || Swarakyat Nusantara',
            "services"=>[
                [
                    'name' => 'Pemasangan Wifi',
                    // 'url' => url('/services/wifi'),
                    'category' => url('/services/1'),
                    'icon' => 'wifi',
                    'tagline' => 'Koneksi cepat dan stabil untuk semua kebutuhan Anda.',
                ],
                [
                    'name' => 'Pemasangan CCTV',
                    // 'url' => url('/services/cctv'),
                    'category' => url('/services/2'),
                    'icon' => 'camera-video',
                    'tagline' => 'Awasi aset dan aktivitas bisnis Anda, kapan saja.',
                ],
                [
                    'name' => 'Maintenance Atau Pemasangan Kabel FO Atau LAN',
                    // 'url' => url('/services/cable'),
                    'category' => url('/services/3'),
                    'icon' => 'tools',
                    'tagline' => 'Jaringan kabel rapi, kuat, dan tahan lama.',
                ],
                [
                    'name' => 'Pengadaan Kasir dan Sistem Pembayaran',
                    // 'url' => url('/services/payment'),
                    'category' => url('/services/4'),
                    'icon' => 'qr-code-scan',
                    'tagline' => 'Transaksi lebih cepat, bisnis makin lancar.',
                ],
                [
                    'name' => 'Pembuatan Website dan Mobil App',
                    // 'url' => url('/services/dev'),
                    'category' => url('/services/5'),
                    'icon' => 'display',
                    'tagline' => 'Tingkatkan kehadiran digital bisnis Anda secara profesional.',
                ],
                [
                    'name' => 'Pembuatan Software Pendukung',
                    // 'url' => url('/services/software'),
                    'category' => url('/services/6'),
                    'icon' => 'code-slash',
                    'tagline' => 'Solusi software yang disesuaikan untuk mendukung operasional Anda.',
                ],
                [
                    'name' => 'Konsultasi IT dan Bisnis IT',
                    // 'url' => url('/services/consulting'),
                    'category' => url('/services/7'),
                    'icon' => 'chat-dots',
                    'tagline' => 'Bimbingan teknologi dan strategi untuk perkembangan bisnis Anda.',
                ],
            ],
        ]);
    }
}
