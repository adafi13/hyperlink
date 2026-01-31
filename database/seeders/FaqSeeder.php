<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'Apakah benar Unlimited tanpa FUP?',
                'answer' => 'Tentu saja! HyperLink menyediakan layanan internet murni tanpa batas sepuasnya tanpa penurunan kecepatan.',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'question' => 'Berapa lama waktu pemasangan?',
                'answer' => 'Setelah pendaftaran diverifikasi, teknisi kami akan melakukan instalasi dalam 1-3 hari kerja.',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'question' => 'Apakah ada biaya tersembunyi?',
                'answer' => 'Harga yang tertera sudah transparan. Kami tidak mengenakan biaya sewa modem bulanan atau biaya admin tersembunyi lainnya.',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'question' => 'Bagaimana jika terjadi gangguan?',
                'answer' => 'Layanan support kami siaga 24/7. Anda bisa langsung menghubungi tim teknis via WhatsApp untuk penanganan cepat.',
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'question' => 'Bisa ubah paket kapan saja?',
                'answer' => 'Bisa. Anda cukup menghubungi layanan pelanggan kami untuk menyesuaikan kecepatan internet sesuai kebutuhan terbaru tanpa denda penalti.',
                'sort_order' => 5,
                'is_active' => true,
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}
