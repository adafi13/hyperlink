<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $settings['site_name'] }} - {{ $settings['site_tagline'] }}</title>
    <meta name="description" content="{{ $settings['meta_description'] }}">
    <meta name="keywords" content="internet murah, internet rakyat, internet rumahan murah, wifi murah unlimited, internet fiber optic murah, paket internet murah, provider internet murah, wifi rumah murah, paket internet unlimited, internet tanpa FUP, wifi unlimited, internet bandwidth tinggi, internet gaming, hyperlink internet">
    <meta name="author" content="Sekawan Putra Pratama">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="theme-color" content="#EAB308">
    <link rel="canonical" href="{{ url()->current() }}">

    <link rel="icon" type="image/png" href="{{ asset($settings['site_favicon']) }}">
    <link rel="apple-touch-icon" href="{{ asset($settings['site_favicon']) }}">

    <meta property="og:locale" content="id_ID">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $settings['site_name'] }} - {{ $settings['site_tagline'] }}">
    <meta property="og:description" content="{{ $settings['meta_description'] }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="{{ $settings['site_name'] }}">
    <meta property="og:image" content="{{ asset($settings['og_image']) }}?v={{ filemtime(public_path($settings['og_image'])) }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/png">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $settings['site_name'] }} - {{ $settings['site_tagline'] }}">
    <meta name="twitter:description" content="{{ $settings['meta_description'] }}">
    <meta name="twitter:image" content="{{ asset($settings['og_image']) }}?v={{ filemtime(public_path($settings['og_image'])) }}">
    <meta name="twitter:image:alt" content="{{ $settings['site_name'] }} - Paket Internet Fiber Optic Unlimited">

    @php
    $organizationSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => $settings['site_name'],
        'alternateName' => 'HyperLink Internet - Internet Murah Rakyat',
        'url' => url('/'),
        'logo' => asset($settings['site_logo']),
        'description' => $settings['meta_description'],
        'address' => [
            '@type' => 'PostalAddress',
            'addressLocality' => 'Indonesia',
            'addressCountry' => 'ID'
        ],
        'contactPoint' => [
            '@type' => 'ContactPoint',
            'telephone' => $settings['whatsapp_number'],
            'contactType' => 'customer service',
            'availableLanguage' => ['Indonesian']
        ]
    ];

    $businessSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'InternetServiceProvider',
        'name' => $settings['site_name'],
        'image' => asset($settings['og_image']),
        'description' => 'Provider internet murah dan internet rakyat dengan koneksi fiber optic unlimited tanpa FUP. ' . $settings['meta_description'],
        'priceRange' => '$',
        'telephone' => $settings['whatsapp_number'],
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => 'Jl. Raya Bogor',
            'addressLocality' => 'Depok',
            'addressRegion' => 'Jawa Barat',
            'postalCode' => '16516',
            'addressCountry' => 'ID'
        ],
        'geo' => [
            '@type' => 'GeoCoordinates',
            'latitude' => -6.435738,
            'longitude' => 106.81451
        ],
        'hasMap' => 'https://www.google.com/maps?q=-6.435738,106.81451',
        'url' => url('/'),
        'areaServed' => [
            ['@type' => 'City', 'name' => 'Depok'],
            ['@type' => 'City', 'name' => 'Bogor']
        ],
        'openingHoursSpecification' => [
            '@type' => 'OpeningHoursSpecification',
            'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
            'opens' => '00:00',
            'closes' => '23:59'
        ],
        'aggregateRating' => [
            '@type' => 'AggregateRating',
            'ratingValue' => '4.8',
            'reviewCount' => '1500'
        ]
    ];

    $faqItems = [];
    if(isset($faqs) && count($faqs) > 0) {
        foreach($faqs as $faq) {
            $faqItems[] = [
                '@type' => 'Question',
                'name' => $faq->question,
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => $faq->answer
                ]
            ];
        }
    }
    $faqSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => $faqItems
    ];

    $serviceSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'serviceType' => 'Internet Murah Fiber Optic',
        'provider' => [
            '@type' => 'Organization',
            'name' => $settings['site_name']
        ],
        'areaServed' => [
            ['@type' => 'City', 'name' => 'Depok'],
            ['@type' => 'City', 'name' => 'Bogor']
        ],
        'description' => 'Layanan internet murah untuk rakyat dengan koneksi fiber optic unlimited tanpa FUP, free instalasi, dan harga terjangkau.',
        'offers' => [
            '@type' => 'AggregateOffer',
            'priceCurrency' => 'IDR',
            'lowPrice' => isset($packages) && count($packages) > 0 ? $packages->min('price') : 99000,
            'highPrice' => isset($packages) && count($packages) > 0 ? $packages->max('price') : 299000,
            'offerCount' => isset($packages) ? count($packages) : 4
        ]
    ];
    @endphp

    <script type="application/ld+json">{!! json_encode($organizationSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
    <script type="application/ld+json">{!! json_encode($businessSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
    @if(count($faqItems) > 0)
    <script type="application/ld+json">{!! json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
    @endif
    <script type="application/ld+json">{!! json_encode($serviceSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="{{ asset('js/tailwind/tailwind.js') }}?v={{ filemtime(public_path('js/tailwind/tailwind.js')) }}"></script>
    <style>
        .bg-grid {
            background-size: 50px 50px;
            background-image: linear-gradient(to right, rgba(255, 255, 255, 0.03) 1px, transparent 1px),
                              linear-gradient(to bottom, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
            mask-image: radial-gradient(circle at center, black 40%, transparent 100%);
            -webkit-mask-image: radial-gradient(circle at center, black 40%, transparent 100%);
        }
        .text-gold-gradient {
            background: linear-gradient(to bottom right, #FDE047, #CA8A04);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .card-modern {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            transition: all 0.4s ease;
        }
        .card-modern:hover {
            border-color: rgba(234, 179, 8, 0.4);
            box-shadow: 0 0 30px -10px rgba(234, 179, 8, 0.2);
            transform: translateY(-5px);
        }
        .reveal { opacity: 0; transform: translateY(30px); transition: all 0.8s ease-out; }
        .reveal.active { opacity: 1; transform: translateY(0); }
        a:hover, button:hover {
            text-shadow: 0 0 10px rgba(234, 179, 8, 0.4);
        }

        /* --- CSS UNTUK MODAL --- */
        #registrationModal { transition: opacity 0.3s ease, visibility 0.3s ease; }
        #registrationModal.hidden { opacity: 0; visibility: hidden; pointer-events: none; }
        #registrationModal:not(.hidden) { opacity: 1; visibility: visible; pointer-events: auto; }
        .modal-content { transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1); transform: scale(0.95); }
        #registrationModal:not(.hidden) .modal-content { transform: scale(1); }

        /* --- CSS UNTUK SCROLL TOP BUTTON --- */
        #scrollTopBtn { transition: all 0.5s ease; }
        #scrollTopBtn.hidden-btn { opacity: 0; pointer-events: none; transform: translateY(20px); }
        #scrollTopBtn.show-btn { opacity: 1; pointer-events: auto; transform: translateY(0); }
    </style>
</head>
<body class="bg-dark-bg text-white selection:bg-gold-500 selection:text-black overflow-x-hidden font-sans">

    <div class="fixed inset-0 z-[-1] bg-grid"></div>
    <div class="fixed top-0 left-1/2 -translate-x-1/2 w-[800px] h-[500px] bg-gold-500/10 blur-[120px] rounded-full z-[-2] pointer-events-none"></div>

    <nav class="fixed top-6 left-0 right-0 z-50 flex justify-center px-4">
        <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-full pl-6 pr-2 py-2 flex items-center gap-6 shadow-2xl shadow-black/50">
            <a href="#" class="flex items-center gap-2 group">
                <img src="{{ asset($settings['site_logo']) }}" alt="{{ $settings['site_name'] }} Logo" class="w-10 h-10 drop-shadow-[0_0_8px_rgba(234,179,8,0.5)] group-hover:scale-110 transition duration-300">
                <span class="font-display font-bold text-lg tracking-tight text-white uppercase tracking-tighter">HYPER LI<span class="text-gold-500">NK</span></span>
            </a>

            <div class="hidden lg:flex items-center gap-2 px-3 py-1.5 rounded-full bg-green-500/10 border border-green-500/20">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                </span>
                <span class="text-[9px] font-bold text-green-500 uppercase tracking-tighter">Systems Optimal</span>
            </div>

            <div class="hidden md:flex items-center gap-6 text-sm font-medium text-gray-300">
                <a href="#features" class="hover:text-white transition duration-300">Keunggulan</a>
                <a href="#plans" class="hover:text-white transition duration-300">Paket</a>
                <a href="#coverage" class="hover:text-white transition duration-300">Coverage</a>
                <a href="#faq" class="hover:text-white transition duration-300">FAQ</a>
            </div>

            <a href="#plans" class="bg-gold-500 text-black text-sm font-bold px-6 py-2.5 rounded-full hover:bg-gold-400 transition duration-300 shadow-[0_0_20px_-5px_rgba(234,179,8,0.6)]">
                Daftar Sekarang
            </a>
        </div>
    </nav>

    <header class="relative pt-40 pb-20 px-6 min-h-screen flex flex-col items-center justify-center text-center overflow-hidden">
        <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-purple-500/20 rounded-full blur-[80px] animate-blob"></div>
        <div class="absolute bottom-1/4 right-1/4 w-72 h-72 bg-gold-500/20 rounded-full blur-[80px] animate-blob animation-delay-2000"></div>

        <div class="relative z-10 max-w-5xl mx-auto reveal active">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-gold-500/30 bg-gold-500/5 text-gold-400 text-xs font-bold uppercase tracking-wider mb-8 shadow-[0_0_15px_rgba(234,179,8,0.2)]">
                <span class="w-2 h-2 rounded-full bg-gold-500 animate-pulse"></span>
                Internet Pilihan Anak Muda
            </div>
            <h1 class="font-display text-5xl md:text-8xl font-extrabold text-white leading-[1.1] mb-6 tracking-tight">
                <span class="text-gold-gradient drop-shadow-[0_0_20px_rgba(234,179,8,0.3)]">INTERNET MURAH</span> <br>
                UNLIMITED TANPA BATAS <br>
                UNTUK RAKYAT.
            </h1>
            <p class="text-lg md:text-xl text-gray-400 max-w-2xl mx-auto mb-10 leading-relaxed text-center">
                <strong>Internet murah</strong> dengan koneksi <strong>100% Fiber Optic</strong> untuk semua kalangan. Kuota tanpa batas, Bebas FUP, Bebas Lag, Free Instalasi.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-16">
                <a href="#plans" class="relative overflow-hidden group w-full sm:w-auto px-8 py-4 bg-gold-500 text-black rounded-2xl font-bold shadow-[0_0_30px_-5px_rgba(234,179,8,0.5)] hover:shadow-[0_0_50px_-10px_rgba(234,179,8,0.7)] hover:-translate-y-1 transition-all">
                    <span class="relative z-10 text-center">Lihat Paket →</span>
                    <div class="absolute inset-0 -translate-x-full group-hover:animate-[shimmer_1.5s_infinite] bg-gradient-to-r from-transparent via-white/40 to-transparent z-0"></div>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-12 bg-white/5 backdrop-blur-md border border-white/10 rounded-3xl p-6 md:p-8 shadow-2xl max-w-4xl mx-auto">
                <div class="text-center"><div><div class="text-4xl mb-2 text-center">⚡</div><p class="text-lg font-display font-bold text-white text-center">100% Fiber Optic</p><p class="text-xs text-gray-400 mt-1 text-center">Koneksi lebih stabil</p></div></div>
                <div class="border-t md:border-t-0 md:border-l border-white/10 pt-4 md:pt-0 text-center text-center">
                    <div class="text-4xl mb-2 text-center text-center">♾️</div><p class="text-lg font-display font-bold text-gold-400 text-center">Kuota Tanpa Batas</p><p class="text-xs text-gray-400 mt-1 text-center">Bebas FUP sepuasnya</p>
                </div>
                <div class="border-t md:border-t-0 md:border-l border-white/10 pt-4 md:pt-0 text-center">
                    <div class="text-4xl mb-2 text-center text-center">🛠️</div><p class="text-lg font-display font-bold text-white text-center">Free Instalasi</p><p class="text-xs text-gray-400 mt-1 text-center">Tanpa biaya pasang</p>
                </div>
            </div>
        </div>
    </header>

    <section class="py-12 px-6">
        <div class="container mx-auto max-w-4xl reveal">
            <div class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-yellow-600 to-yellow-400 text-black p-8 md:p-12 text-center shadow-[0_0_60px_rgba(234,179,8,0.3)] border border-yellow-300/50">
                <div class="absolute -top-24 -left-24 w-64 h-64 bg-white/30 rounded-full blur-3xl"></div>
                <div class="relative z-10">
                    <h2 class="font-display text-3xl md:text-5xl font-bold mb-4 italic text-center uppercase">SPECIAL PROMO!</h2>
                    <div class="inline-block bg-black/10 backdrop-blur-sm border border-black/10 rounded-xl px-6 py-3 text-center">
                        <span class="text-xl md:text-3xl font-bold text-center">Bayar 3 Bulan <span class="bg-black text-yellow-400 px-2 rounded mx-1 text-center">FREE 1 Bulan</span></span>
                    </div>
                    <p class="mt-4 text-sm font-semibold opacity-75 text-center italic">*Syarat & Ketentuan berlaku</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 px-6 border-y border-white/5 bg-black/20">
        <div class="container mx-auto max-w-5xl">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center reveal">
                <div><div class="text-4xl md:text-5xl font-display font-extrabold text-gold-gradient mb-2 counter" data-target="1500">0</div><p class="text-xs font-bold text-gray-500 uppercase tracking-widest text-center">Pelanggan Aktif</p></div>
                <div><div class="text-4xl md:text-5xl font-display font-extrabold text-white mb-2 counter" data-target="45">0</div><p class="text-xs font-bold text-gray-500 uppercase tracking-widest text-center">Cakupan Area</p></div>
                <div><div class="text-4xl md:text-5xl font-display font-extrabold text-white mb-2 counter" data-target="99">0</div><p class="text-xs font-bold text-gray-500 uppercase tracking-widest text-center">% Uptime</p></div>
                <div><div class="text-4xl md:text-5xl font-display font-extrabold text-white mb-2 counter" data-target="24">0</div><p class="text-xs font-bold text-gray-500 uppercase tracking-widest text-center">Jam Support</p></div>
            </div>
        </div>
    </section>

    <div class="py-12 bg-black/30">
        <div class="container mx-auto px-6">
            <div class="text-center mb-10">
                <p class="text-xs font-bold text-gray-600 uppercase tracking-[0.3em]">Official Connectivity Partner</p>
            </div>
            <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16 max-w-5xl mx-auto opacity-40 grayscale brightness-0 invert">
                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/netflix.svg" alt="Netflix" class="w-10 h-10 md:w-12 md:h-12 hover:scale-110 transition duration-300 cursor-pointer">
                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/google.svg" alt="Google" class="w-10 h-10 md:w-12 md:h-12 hover:scale-110 transition duration-300 cursor-pointer">
                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/valorant.svg" alt="Valorant" class="w-10 h-10 md:w-12 md:h-12 hover:scale-110 transition duration-300 cursor-pointer">
                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/spotify.svg" alt="Spotify" class="w-10 h-10 md:w-12 md:h-12 hover:scale-110 transition duration-300 cursor-pointer">
                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/discord.svg" alt="Discord" class="w-10 h-10 md:w-12 md:h-12 hover:scale-110 transition duration-300 cursor-pointer">
                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/youtube.svg" alt="YouTube" class="w-10 h-10 md:w-12 md:h-12 hover:scale-110 transition duration-300 cursor-pointer">
            </div>
        </div>
    </div>

    <section class="py-24 px-6 bg-white/[0.02]">
        <div class="container mx-auto max-w-4xl reveal">
            <div class="text-center mb-12">
                <span class="text-gold-500 font-bold uppercase tracking-wider text-sm text-center">Internet Murah Berkualitas</span>
                <h2 class="font-display text-3xl font-bold text-white mt-2 text-center">Kenapa Pilih Internet Rakyat HyperLink?</h2>
            </div>
            <div class="overflow-x-auto rounded-3xl border border-white/10 card-modern">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-white/5">
                            <th class="p-6 text-gray-400 font-medium">Fitur Utama</th>
                            <th class="p-6 text-gold-500 font-bold">HyperLink</th>
                            <th class="p-6 text-gray-500 font-medium text-center">Provider Lain</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm">
                        <tr class="border-t border-white/5">
                            <td class="p-6 text-white font-medium">Fair Usage Policy (FUP)</td>
                            <td class="p-6 text-green-400 font-bold text-center">Murni Tanpa Batas</td>
                            <td class="p-6 text-gray-500 text-center">Sering Dibatasi</td>
                        </tr>
                        <tr class="border-t border-white/5">
                            <td class="p-6 text-white font-medium">Upload : Download</td>
                            <td class="p-6 text-green-400 font-bold text-center">Simetris 1:1</td>
                            <td class="p-6 text-gray-500 text-center">Asimetris (Lambat)</td>
                        </tr>
                        <tr class="border-t border-white/5">
                            <td class="p-6 text-white font-medium">Biaya Instalasi</td>
                            <td class="p-6 text-green-400 font-bold text-center">FREE (Rp 0)</td>
                            <td class="p-6 text-gray-500 text-center">Rp 250.000+</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section id="features" class="py-24 px-6 relative overflow-hidden">
        <div class="container mx-auto max-w-6xl">
            <div class="text-center mb-16 reveal">
                <span class="text-gold-500 font-bold uppercase tracking-wider text-sm text-center">Keunggulan Kami</span>
                <h2 class="font-display text-4xl font-bold text-white mt-2 text-center text-center">Standar Internet Masa Depan</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="reveal card-modern rounded-[2rem] p-8 relative overflow-hidden group">
                    <div class="w-12 h-12 bg-gold-500/10 text-gold-400 rounded-xl flex items-center justify-center text-2xl mb-6 border border-gold-500/20 text-center">⚡</div>
                    <h3 class="font-display text-2xl font-bold mb-3 text-white text-center md:text-left">Simetris 1:1</h3>
                    <p class="text-gray-400 text-sm leading-relaxed text-center md:text-left">Kecepatan Upload dan Download sama cepatnya. Kirim file besar secepat menerima file.</p>
                </div>

                <div class="reveal card-modern rounded-[2rem] p-8 relative overflow-hidden group border-gold-500/20">
                    <div class="w-12 h-12 bg-white/10 rounded-xl flex items-center justify-center text-2xl mb-6 text-white text-center">🎮</div>
                    <h3 class="font-display text-2xl font-bold mb-3 text-white text-center md:text-left">Low Latency Gaming</h3>
                    <p class="text-gray-400 text-sm leading-relaxed text-center md:text-left">Routing khusus ke server game populer (Valorant, MLBB, Dota 2) untuk ping terendah & stabil.</p>
                </div>

                <div class="reveal card-modern rounded-[2rem] p-8 relative overflow-hidden group">
                    <div class="w-12 h-12 bg-gold-500/10 text-gold-400 rounded-xl flex items-center justify-center text-2xl mb-6 border border-gold-500/20 text-center">♾️</div>
                    <h3 class="font-display text-2xl font-bold mb-3 text-white text-center md:text-left">No FUP Guarantee</h3>
                    <p class="text-gray-400 text-sm leading-relaxed text-center md:text-left">Bebas kuota sepuasnya tanpa ada batas pemakaian wajar. Kecepatan tetap stabil 24/7.</p>
                </div>

                <div class="reveal card-modern rounded-[2rem] p-8 relative overflow-hidden group text-center md:text-left">
                    <div class="w-12 h-12 bg-white/10 rounded-xl flex items-center justify-center text-2xl mb-6 text-white text-center">🛡️</div>
                    <h3 class="font-display text-2xl font-bold mb-3 text-white">Enterprise SLA</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Jaminan ketersediaan layanan hingga 99.9%. Infrastruktur kelas bisnis untuk rumah Anda.</p>
                </div>

                <div class="reveal md:col-span-2 bg-gradient-to-br from-gold-500 to-gold-600 text-black rounded-[2rem] p-8 shadow-[0_0_30px_rgba(234,179,8,0.3)] relative overflow-hidden group flex flex-col md:flex-row items-center justify-between text-center md:text-left">
                    <div class="relative z-10 max-w-md">
                        <div class="w-12 h-12 bg-black/10 rounded-xl flex items-center justify-center text-2xl mb-4 text-center">📞</div>
                        <h3 class="font-display text-3xl font-bold mb-2">Dedicated Support</h3>
                        <p class="text-black/70 font-medium">Bukan bot. Tim support ahli kami siap membantu kendala teknis Anda melalui WhatsApp dalam hitungan menit.</p>
                    </div>
                    <div class="text-9xl opacity-10 absolute -right-6 -bottom-6 rotate-12 group-hover:scale-110 transition duration-500 pointer-events-none italic">SUPPORT</div>
                </div>
            </div>
        </div>
    </section>

    <section id="plans" class="py-24 px-6 relative bg-white/5 border-y border-white/5">
        <div class="container mx-auto max-w-6xl relative z-10">
            <div class="text-center mb-16 reveal">
                <span class="text-gold-500 font-bold uppercase tracking-wider text-sm text-center">Paket Internet Murah</span>
                <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-2 mb-4 text-center">Pilih Paket Internet Anda</h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 items-start">
                @foreach($packages as $package)
                    <div class="reveal card-modern rounded-[2rem] p-6 group flex flex-col h-full relative hover:border-gold-500/50 transition-all duration-300 {{ $package->is_featured ? 'bg-gold-500/5 border-gold-500/30' : '' }}">
                        @if($package->is_featured)
                            <div class="absolute -top-3 left-1/2 -translate-x-1/2 bg-gold-500 text-black text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-widest whitespace-nowrap text-center">Paling Laris</div>
                        @endif
                        <h3 class="font-display text-lg font-bold text-white uppercase text-center">{{ $package->name }}</h3>
                        <p class="text-gold-500 font-bold text-2xl mb-4 italic text-center">{{ $package->speed }}</p>
                        <div class="mb-4 pb-4 border-b border-white/10 text-2xl font-bold text-white text-center">Rp {{ number_format($package->price / 1000, 0) }}.000<span class="text-xs text-gray-500 font-normal italic">/bln</span></div>

                        <ul class="space-y-2 text-sm text-gray-400 mb-6 flex-grow">
                            @php
                                $features = $package->features;
                                if (is_string($features)) {
                                    $decoded = json_decode($features, true);
                                    $features = (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) ? $decoded : explode(',', $features);
                                }
                            @endphp
                            @foreach($features as $feature)
                                <li class="flex gap-2 items-start justify-center md:justify-start"><span class="text-gold-500 font-bold text-center">✓</span> <span class="text-center md:text-left">{{ trim($feature) }}</span></li>
                            @endforeach
                        </ul>

                        <button onclick="openModal('{{ $package->name }}')" class="block w-full text-center py-3 rounded-xl font-bold transition-all cursor-pointer {{ $package->is_featured ? 'bg-gold-500 text-black' : 'border border-white/20 text-white hover:bg-white hover:text-black' }}">
                            Pilih Paket
                        </button>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="coverage" class="py-24 px-6 relative bg-black/20">
        <div class="container mx-auto max-w-5xl text-center reveal text-center">
            <span class="text-gold-500 font-bold uppercase tracking-wider text-sm text-center">Our Coverage</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-white mt-2 mb-12 text-center uppercase">Tersedia di Kota-Kota Besar</h2>
            <div class="flex flex-wrap justify-center gap-3 mb-16">
                <span class="px-6 py-3 rounded-xl bg-white/5 border border-white/10 font-semibold text-gray-300 hover:border-gold-500/50 transition cursor-default text-center">📍 Depok</span>
                <span class="px-6 py-3 rounded-xl bg-white/5 border border-white/10 font-semibold text-gray-300 hover:border-gold-500/50 transition cursor-default text-center">📍 Bogor</span>
                <span class="px-4 md:px-6 py-3 rounded-xl bg-gold-500/10 border border-gold-500/30 font-semibold text-gold-400 animate-pulse text-center text-center">🚀 (Coming Soon)</span>
            </div>
            <div class="bg-dark-surface border border-white/10 rounded-[3rem] p-10 md:p-16 relative overflow-hidden shadow-2xl">
                <div class="absolute top-0 right-0 w-64 h-64 bg-gold-500 rounded-full blur-[100px] opacity-10"></div>
                <div class="relative z-10 text-center">
                    <h3 class="font-display text-3xl md:text-4xl font-bold text-white mb-6">Siap untuk Upgrade?</h3>
                    <p class="text-gray-400 max-w-lg mx-auto mb-10 text-lg text-center">Dapatkan promo <strong>Bayar 3 Bulan Free 1 Bulan</strong> sekarang juga. Tanpa kontrak rumit.</p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="https://wa.me/6285283089638?text=Halo%20Admin%20HyperLink,%20saya%20ingin%20bertanya%20mengenai%20promo%20internet" target="_blank" class="px-10 py-4 bg-gold-500 text-black rounded-2xl font-bold shadow-lg hover:-translate-y-1 transition text-center">Mulai Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 px-6 relative overflow-hidden">
        <div class="container mx-auto max-w-6xl">
            <div class="text-center mb-16 reveal">
                <span class="text-gold-500 font-bold uppercase tracking-wider text-sm text-center">Testimonials</span>
                <h2 class="font-display text-4xl font-bold text-white mt-2 text-center">Apa Kata Pengguna HyperLink?</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @forelse($testimonials as $testimonial)
                <div class="card-modern rounded-[2rem] p-8 reveal text-center md:text-left">
                    <div class="flex gap-1 text-gold-500 mb-4 justify-center md:justify-start">
                        @for($i = 0; $i < $testimonial->rating; $i++)<span>★</span>@endfor
                    </div>
                    <p class="text-gray-300 italic mb-6 text-sm leading-relaxed text-center md:text-left">"{{ $testimonial->content }}"</p>
                    <div class="flex items-center gap-4 justify-center md:justify-start">
                        <div class="w-10 h-10 rounded-full bg-{{ $testimonial->avatar_color }}-500/20 flex items-center justify-center font-bold text-{{ $testimonial->avatar_color }}-500">{{ $testimonial->initial }}</div>
                        <div class="text-center md:text-left">
                            <p class="text-white font-bold text-sm">{{ $testimonial->name }}</p>
                            <p class="text-gray-500 text-xs">{{ $testimonial->job_title }}</p>
                        </div>
                    </div>
                </div>
                @empty
                <p class="text-gray-500 italic text-center col-span-3">Belum ada testimonial yang tersedia.</p>
                @endforelse
            </div>
        </div>
    </section>

    <section class="py-24 px-6 border-t border-white/5 overflow-hidden">
        <div class="container mx-auto max-w-6xl">
            <div class="text-center mb-16 reveal">
                <span class="text-gold-500 font-bold uppercase tracking-wider text-sm">Strategic Partnership</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-white mt-2">Berkolaborasi dengan Mitra Terbaik</h2>
            </div>

            <div class="relative flex overflow-x-hidden group">
                <div class="py-12 animate-scroll flex gap-20 items-center whitespace-nowrap">
                    @if(isset($partners) && $partners->count() > 0)

                        @foreach($partners as $partner)
                            <img src="{{ asset('storage/' . $partner->logo) }}"
        alt="{{ $partner->name }}"
        class="w-[30em] md:w-[38em] h-[7em] object-contain opacity-70 hover:opacity-100 transition duration-300">
                        @endforeach
                    @else
                        <p class="text-gray-500 italic w-full text-center">Data mitra kerja sama belum tersedia.</p>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <section id="faq" class="py-24 px-6 relative border-t border-white/5 bg-black/40">
        <div class="container mx-auto max-w-3xl reveal px-4">
            <div class="text-center mb-16">
                <span class="text-gold-500 font-bold uppercase tracking-wider text-sm text-center">FAQ</span>
                <h2 class="font-display text-4xl font-bold text-white mt-2 text-center uppercase">Sering Ditanyakan</h2>
            </div>
            <div class="space-y-4">
                @forelse($faqs as $index => $faq)
                <details class="group card-modern rounded-[1.5rem] p-6 cursor-pointer" {{ $index === 0 ? 'open' : '' }}>
                    <summary class="flex justify-between items-center font-display font-bold text-lg text-white list-none">{{ $faq->question }}<span class="text-gold-500 group-open:rotate-180 transition text-center text-xs">▼</span></summary>
                    <p class="text-gray-400 mt-4 leading-relaxed text-sm border-t border-white/5 pt-4 text-center md:text-left">{{ $faq->answer }}</p>
                </details>
                @empty
                <p class="text-gray-500 italic text-center">Belum ada FAQ yang tersedia.</p>
                @endforelse
            </div>
        </div>
    </section>

    <section id="location" class="py-24 px-6 relative border-t border-white/5 bg-black/20">
        <div class="container mx-auto max-w-5xl reveal">
            <div class="text-center mb-12">
                <span class="text-gold-500 font-bold uppercase tracking-wider text-sm">Lokasi Kami</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-white mt-2">Temukan Kantor HyperLink</h2>
                <p class="text-gray-400 mt-4 max-w-xl mx-auto">Kunjungi kantor kami atau hubungi tim support untuk informasi lebih lanjut mengenai layanan internet murah kami.</p>
            </div>
            <div class="rounded-3xl overflow-hidden border border-white/10 shadow-2xl">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d495.4!2d106.81451!3d-6.435738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMjYnMDguNyJTIDEwNsKwNDgnNTIuMiJF!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid"
                    width="100%"
                    height="400"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    class="w-full">
                </iframe>
            </div>
            <div class="mt-8 flex flex-col md:flex-row justify-center items-center gap-6 text-center">
                <div class="flex items-center gap-3 text-gray-400">
                    <span class="text-2xl">📍</span>
                    <span>Depok, Jawa Barat, Indonesia</span>
                </div>
                <a href="https://www.google.com/maps?q=-6.435738,106.81451" target="_blank" class="inline-flex items-center gap-2 px-6 py-3 bg-gold-500/10 border border-gold-500/30 rounded-xl text-gold-400 font-semibold hover:bg-gold-500 hover:text-black transition duration-300">
                    <span>Buka di Google Maps</span>
                    <span>→</span>
                </a>
            </div>
        </div>
    </section>

   <footer class="bg-black text-gray-400 py-16 border-t border-white/10">
        <div class="container mx-auto px-6 text-center">
            <div class="flex flex-col items-center gap-6">
                <a href="#" class="flex items-center gap-2 text-center group">
                    <img src="{{ asset($settings['site_logo']) }}" class="w-8 h-8 opacity-50 grayscale group-hover:grayscale-0 group-hover:opacity-100 transition duration-500">
                    <span class="font-display font-bold text-lg text-white opacity-50 tracking-widest uppercase group-hover:opacity-100 transition duration-500">{{ $settings['site_name'] }}</span>
                </a>

                <div class="flex flex-col items-center gap-1">
                    <p class="text-sm text-gray-500 tracking-wide">
                        &copy; {{ date('Y') }} <span class="text-white font-bold">{{ $settings['site_name'] }}</span>. All Rights Reserved.
                    </p>
                    <p class="text-xs text-gray-600 tracking-widest uppercase mt-1">
                        Published by <a href="https://www.sekawanputrapratama.com" target="_blank" class="text-gold-500 hover:text-white transition-colors font-semibold">www.sekawanputrapratama.com</a>
                    </p>
                </div>

                <div class="h-[1px] w-20 bg-gradient-to-r from-transparent via-gold-500/20 to-transparent mt-2"></div>
            </div>
        </div>
    </footer>

    <a href="https://wa.me/6285283089638?text=Halo%20Admin%20HyperLink,%20saya%20butuh%20bantuan%20mengenai%20layanan%20internet" target="_blank" class="fixed bottom-6 right-6 z-[60] bg-[#25D366] p-4 rounded-full shadow-[0_0_30px_rgba(37,211,102,0.4)] hover:scale-110 active:scale-95 transition-all group border border-white/10">
        <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
        <span class="absolute right-20 top-1/2 -translate-y-1/2 bg-white text-black text-[10px] font-bold px-3 py-1.5 rounded-lg opacity-0 group-hover:opacity-100 transition duration-300 whitespace-nowrap border-l-4 border-gold-500 pointer-events-none tracking-widest uppercase shadow-2xl shadow-2xl">Butuh Bantuan?</span>
    </a>

    <button id="scrollTopBtn" onclick="window.scrollTo({top: 0, behavior: 'smooth'});" class="fixed bottom-24 right-6 z-[50] p-3 rounded-full bg-white/10 backdrop-blur-md border border-white/20 shadow-lg hidden-btn hover:bg-gold-500 hover:text-black hover:scale-110 group" aria-label="Scroll to top">
        <svg class="w-6 h-6 text-white group-hover:text-black transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    </button>

    <div id="registrationModal" class="hidden fixed inset-0 z-[100] flex items-center justify-center bg-black/80 backdrop-blur-sm p-4">
        <div class="modal-content bg-dark-surface border border-white/10 w-full max-w-md rounded-3xl p-8 relative shadow-2xl shadow-gold-500/10" style="background-color: #1a1a1a;">
            <button onclick="closeModal()" class="absolute top-4 right-4 text-gray-400 hover:text-white transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>

            <div class="text-center mb-6">
                <div class="w-12 h-12 bg-gold-500/10 rounded-xl flex items-center justify-center text-2xl mx-auto mb-4 text-gold-500 border border-gold-500/20">📝</div>
                <h3 class="font-display text-2xl font-bold text-white">Isi Data Diri</h3>
                <p class="text-gray-400 text-sm mt-2">Lengkapi data untuk lanjut ke WhatsApp.</p>
            </div>

            <form action="{{ route('leads.store') }}" method="POST" class="space-y-4">
                @csrf
                <input type="hidden" id="selectedPackage" name="package_name">

                <div>
                    <label class="block text-sm font-medium text-gray-400 mb-1">Nama Lengkap</label>
                    <input type="text" name="name" required class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-gold-500 transition" placeholder="Contoh: Budi Santoso">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-400 mb-1">Nomor WhatsApp</label>
                    <input type="tel" name="phone_number" pattern="[0-9]*" inputmode="numeric" required class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-gold-500 transition" placeholder="Contoh: 08123456789">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-400 mb-1">Alamat Pemasangan</label>
                    <textarea name="address" required rows="3" class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-gold-500 transition" placeholder="Nama Jalan, RT/RW, Kelurahan..."></textarea>
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full bg-gold-500 hover:bg-gold-400 text-black font-bold py-3.5 rounded-xl transition shadow-[0_0_20px_rgba(234,179,8,0.3)] flex items-center justify-center gap-2">
                        <span>Lanjut ke WhatsApp</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // --- FUNGSI SCROLL TOP ---
        const scrollTopBtn = document.getElementById('scrollTopBtn');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 500) {
                scrollTopBtn.classList.remove('hidden-btn');
                scrollTopBtn.classList.add('show-btn');
            } else {
                scrollTopBtn.classList.remove('show-btn');
                scrollTopBtn.classList.add('hidden-btn');
            }
        });

        // --- FUNGSI MODAL ---
        function openModal(packageName) {
            document.getElementById('selectedPackage').value = packageName;
            document.getElementById('registrationModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('registrationModal').classList.add('hidden');
        }

        // Close modal when clicking outside
        document.getElementById('registrationModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });

        // --- SCRIPT LAMA (ANIMASI) ---
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");
            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                if (elementTop < windowHeight - 100) reveals[i].classList.add("active");
            }
        }
        window.addEventListener("scroll", reveal);
        const counters = document.querySelectorAll('.counter');
        const speed = 200;
        const startCounters = () => {
            counters.forEach(counter => {
                const updateCount = () => {
                    const target = +counter.getAttribute('data-target');
                    const count = +counter.innerText;
                    const inc = target / speed;
                    if (count < target) {
                        counter.innerText = Math.ceil(count + inc);
                        setTimeout(updateCount, 15);
                    } else {
                        counter.innerText = target + (counter.getAttribute('data-target') == "99" ? "%" : "+");
                    }
                };
                updateCount();
            });
        };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => { if (entry.isIntersecting) { startCounters(); observer.unobserve(entry.target); } });
        }, { threshold: 0.5 });
        document.querySelectorAll('.counter').forEach(c => observer.observe(c));
        reveal();
    </script>
</body>
</html>