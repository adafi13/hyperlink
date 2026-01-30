<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Aditya Prasetyo',
                'job_title' => 'Graphic Designer',
                'content' => 'Pindah ke HyperLink buat WFH bener-bener game changer. Upload file gede nggak pake nunggu lama!',
                'rating' => 5,
                'avatar_color' => 'gold',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Reza Fahlevi',
                'job_title' => 'E-sports Player',
                'content' => 'Internet paling stabil yang pernah saya pake buat main Valorant. Ping anteng di 10-15ms sebulan penuh.',
                'rating' => 5,
                'avatar_color' => 'blue',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Siti Aminah',
                'job_title' => 'Entrepreneur',
                'content' => 'Layanan supportnya jempolan. Pernah ada kendala malem-malem, dibantu sampe beres via WhatsApp.',
                'rating' => 5,
                'avatar_color' => 'purple',
                'sort_order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
