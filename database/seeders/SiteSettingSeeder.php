<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            // Branding
            [
                'key' => 'site_name',
                'value' => 'HyperLink',
                'type' => 'text',
                'group' => 'branding',
            ],
            [
                'key' => 'site_tagline',
                'value' => 'Internet Pilihan Anak Muda',
                'type' => 'text',
                'group' => 'branding',
            ],
            [
                'key' => 'site_logo',
                'value' => 'images/favicon.png',
                'type' => 'image',
                'group' => 'branding',
            ],
            [
                'key' => 'site_favicon',
                'value' => 'images/favicon.png',
                'type' => 'image',
                'group' => 'branding',
            ],

            // Contact
            [
                'key' => 'whatsapp_number',
                'value' => '6285156412702',
                'type' => 'text',
                'group' => 'contact',
            ],

            // SEO
            [
                'key' => 'meta_description',
                'value' => 'Nikmati koneksi 100% Fiber Optic dengan kuota tanpa batas. Powered by Sekawan Putra Pratama.',
                'type' => 'textarea',
                'group' => 'seo',
            ],
            [
                'key' => 'og_image',
                'value' => 'images/brosur-promo.png',
                'type' => 'image',
                'group' => 'seo',
            ],
        ];

        foreach ($settings as $setting) {
            SiteSetting::updateOrCreate(
                ['key' => $setting['key']],
                $setting
            );
        }
    }
}
