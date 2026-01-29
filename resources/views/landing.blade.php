<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HyperLink - Internet Pilihan Anak Muda</title>
    <meta name="author" content="Sekawan Putra Pratama">

    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/favicon.png') }}">

    <meta property="og:title" content="HyperLink - Internet Pilihan Anak Muda">
    <meta property="og:description" content="Nikmati koneksi 100% Fiber Optic dengan kuota tanpa batas. Powered by Sekawan Putra Pratama.">
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
                        }
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
        a:hover, button:hover {
            text-shadow: 0 0 10px rgba(234, 179, 8, 0.4);
        }
    </style>
</head>
<body class="bg-dark-bg text-white selection:bg-gold-500 selection:text-black overflow-x-hidden font-sans">

    <div class="fixed inset-0 z-[-1] bg-grid"></div>
    <div class="fixed top-0 left-1/2 -translate-x-1/2 w-[800px] h-[500px] bg-gold-500/10 blur-[120px] rounded-full z-[-2] pointer-events-none"></div>

    <nav class="fixed top-6 left-0 right-0 z-50 flex justify-center px-4">
        <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-full pl-6 pr-2 py-2 flex items-center gap-6 shadow-2xl shadow-black/50">
            <a href="#" class="flex items-center gap-2 group">
                <img src="{{ asset('images/favicon.png') }}" alt="HyperLink Logo" class="w-10 h-10 drop-shadow-[0_0_8px_rgba(234,179,8,0.5)] group-hover:scale-110 transition duration-300">
                <span class="font-display font-bold text-lg tracking-tight text-white uppercase tracking-tighter">Hyper<span class="text-gold-500 italic">Link</span></span>
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
                HARGA YANG PAS <br>
                <span class="text-gold-gradient drop-shadow-[0_0_20px_rgba(234,179,8,0.3)]">UNTUK KECEPATAN</span> <br>
                TANPA BATAS.
            </h1>
            <p class="text-lg md:text-xl text-gray-400 max-w-2xl mx-auto mb-10 leading-relaxed">
                Nikmati koneksi <strong>100% Fiber Optic</strong> dengan kuota tanpa batas. Bebas FUP, Bebas Lag, Free Instalasi.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-16">
                <a href="#plans" class="relative overflow-hidden group w-full sm:w-auto px-8 py-4 bg-gold-500 text-black rounded-2xl font-bold shadow-[0_0_30px_-5px_rgba(234,179,8,0.5)] hover:shadow-[0_0_50px_-10px_rgba(234,179,8,0.7)] hover:-translate-y-1 transition-all">
                    <span class="relative z-10 text-center">Lihat Paket →</span>
                    <div class="absolute inset-0 -translate-x-full group-hover:animate-[shimmer_1.5s_infinite] bg-gradient-to-r from-transparent via-white/40 to-transparent z-0"></div>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-12 bg-white/5 backdrop-blur-md border border-white/10 rounded-3xl p-6 md:p-8 shadow-2xl max-w-4xl mx-auto">
                <div><div class="text-4xl mb-2">⚡</div><p class="text-lg font-display font-bold text-white">100% Fiber Optic</p><p class="text-xs text-gray-400 mt-1">Koneksi lebih stabil</p></div>
                <div class="border-t md:border-t-0 md:border-l border-white/10 pt-4 md:pt-0">
                    <div class="text-4xl mb-2">♾️</div><p class="text-lg font-display font-bold text-gold-400">Kuota Tanpa Batas</p><p class="text-xs text-gray-400 mt-1">Bebas FUP sepuasnya</p>
                </div>
                <div class="border-t md:border-t-0 md:border-l border-white/10 pt-4 md:pt-0">
                    <div class="text-4xl mb-2">🛠️</div><p class="text-lg font-display font-bold text-white">Free Instalasi</p><p class="text-xs text-gray-400 mt-1">Tanpa biaya pasang</p>
                </div>
            </div>
        </div>
    </header>

    <section class="py-12 px-6">
        <div class="container mx-auto max-w-4xl reveal">
            <div class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-yellow-600 to-yellow-400 text-black p-8 md:p-12 text-center shadow-[0_0_60px_rgba(234,179,8,0.3)] border border-yellow-300/50">
                <div class="absolute -top-24 -left-24 w-64 h-64 bg-white/30 rounded-full blur-3xl"></div>
                <div class="relative z-10">
                    <h2 class="font-display text-3xl md:text-5xl font-bold mb-4 italic">SPECIAL PROMO!</h2>
                    <div class="inline-block bg-black/10 backdrop-blur-sm border border-black/10 rounded-xl px-6 py-3 text-center">
                        <span class="text-xl md:text-3xl font-bold">Bayar 3 Bulan <span class="bg-black text-yellow-400 px-2 rounded mx-1">FREE 1 Bulan</span></span>
                    </div>
                    <p class="mt-4 text-sm font-semibold opacity-75">*Syarat & Ketentuan berlaku</p>
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
                <span class="text-gold-500 font-bold uppercase tracking-wider text-sm">The Difference</span>
                <h2 class="font-display text-3xl font-bold text-white mt-2">HyperLink vs Traditional ISP</h2>
            </div>
            <div class="overflow-hidden rounded-3xl border border-white/10 card-modern">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-white/5">
                            <th class="p-6 text-gray-400 font-medium">Fitur Utama</th>
                            <th class="p-6 text-gold-500 font-bold">HyperLink</th>
                            <th class="p-6 text-gray-500 font-medium">Provider Lain</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm">
                        <tr class="border-t border-white/5">
                            <td class="p-6 text-white font-medium">Fair Usage Policy (FUP)</td>
                            <td class="p-6 text-green-400 font-bold">Murni Tanpa Batas</td>
                            <td class="p-6 text-gray-500">Sering Dibatasi</td>
                        </tr>
                        <tr class="border-t border-white/5">
                            <td class="p-6 text-white font-medium">Upload : Download</td>
                            <td class="p-6 text-green-400 font-bold">Simetris 1:1</td>
                            <td class="p-6 text-gray-500">Asimetris (Lambat)</td>
                        </tr>
                        <tr class="border-t border-white/5">
                            <td class="p-6 text-white font-medium">Biaya Instalasi</td>
                            <td class="p-6 text-green-400 font-bold">FREE (Rp 0)</td>
                            <td class="p-6 text-gray-500">Rp 250.000+</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section id="features" class="py-24 px-6 relative overflow-hidden">
        <div class="container mx-auto max-w-6xl">
            <div class="text-center mb-16 reveal">
                <span class="text-gold-500 font-bold uppercase tracking-wider text-sm">Keunggulan Kami</span>
                <h2 class="font-display text-4xl font-bold text-white mt-2">Standar Internet Masa Depan</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="reveal card-modern rounded-[2rem] p-8 relative overflow-hidden group">
                    <div class="absolute inset-0 bg-gradient-to-r from-transparent to-gold-500/5 opacity-0 group-hover:opacity-100 transition duration-500"></div>
                    <div class="w-12 h-12 bg-gold-500/10 text-gold-400 rounded-xl flex items-center justify-center text-2xl mb-6 border border-gold-500/20 shadow-[0_0_15px_rgba(234,179,8,0.1)]">⚡</div>
                    <h3 class="font-display text-2xl font-bold mb-3 text-white">Simetris 1:1</h3>
                    <p class="text-gray-400 text-sm leading-relaxed text-center md:text-left">Kecepatan Upload dan Download sama cepatnya. Kirim file besar secepat menerima file.</p>
                </div>

                <div class="reveal card-modern rounded-[2rem] p-8 relative overflow-hidden group border-gold-500/20">
                    <div class="w-12 h-12 bg-white/10 rounded-xl flex items-center justify-center text-2xl mb-6 text-white shadow-[0_0_15px_rgba(255,255,255,0.05)] text-center">🎮</div>
                    <h3 class="font-display text-2xl font-bold mb-3 text-white">Low Latency Gaming</h3>
                    <p class="text-gray-400 text-sm leading-relaxed text-center md:text-left">Routing khusus ke server game populer (Valorant, MLBB, Dota 2) untuk ping terendah & stabil.</p>
                </div>

                <div class="reveal card-modern rounded-[2rem] p-8 relative overflow-hidden group">
                    <div class="w-12 h-12 bg-gold-500/10 text-gold-400 rounded-xl flex items-center justify-center text-2xl mb-6 border border-gold-500/20 text-center">♾️</div>
                    <h3 class="font-display text-2xl font-bold mb-3 text-white">No FUP Guarantee</h3>
                    <p class="text-gray-400 text-sm leading-relaxed text-center md:text-left">Bebas kuota sepuasnya tanpa ada batas pemakaian wajar. Kecepatan tetap stabil 24/7.</p>
                </div>

                <div class="reveal card-modern rounded-[2rem] p-8 relative overflow-hidden group">
                    <div class="w-12 h-12 bg-white/10 rounded-xl flex items-center justify-center text-2xl mb-6 text-white text-center">🛡️</div>
                    <h3 class="font-display text-2xl font-bold mb-3 text-white">Enterprise SLA</h3>
                    <p class="text-gray-400 text-sm leading-relaxed text-center md:text-left">Jaminan ketersediaan layanan hingga 99.9%. Infrastruktur kelas bisnis untuk rumah Anda.</p>
                </div>

                <div class="reveal md:col-span-2 bg-gradient-to-br from-gold-500 to-gold-600 text-black rounded-[2rem] p-8 shadow-[0_0_30px_rgba(234,179,8,0.3)] relative overflow-hidden group flex flex-col md:flex-row items-center justify-between">
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
                <span class="text-gold-500 font-bold uppercase tracking-wider text-sm">Pilihan Paket</span>
                <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-2 mb-4">Pilih Kecepatan Anda</h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 items-start">
                @foreach($packages as $package)
                    <div class="reveal card-modern rounded-[2rem] p-6 group flex flex-col h-full relative hover:border-gold-500/50 transition-all duration-300 {{ $package->is_featured ? 'bg-gold-500/5 border-gold-500/30' : '' }}">
                        @if($package->is_featured)<div class="absolute -top-3 left-1/2 -translate-x-1/2 bg-gold-500 text-black text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-widest whitespace-nowrap">Paling Laris</div>@endif
                        <h3 class="font-display text-lg font-bold text-white uppercase">{{ $package->name }}</h3>
                        <p class="text-gold-500 font-bold text-2xl mb-4 italic">{{ $package->speed }}</p>
                        <div class="mb-4 pb-4 border-b border-white/10 text-2xl font-bold text-white">Rp {{ number_format($package->price / 1000, 0) }}.000<span class="text-xs text-gray-500 font-normal italic">/bln</span></div>
                        
                        <ul class="space-y-2 text-sm text-gray-400 mb-6 flex-grow">
                            @php
                                $features = $package->features;
                                if (is_string($features)) {
                                    $decoded = json_decode($features, true);
                                    $features = (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) ? $decoded : explode(',', $features);
                                }
                            @endphp
                            @foreach($features as $feature)
                                <li class="flex gap-2 items-start"><span class="text-gold-500 font-bold text-center">✓</span> <span class="text-center md:text-left">{{ trim($feature) }}</span></li>
                            @endforeach
                        </ul>

                        <a href="https://wa.me/6285156412702" target="_blank" class="block w-full text-center py-3 rounded-xl font-bold transition-all {{ $package->is_featured ? 'bg-gold-500 text-black' : 'border border-white/20 text-white hover:bg-white hover:text-black' }}">Pilih Paket</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="coverage" class="py-24 px-6 relative bg-black/20">
        <div class="container mx-auto max-w-5xl text-center reveal">
            <span class="text-gold-500 font-bold uppercase tracking-wider text-sm">Our Coverage</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-white mt-2 mb-12">Tersedia di Kota-Kota Besar</h2>
            <div class="flex flex-wrap justify-center gap-3 mb-16">
                <span class="px-6 py-3 rounded-xl bg-white/5 border border-white/10 font-semibold text-gray-300 hover:border-gold-500/50 transition cursor-default">📍 Jakarta</span>
                <span class="px-6 py-3 rounded-xl bg-white/5 border border-white/10 font-semibold text-gray-300 hover:border-gold-500/50 transition cursor-default">📍 Surabaya</span>
                <span class="px-6 py-3 rounded-xl bg-white/5 border border-white/10 font-semibold text-gray-300 hover:border-gold-500/50 transition cursor-default">📍 Bandung</span>
                <span class="px-6 py-3 rounded-xl bg-white/5 border border-white/10 font-semibold text-gray-300 hover:border-gold-500/50 transition cursor-default">📍 Medan</span>
                <span class="px-4 md:px-6 py-3 rounded-xl bg-gold-500/10 border border-gold-500/30 font-semibold text-gold-400 animate-pulse text-center">🚀 Bali (Coming Soon)</span>
            </div>
            <div class="bg-dark-surface border border-white/10 rounded-[3rem] p-10 md:p-16 relative overflow-hidden shadow-2xl">
                <div class="absolute top-0 right-0 w-64 h-64 bg-gold-500 rounded-full blur-[100px] opacity-10"></div>
                <div class="relative z-10 text-center">
                    <h3 class="font-display text-3xl md:text-4xl font-bold text-white mb-6">Siap untuk Upgrade?</h3>
                    <p class="text-gray-400 max-w-lg mx-auto mb-10 text-lg">Dapatkan promo <strong>Bayar 3 Bulan Free 1 Bulan</strong> sekarang juga. Tanpa kontrak rumit.</p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="https://wa.me/6285156412702" target="_blank" class="px-10 py-4 bg-gold-500 text-black rounded-2xl font-bold shadow-lg hover:-translate-y-1 transition text-center">Mulai Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 px-6 relative overflow-hidden">
        <div class="container mx-auto max-w-6xl">
            <div class="text-center mb-16 reveal">
                <span class="text-gold-500 font-bold uppercase tracking-wider text-sm">Testimonials</span>
                <h2 class="font-display text-4xl font-bold text-white mt-2">Apa Kata Pengguna HyperLink?</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="card-modern rounded-[2rem] p-8 reveal text-center md:text-left">
                    <div class="flex gap-1 text-gold-500 mb-4 justify-center md:justify-start"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
                    <p class="text-gray-300 italic mb-6 text-sm leading-relaxed">"Pindah ke HyperLink buat WFH bener-bener game changer. Upload file gede nggak pake nunggu lama!"</p>
                    <div class="flex items-center gap-4 justify-center md:justify-start">
                        <div class="w-10 h-10 rounded-full bg-gold-500/20 flex items-center justify-center font-bold text-gold-500">A</div>
                        <div class="text-center md:text-left"><p class="text-white font-bold text-sm">Aditya Prasetyo</p><p class="text-gray-500 text-xs">Graphic Designer</p></div>
                    </div>
                </div>
                <div class="card-modern rounded-[2rem] p-8 reveal text-center md:text-left">
                    <div class="flex gap-1 text-gold-500 mb-4 justify-center md:justify-start"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
                    <p class="text-gray-300 italic mb-6 text-sm leading-relaxed">"Internet paling stabil yang pernah saya pake buat main Valorant. Ping anteng di 10-15ms sebulan penuh."</p>
                    <div class="flex items-center gap-4 justify-center md:justify-start">
                        <div class="w-10 h-10 rounded-full bg-blue-500/20 flex items-center justify-center font-bold text-blue-500">R</div>
                        <div class="text-center md:text-left"><p class="text-white font-bold text-sm">Reza Fahlevi</p><p class="text-gray-500 text-xs text-center md:text-left">E-sports Player</p></div>
                    </div>
                </div>
                <div class="card-modern rounded-[2rem] p-8 reveal text-center md:text-left">
                    <div class="flex gap-1 text-gold-500 mb-4 justify-center md:justify-start"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
                    <p class="text-gray-300 italic mb-6 text-sm leading-relaxed">"Layanan supportnya jempolan. Pernah ada kendala malem-malem, dibantu sampe beres via WhatsApp."</p>
                    <div class="flex items-center gap-4 justify-center md:justify-start">
                        <div class="w-10 h-10 rounded-full bg-purple-500/20 flex items-center justify-center font-bold text-purple-500">S</div>
                        <div class="text-center md:text-left"><p class="text-white font-bold text-sm text-center md:text-left">Siti Aminah</p><p class="text-gray-500 text-xs text-center md:text-left">Entrepreneur</p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="py-24 px-6 relative border-t border-white/5 bg-black/40">
        <div class="container mx-auto max-w-3xl reveal px-4">
            <div class="text-center mb-16">
                <span class="text-gold-500 font-bold uppercase tracking-wider text-sm">FAQ</span>
                <h2 class="font-display text-4xl font-bold text-white mt-2 text-center">Sering Ditanyakan</h2>
            </div>
            <div class="space-y-4">
                <details class="group card-modern rounded-[1.5rem] p-6 cursor-pointer" open>
                    <summary class="flex justify-between items-center font-display font-bold text-lg text-white list-none">Apakah benar Unlimited tanpa FUP?<span class="text-gold-500 group-open:rotate-180 transition">▼</span></summary>
                    <p class="text-gray-400 mt-4 leading-relaxed text-sm border-t border-white/5 pt-4 text-center md:text-left">Tentu saja! HyperLink menyediakan layanan internet murni tanpa batas sepuasnya tanpa penurunan kecepatan.</p>
                </details>
                <details class="group card-modern rounded-[1.5rem] p-6 cursor-pointer">
                    <summary class="flex justify-between items-center font-display font-bold text-lg text-white list-none">Berapa lama waktu pemasangan?<span class="text-gold-500 group-open:rotate-180 transition">▼</span></summary>
                    <p class="text-gray-400 mt-4 leading-relaxed text-sm border-t border-white/5 pt-4 text-center md:text-left">Setelah pendaftaran diverifikasi, teknisi kami akan melakukan instalasi dalam 1-3 hari kerja.</p>
                </details>
                <details class="group card-modern rounded-[1.5rem] p-6 cursor-pointer">
                    <summary class="flex justify-between items-center font-display font-bold text-lg text-white list-none">Apakah ada biaya tersembunyi?<span class="text-gold-500 group-open:rotate-180 transition">▼</span></summary>
                    <p class="text-gray-400 mt-4 leading-relaxed text-sm border-t border-white/5 pt-4 text-center md:text-left">Harga yang tertera sudah transparan. Kami tidak mengenakan biaya sewa modem bulanan atau biaya admin tersembunyi lainnya.</p>
                </details>
                <details class="group card-modern rounded-[1.5rem] p-6 cursor-pointer">
                    <summary class="flex justify-between items-center font-display font-bold text-lg text-white list-none">Bagaimana jika terjadi gangguan?<span class="text-gold-500 group-open:rotate-180 transition">▼</span></summary>
                    <p class="text-gray-400 mt-4 leading-relaxed text-sm border-t border-white/5 pt-4 text-center md:text-left">Layanan support kami siaga 24/7. Anda bisa langsung menghubungi tim teknis via WhatsApp untuk penanganan cepat.</p>
                </details>
                <details class="group card-modern rounded-[1.5rem] p-6 cursor-pointer">
                    <summary class="flex justify-between items-center font-display font-bold text-lg text-white list-none uppercase tracking-widest">Bisa ubah paket kapan saja?<span class="text-gold-500 group-open:rotate-180 transition italic">▼</span></summary>
                    <p class="text-gray-400 mt-4 leading-relaxed text-sm border-t border-white/5 pt-4 text-center md:text-left italic">Bisa. Anda cukup menghubungi layanan pelanggan kami untuk menyesuaikan kecepatan internet sesuai kebutuhan terbaru tanpa denda penalti.</p>
                </details>
            </div>
        </div>
    </section>

    <footer class="bg-black text-gray-400 py-16 border-t border-white/10">
        <div class="container mx-auto px-6 text-center">
            <div class="flex flex-col items-center gap-6">
                <a href="#" class="flex items-center gap-2"><img src="{{ asset('images/favicon.png') }}" class="w-8 h-8 opacity-50 grayscale"><span class="font-display font-bold text-lg text-white opacity-50 tracking-widest uppercase text-center">HyperLink</span></a>
                <div class="flex flex-col items-center gap-2">
                    <p class="text-sm text-gray-600 tracking-wide">&copy; 2026 <span class="text-white font-bold uppercase">HyperLink</span>. Developed & Powered by</p>
                    <p class="text-gold-500 font-display font-semibold italic tracking-[0.2em] text-xs uppercase text-center">Sekawan Putra Pratama</p>
                </div>
                <div class="h-[1px] w-20 bg-gradient-to-r from-transparent via-gold-500/20 to-transparent"></div>
                <p class="text-[10px] text-gray-700 uppercase tracking-[0.5em] text-center">Jakarta • Surabaya • Bandung • Medan</p>
            </div>
        </div>
    </footer>

    <a href="https://wa.me/6285156412702" target="_blank" class="fixed bottom-6 right-6 z-[60] bg-[#25D366] p-4 rounded-full shadow-[0_0_30px_rgba(37,211,102,0.4)] hover:scale-110 active:scale-95 transition-all group">
        <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
        <span class="absolute right-20 top-1/2 -translate-y-1/2 bg-white text-black text-[10px] font-bold px-3 py-1.5 rounded-lg opacity-0 group-hover:opacity-100 transition duration-300 whitespace-nowrap border-l-4 border-gold-500 pointer-events-none tracking-widest uppercase">Butuh Bantuan?</span>
    </a>

    <script>
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