<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $data = [
            ['Pemasangan Wifi','/services/1','chat-dots','Koneksi cepat dan stabil untuk semua kebutuhan Anda.'],
            ['Pemasangan CCTV','/services/2','camera-video','Awasi aset dan aktivitas bisnis Anda, kapan saja.'],
            ['Pengadaan Kasir dan Sistem Pembayaran','/services/3 ','qr-code-scan','Transaksi lebih cepat, bisnis makin lancar.'],
            ['Pembuatan Website dan Mobil App','/services/4','display','Tingkatkan kehadiran digital bisnis Anda secara profesional.'],
            ['Pembuatan Software Pendukung','/services/5','code-slash','Solusi software yang disesuaikan untuk mendukung operasional Anda.'],
            ['Konsultasi IT dan Bisnis IT','/services/6','chat-dots','Bimbingan teknologi dan strategi untuk perkembangan bisnis Anda.'],
            // Tambahkan baris data lain di sini jika diperlukan
        ];

        foreach ($data as $item) {
            Service::create([
                'name' => $item[0],
                'url' => $item[1],
                'icon' => $item[2],
                'tagline' => $item[3],
            ]);
        }
    }
}
