<?php

namespace Database\Seeders;

use App\Models\Mitra;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MitraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['Cisco','mitra/cisco.png','Network','2025-06-07'],
            ['dahua','mitra/dahua.png','CCTV','2025-06-07'],
            ['hikvision','mitra/hikvision.png','CCTV','2025-06-07'],
            ['huawei','mitra/huawei.png','Network','2025-06-07'],
            ['lenovo','mitra/lenovo.png','Device','2025-06-07'],
            ['mikrotik','mitra/mikrotik.png','Network','2025-06-07'],
            ['nec','mitra/nec.png','Network','2025-06-07'],
            ['ubiquiti','mitra/ubiquiti.png','Network','2025-06-07'],
            // Tambahkan baris data lain di sini jika diperlukan
        ];

        foreach ($data as $item) {
            Mitra::create([
                'name' => $item[0],
                'url' => $item[1],
                'category' => $item[2],
                'join' => $item[3],
            ]);
        }
    }
}
