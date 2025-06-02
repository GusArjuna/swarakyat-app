<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index(){
        return view('data.index',[
            'title'=>'Admin || Swarakyat Nusantara',
            'menu'=>'Dashboard',
            "services"=>[
                [
                    'name' => 'Pemasangan Wifi',
                    'category' => 'services/1',
                    'icon' => 'wifi',
                    'tagline' => 'Koneksi cepat dan stabil untuk semua kebutuhan Anda.',
                ],
                [
                    'name' => 'Pemasangan CCTV',
                    'category' => 'services/2',
                    'icon' => 'camera-video',
                    'tagline' => 'Awasi aset dan aktivitas bisnis Anda, kapan saja.',
                ],
                [
                    'name' => 'Maintenance Atau Pemasangan Kabel FO Atau LAN',
                    'category' => 'services/3',
                    'icon' => 'tools',
                    'tagline' => 'Jaringan kabel rapi, kuat, dan tahan lama.',
                ],
                [
                    'name' => 'Pengadaan Kasir dan Sistem Pembayaran',
                    'category' => 'services/4',
                    'icon' => 'qr-code-scan',
                    'tagline' => 'Transaksi lebih cepat, bisnis makin lancar.',
                ],
                [
                    'name' => 'Pembuatan Website dan Mobil App',
                    'category' => 'services/5',
                    'icon' => 'display',
                    'tagline' => 'Tingkatkan kehadiran digital bisnis Anda secara profesional.',
                ],
                [
                    'name' => 'Pembuatan Software Pendukung',
                    'category' => 'services/6',
                    'icon' => 'code-slash',
                    'tagline' => 'Solusi software yang disesuaikan untuk mendukung operasional Anda.',
                ],
                [
                    'name' => 'Konsultasi IT dan Bisnis IT',
                    'category' => 'services/7',
                    'icon' => 'chat-dots',
                    'tagline' => 'Bimbingan teknologi dan strategi untuk perkembangan bisnis Anda.',
                ],
            ],
        ]);
    }
}
