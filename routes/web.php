<?php

use App\Models\Faq;
use App\Models\Package;
use App\Models\Partner;
use App\Models\SiteSetting;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

Route::get('/', function () {
    return view('landing', [
        'packages' => Package::all(),
        'partners' => Partner::all(),
        'faqs' => Faq::where('is_active', true)->orderBy('sort_order')->get(),
        'testimonials' => Testimonial::where('is_active', true)->orderBy('sort_order')->get(),
        'settings' => [
            'site_name' => SiteSetting::get('site_name', 'HyperLink'),
            'site_tagline' => SiteSetting::get('site_tagline', 'Internet Pilihan Anak Muda'),
            'site_logo' => SiteSetting::get('site_logo', 'images/favicon.png'),
            'site_favicon' => SiteSetting::get('site_favicon', 'images/favicon.png'),
            'whatsapp_number' => SiteSetting::get('whatsapp_number', '6285156412702'),
            'meta_description' => SiteSetting::get('meta_description', ''),
            'og_image' => SiteSetting::get('og_image', 'images/brosur-promo.png'),
        ],
    ]);
});

Route::get('/sitemap.xml', function () {
    $sitemap = Sitemap::create()
        ->add(Url::create('/')
            ->setLastModificationDate(now())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
            ->setPriority(1.0));
    
    return $sitemap->toResponse(request());
});