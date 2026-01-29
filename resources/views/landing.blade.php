<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HyperLink - Internet Pilihan Anak Muda</title>

    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/favicon.png') }}">

    <meta property="og:title" content="HyperLink - Internet Pilihan Anak Muda">
    <meta property="og:description" content="Nikmati koneksi 100% Fiber Optic dengan kuota tanpa batas. Bebas FUP, Bebas Lag.">
    <meta property="og:image" content="{{ asset('images/brosur-promo.png') }}">
    <meta property="og:type" content="website">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        display: ['"Montserrat"', 'sans-serif'],
                    },
                    colors: {
                        gold: {
                            400: '#FACC15',
                            500: '#EAB308',
                            600: '#CA8A04',
                            glow: 'rgba(234, 179, 8, 0.5)'
                        },
                        dark: {
                            bg: '#050505',     
                            surface: '#0A0A0A', 
                            border: '#1F1F1F',  
                        }
                    },
                    animation: {
                        'blob': 'blob 10s infinite',
                        'shimmer': 'shimmer 2s linear infinite',
                    },
                    keyframes: {
                        blob: {
                            '0%': { transform: 'translate(0px, 0px) scale(1)' },
                            '33%': { transform: 'translate(30px, -50px) scale(1.1)' },
                            '66%': { transform: 'translate(-20px, 20px) scale(0.9)' },
                            '100%': { transform: 'translate(0px, 0px) scale(1)' },
                        },
                        shimmer: {
                            from: { backgroundPosition: '0 0' },
                            to: { backgroundPosition: '-200% 0' },
                        },
                    }
                }
            }
        }
    </script>
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
    </style>
</head>
<body class="bg-dark-bg text-white selection:bg-gold-500 selection:text-black overflow-x-hidden">

    <div class="fixed inset-0 z-[-1] bg-grid"></div>
    <div class="fixed top-0 left-1/2 -translate-x-1/2 w-[800px] h-[500px] bg-gold-500/10 blur-[120px] rounded-full z-[-2] pointer-events-none"></div>

    <nav class="fixed top-6 left-0 right-0 z-50 flex justify-center px-4">
        <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-full pl-6 pr-2 py-2 flex items-center gap-8 shadow-2xl shadow-black/50">
            <a href="#" class="flex items-center gap-2 group">
                <div class="w-8 h-8 bg-gradient-to-br from-gold-400 to-gold-600 rounded-lg flex items-center justify-center text-black shadow-[0_0_15px_rgba(234,179,8,0.5)] group-hover:rotate-12 transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <span class="font-display font-bold text-lg tracking-tight text-white">HYPER<span class="text-gold-500">LINK</span></span>
            </a>

            <div class="hidden md:flex items-center gap-6 text-sm font-medium text-gray-300">
                <a href="#features" class="hover:text-white hover:shadow-[0_0_10px_rgba(255,255,255,0.5)] transition duration-300">Keunggulan</a>
                <a href="#plans" class="hover:text-white transition duration-300">Paket</a>
                <a href="#coverage" class="hover:text-white transition duration-300">Coverage</a>
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
                HARGA YANG PAS <br>
                <span class="text-gold-gradient drop-shadow-[0_0_20px_rgba(234,179,8,0.3)]">UNTUK KECEPATAN</span> <br>
                TANPA BATAS.
            </h1>

            <p class="text-lg md:text-xl text-gray-400 max-w-2xl mx-auto mb-10 leading-relaxed">
                Nikmati koneksi <strong>100% Fiber Optic</strong> dengan kuota tanpa batas. Bebas FUP, Bebas Lag, Free Instalasi.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-16">
                <a href="#plans" class="relative overflow-hidden group w-full sm:w-auto px-8 py-4 bg-gold-500 text-black rounded-2xl font-bold shadow-[0_0_30px_-5px_rgba(234,179,8,0.5)] hover:shadow-[0_0_50px_-10px_rgba(234,179,8,0.7)] hover:-translate-y-1 transition-all">
                    <span class="relative z-10">Lihat Paket →</span>
                    <div class="absolute inset-0 -translate-x-full group-hover:animate-[shimmer_1.5s_infinite] bg-gradient-to-r from-transparent via-white/40 to-transparent z-0"></div>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-12 bg-white/5 backdrop-blur-md border border-white/10 rounded-3xl p-6 md:p-8 shadow-2xl max-w-4xl mx-auto">
                <div>
                    <div class="text-4xl mb-2">⚡</div>
                    <p class="text-lg font-display font-bold text-white">100% Fiber Optic</p>
                    <p class="text-xs text-gray-400 mt-1">Koneksi lebih stabil</p>
                </div>
                <div class="border-t md:border-t-0 md:border-l border-white/10 pt-4 md:pt-0">
                    <div class="text-4xl mb-2">♾️</div>
                    <p class="text-lg font-display font-bold text-gold-400">Kuota Tanpa Batas</p>
                    <p class="text-xs text-gray-400 mt-1">Bebas FUP sepuasnya</p>
                </div>
                <div class="border-t md:border-t-0 md:border-l border-white/10 pt-4 md:pt-0">
                    <div class="text-4xl mb-2">🛠️</div>
                    <p class="text-lg font-display font-bold text-white">Free Instalasi</p>
                    <p class="text-xs text-gray-400 mt-1">Tanpa biaya pasang</p>
                </div>
            </div>
        </div>
    </header>

    <section class="py-12 px-6">
        <div class="container mx-auto max-w-4xl reveal">
            <div class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-yellow-600 to-yellow-400 text-black p-8 md:p-12 text-center shadow-[0_0_60px_rgba(234,179,8,0.3)] border border-yellow-300/50">
                <div class="absolute -top-24 -left-24 w-64 h-64 bg-white/30 rounded-full blur-3xl"></div>
                <div class="relative z-10">
                    <h2 class="font-display text-3xl md:text-5xl font-bold mb-4">SPECIAL PROMO!</h2>
                    <div class="inline-block bg-black/10 backdrop-blur-sm border border-black/10 rounded-xl px-6 py-3">
                        <span class="text-xl md:text-3xl font-bold">Bayar 3 Bulan <span class="bg-black text-yellow-400 px-2 rounded mx-1">FREE 1 Bulan</span></span>
                    </div>
                    <p class="mt-4 text-sm font-semibold opacity-75">*Syarat & Ketentuan berlaku</p>
                </div>
            </div>
        </div>
    </section>

    <div class="py-10 border-y border-white/5 bg-black/30 overflow-hidden">
        <div class="container mx-auto px-6 text-center mb-6">
            <p class="text-xs font-bold text-gray-600 uppercase tracking-[0.3em]">Trusted by Sekawan Putra Pratama</p>
        </div>
        <div class="flex flex-wrap justify-center w-full text-gray-500 font-display font-bold text-2xl gap-20 opacity-40">
            <span>NETFLIX</span> <span>GOOGLE</span> <span>VALORANT</span> <span>SPOTIFY</span> <span>TWITCH</span> 
            <span>DISCORD</span> <span>APPLE</span>
        </div>
    </div>

    <section id="features" class="py-24 px-6 relative">
        <div class="container mx-auto max-w-6xl">
            <div class="text-center mb-16 reveal">
                <span class="text-gold-500 font-bold uppercase tracking-wider text-sm">Keunggulan Kami</span>
                <h2 class="font-display text-4xl font-bold text-white mt-2">Mengapa HyperLink?</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 auto-rows-[250px]">
                <div class="reveal md:col-span-2 card-modern rounded-[2rem] p-8 relative overflow-hidden group flex flex-col justify-between">
                    <div class="absolute inset-0 bg-gradient-to-r from-transparent to-gold-500/5 opacity-0 group-hover:opacity-100 transition duration-500"></div>
                    <div class="relative z-10 flex justify-between items-start">
                        <div>
                            <div class="w-12 h-12 bg-gold-500/10 text-gold-400 rounded-xl flex items-center justify-center text-2xl mb-4 border border-gold-500/20">⚡</div>
                            <h3 class="font-display text-2xl font-bold mb-2 text-white">Symmetric Speed</h3>
                            <p class="text-gray-400">Kecepatan Upload dan Download sama cepatnya (1:1).</p>
                        </div>
                    </div>
                    <div class="flex items-end gap-2 h-16 mt-4 opacity-50">
                        <div class="w-full bg-gold-500 h-[40%] rounded-t-sm animate-pulse"></div>
                        <div class="w-full bg-gold-500 h-[70%] rounded-t-sm animate-pulse animation-delay-75"></div>
                        <div class="w-full bg-gold-500 h-[100%] rounded-t-sm animate-pulse animation-delay-150 shadow-[0_0_20px_rgba(234,179,8,0.5)]"></div>
                        <div class="w-full bg-gold-500 h-[60%] rounded-t-sm animate-pulse animation-delay-200"></div>
                    </div>
                </div>

                <div class="reveal card-modern rounded-[2rem] p-8 group relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-white/5 to-transparent"></div>
                    <div class="relative z-10 flex flex-col justify-between h-full">
                        <div class="w-12 h-12 bg-white/10 rounded-xl flex items-center justify-center text-2xl mb-4 text-white">🎮</div>
                        <div>
                            <h3 class="font-display text-xl font-bold mb-2 text-white">Gaming Optimized</h3>
                            <p class="text-gray-400 text-sm">Ping rendah stabil untuk game online.</p>
                        </div>
                    </div>
                </div>

                <div class="reveal card-modern rounded-[2rem] p-8 group hover:bg-gold-500/5 transition">
                    <div class="w-12 h-12 bg-white/5 text-gray-300 rounded-xl flex items-center justify-center text-2xl mb-4">⏱️</div>
                    <h3 class="font-display text-xl font-bold mb-2 text-white">Fast Response</h3>
                    <p class="text-gray-400 text-sm">Support cepat tanggap via WhatsApp.</p>
                </div>

                <div class="reveal md:col-span-2 bg-gradient-to-r from-gold-500 to-gold-600 text-black rounded-[2rem] p-8 shadow-[0_0_30px_rgba(234,179,8,0.3)] relative overflow-hidden flex items-center justify-between group">
                    <div>
                        <div class="w-12 h-12 bg-black/10 rounded-xl flex items-center justify-center text-2xl mb-4">🎧</div>
                        <h3 class="font-display text-2xl font-bold mb-2">Support 24/7</h3>
                        <p class="text-black/70 font-medium">Tim ahli siap membantu Anda kapan saja.</p>
                    </div>
                    <div class="text-8xl opacity-10 rotate-12 absolute -right-6 -bottom-6 group-hover:scale-110 transition duration-500">📞</div>
                </div>
            </div>
        </div>
    </section>

    <section id="plans" class="py-24 px-6 relative bg-white/5 border-y border-white/5">
        <div class="container mx-auto max-w-6xl relative z-10">
            <div class="text-center mb-16 reveal">
                <span class="text-gold-500 font-bold uppercase tracking-wider text-sm">Pilihan Paket</span>
                <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-2 mb-4">Pilih Kecepatan Anda</h2>
                <p class="text-gray-400">Paket fleksibel untuk setiap kebutuhan internet Anda.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 items-start">
                
                @foreach($packages as $package)
                    <div class="reveal card-modern rounded-[2rem] p-6 group flex flex-col h-full relative hover:border-gold-500/50 transition-all duration-300 {{ $package->is_featured ? 'bg-gold-500/5 border-gold-500/30' : '' }}">
                        
                        @if($package->is_featured)
                            <div class="absolute -top-3 left-1/2 -translate-x-1/2 bg-gold-500 text-black text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider shadow-lg shadow-gold-500/20">
                                Paling Laris
                            </div>
                        @endif

                        <div class="w-10 h-10 bg-white/5 rounded-xl flex items-center justify-center text-lg mb-4 text-gray-300 border border-white/10 group-hover:bg-gold-500 group-hover:text-black transition-colors">🚀</div>
                        
                        <h3 class="font-display text-lg font-bold text-white">{{ $package->name }}</h3>
                        <p class="text-gold-500 font-bold text-2xl mb-4">{{ $package->speed }}</p>
                        
                        <div class="mb-4 pb-4 border-b border-white/10">
                            <span class="text-xs text-gray-500">Mulai dari</span>
                            <div class="text-2xl font-bold text-white">Rp {{ number_format($package->price / 1000, 0) }}.000<span class="text-xs text-gray-500 font-normal">/bln</span></div>
                        </div>

                        <ul class="space-y-2 text-sm text-gray-400 mb-6 flex-grow">
                            @php
                                $features = $package->features;
                                
                                if (is_string($features)) {
                                    $decoded = json_decode($features, true);
                                    if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
                                        $features = $decoded;
                                    } else {
                                        $features = explode(',', $features);
                                    }
                                }
                            @endphp

                            @if(!empty($features) && (is_array($features) || is_object($features)))
                                @foreach($features as $feature)
                                    @if(!empty(trim($feature)))
                                        <li class="flex gap-2 items-start">
                                            <span class="text-gold-500 mt-0.5 font-bold">✓</span> 
                                            <span class="text-xs leading-relaxed">{{ trim($feature) }}</span>
                                        </li>
                                    @endif
                                @endforeach
                            @else
                                <li class="text-xs italic text-gray-600">Fitur belum diinput</li>
                            @endif
                        </ul>

                        <a href="https://wa.me/6285156412702?text=Halo%20saya%20tertarik%20dengan%20paket%20{{ urlencode($package->name) }}" target="_blank" 
                           class="block w-full text-center py-3 rounded-xl font-bold transition-all
                           {{ $package->is_featured ? 'bg-gold-500 text-black hover:bg-gold-400 shadow-[0_0_15px_rgba(234,179,8,0.3)]' : 'border border-white/20 text-white hover:bg-white hover:text-black' }}">
                           Pilih Paket
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <section id="coverage" class="py-24 px-6 relative">
        <div class="container mx-auto max-w-5xl text-center reveal">
            <h2 class="font-display text-3xl font-bold text-white mb-8">Tersedia di Kota-Kota Besar</h2>
            
            <div class="flex flex-wrap justify-center gap-3 mb-12">
                <span class="px-6 py-3 rounded-xl bg-white/5 border border-white/10 font-semibold text-gray-300 hover:border-gold-500/50 transition cursor-default">📍 Jakarta</span>
                <span class="px-6 py-3 rounded-xl bg-white/5 border border-white/10 font-semibold text-gray-300 hover:border-gold-500/50 transition cursor-default">📍 Surabaya</span>
                <span class="px-6 py-3 rounded-xl bg-white/5 border border-white/10 font-semibold text-gray-300 hover:border-gold-500/50 transition cursor-default">📍 Bandung</span>
                <span class="px-6 py-3 rounded-xl bg-white/5 border border-white/10 font-semibold text-gray-300 hover:border-gold-500/50 transition cursor-default">📍 Medan</span>
                <span class="px-6 py-3 rounded-xl bg-gold-500/10 border border-gold-500/30 font-semibold text-gold-400 animate-pulse">🚀 Bali (Coming Soon)</span>
            </div>

            <div class="bg-dark-surface border border-white/10 rounded-[3rem] p-12 md:p-20 relative overflow-hidden shadow-2xl">
                <div class="absolute top-0 right-0 w-64 h-64 bg-gold-500 rounded-full blur-[100px] opacity-10"></div>
                <div class="absolute bottom-0 left-0 w-64 h-64 bg-purple-500 rounded-full blur-[100px] opacity-10"></div>
                
                <div class="relative z-10">
                    <span class="bg-white/10 text-white px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-6 inline-block backdrop-blur-md">Promo Terbatas</span>
                    <h2 class="font-display text-4xl md:text-5xl font-bold text-white mb-6">Siap untuk Upgrade?</h2>
                    <p class="text-gray-400 max-w-lg mx-auto mb-10 text-lg">Dapatkan promo <strong>Bayar 3 Bulan Free 1 Bulan</strong> sekarang juga. Tanpa kontrak rumit.</p>
                    
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="https://wa.me/6285156412702" target="_blank" class="px-10 py-4 bg-gold-500 text-black rounded-2xl font-bold shadow-[0_0_20px_rgba(234,179,8,0.4)] hover:shadow-[0_0_40px_rgba(234,179,8,0.6)] hover:-translate-y-1 transition text-center">Mulai Gratis</a>
                        <a href="https://wa.me/6285156412702" target="_blank" class="px-10 py-4 bg-transparent border border-white/20 text-white rounded-2xl font-bold hover:bg-white/5 transition text-center">Hubungi Sales</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-black text-gray-400 py-16 border-t border-white/10">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-12 mb-12">
                <div>
                    <a href="#" class="flex items-center gap-2 mb-6">
                        <div class="w-8 h-8 bg-gold-500 rounded-lg flex items-center justify-center text-black font-bold">⚡</div>
                        <span class="font-display font-bold text-lg text-white">HYPER<span class="text-gold-500">LINK</span></span>
                    </a>
                    <p class="text-sm text-gray-500">Connecting Your Happiness dengan infrastruktur internet masa depan.</p>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-4">Layanan</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-gold-500 transition">Residential</a></li>
                        <li><a href="#" class="hover:text-gold-500 transition">Business</a></li>
                        <li><a href="#" class="hover:text-gold-500 transition">Enterprise</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-4">Perusahaan</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-gold-500 transition">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-gold-500 transition">Karir</a></li>
                        <li><a href="#" class="hover:text-gold-500 transition">Partner</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-4">Kontak</h4>
                    <ul class="space-y-2 text-sm">
                        <li>help@hyperlink.id</li>
                        <li>0851-5641-2702</li>
                        <li>Jakarta, Indonesia</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-white/10 pt-8 text-center text-sm text-gray-600">
                <p>&copy; 2026 HyperLink. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");
            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 100;
                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                }
            }
        }
        window.addEventListener("scroll", reveal);
        reveal();
    </script>
</body>
</html>