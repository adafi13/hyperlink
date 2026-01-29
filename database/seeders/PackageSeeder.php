<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Package;
use Illuminate\Support\Facades\DB;

class PackageSeeder extends Seeder
{
    public function run(): void
    {
        // Bersihkan data lama
        DB::table('packages')->truncate();

        // 1. Hyper Prime (15 Mbps) - Entry Level
        Package::create([
            'name' => 'Hyper Prime',
            'speed' => '15 Mbps',
            'price' => 100000,
            'features' => json_encode([
                'Ideal 1-3 Perangkat (HP/Laptop)', 
                'Browsing & Sosmed Lancar', 
                'Unlimited Tanpa FUP', 
                'Free Modem & Instalasi'
            ]),
            'is_featured' => false,
        ]);

        // 2. Hyper Elite (20 Mbps) - Daily Use
        Package::create([
            'name' => 'Hyper Elite',
            'speed' => '20 Mbps',
            'price' => 175000,
            'features' => json_encode([
                'Ideal 3-5 Perangkat', 
                'Streaming YouTube HD Lancar', 
                'Stabil untuk Sekolah Online', 
                'Free Instalasi'
            ]),
            'is_featured' => true, // Kita jadikan Best Seller karena harganya "tengah-tengah"
        ]);

        // 3. Hyper Platinum (30 Mbps) - Gamer & WFH
        Package::create([
            'name' => 'Hyper Platinum',
            'speed' => '30 Mbps',
            'price' => 225000,
            'features' => json_encode([
                'Ideal 5-7 Perangkat', 
                'Gaming Ping Rendah (Anti-Lag)', 
                'Zoom Meeting Jernih', 
                'Prioritas Jaringan'
            ]),
            'is_featured' => false,
        ]);

        // 4. Hyper Gold (50 Mbps) - Heavy User
        Package::create([
            'name' => 'Hyper Gold',
            'speed' => '50 Mbps',
            'price' => 275000,
            'features' => json_encode([
                'Ideal 7+ Perangkat (Keluarga)', 
                'Streaming 4K Tanpa Buffering', 
                'Download & Upload Cepat', 
                'VIP Support Prioritas'
            ]),
            'is_featured' => false,
        ]);
    }
}