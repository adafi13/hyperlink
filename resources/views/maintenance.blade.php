<!DOCTYPE html>
<html lang="id" class="h-full bg-[#050505] text-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Sedang Dalam Pemeliharaan - {{ $site_name ?? 'HyperLink' }}</title>
    <meta name="description" content="Website {{ $site_name ?? 'HyperLink' }} sedang dalam pemeliharaan sistem berkala untuk optimalisasi dan peningkatan layanan.">
    <meta name="robots" content="noindex, nofollow">
    <meta name="theme-color" content="#EAB308">

    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/favicon.png') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        display: ['"Space Grotesk"', 'sans-serif'],
                    },
                    colors: {
                        gold: {
                            400: '#FACC15',
                            500: '#EAB308',
                            600: '#CA8A04',
                            glow: 'rgba(234, 179, 8, 0.4)'
                        },
                        dark: {
                            bg: '#050505',
                            card: '#0c0d10',
                            border: 'rgba(255, 255, 255, 0.08)',
                        }
                    },
                    animation: {
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'glow': 'glow 4s ease-in-out infinite alternate',
                    },
                    keyframes: {
                        glow: {
                            '0%': { opacity: '0.3', transform: 'scale(1)' },
                            '100%': { opacity: '0.6', transform: 'scale(1.08)' }
                        }
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #050505;
            color: #F3F4F6;
            overflow-x: hidden;
        }

        .font-display {
            font-family: 'Space Grotesk', sans-serif;
        }

        .bg-grid-pattern {
            background-size: 40px 40px;
            background-image: 
                linear-gradient(to right, rgba(255, 255, 255, 0.03) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
            mask-image: radial-gradient(ellipse at center, black 40%, transparent 80%);
            -webkit-mask-image: radial-gradient(ellipse at center, black 40%, transparent 80%);
        }

        .gold-gradient-text {
            background: linear-gradient(135deg, #FFF099 0%, #FACC15 50%, #CA8A04 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .glass-card {
            background: rgba(14, 15, 19, 0.85);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.6);
        }

        .glass-card:hover {
            border-color: rgba(234, 179, 8, 0.3);
        }

        .glow-btn {
            box-shadow: 0 0 25px rgba(234, 179, 8, 0.35);
            transition: all 0.3s ease;
        }

        .glow-btn:hover {
            box-shadow: 0 0 35px rgba(234, 179, 8, 0.6);
            transform: translateY(-2px);
        }
    </style>
</head>
<body class="min-h-screen flex flex-col justify-between relative selection:bg-gold-500 selection:text-black">

    <!-- Background Atmospheric Lighting -->
    <div class="fixed inset-0 bg-grid-pattern pointer-events-none z-0"></div>
    <div class="fixed -top-40 -left-40 w-96 h-96 bg-gold-500/10 rounded-full blur-[120px] pointer-events-none animate-glow"></div>
    <div class="fixed -bottom-40 -right-40 w-96 h-96 bg-amber-600/10 rounded-full blur-[140px] pointer-events-none animate-glow" style="animation-delay: 2s;"></div>

    <!-- Header Navigation Bar -->
    <header class="relative z-10 w-full max-w-6xl mx-auto px-6 py-6 flex items-center justify-between border-b border-white/5">
        <div class="flex items-center space-x-3">
            <div class="w-10 h-10 rounded-xl bg-gold-500/10 border border-gold-500/30 flex items-center justify-center p-1.5 shadow-lg shadow-gold-500/10">
                <img src="{{ asset('images/favicon.png') }}" alt="{{ $site_name ?? 'HyperLink' }}" class="w-full h-full object-contain">
            </div>
            <div>
                <span class="font-display font-bold text-xl tracking-wider text-white">{{ $site_name ?? 'HyperLink' }}</span>
                <span class="block text-[11px] text-gray-400 font-medium tracking-wide uppercase">{{ $site_tagline ?? 'Internet Pilihan Anak Muda' }}</span>
            </div>
        </div>

        <!-- Live Status Indicator -->
        <div class="flex items-center space-x-2 px-3 py-1.5 rounded-full bg-yellow-500/10 border border-yellow-500/20 text-yellow-400 text-xs font-medium">
            <span class="relative flex h-2 w-2">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-yellow-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-yellow-500"></span>
            </span>
            <span class="hidden sm:inline">Pemeliharaan Sistem Sedang Berlangsung</span>
            <span class="sm:hidden">Maintenance</span>
        </div>
    </header>

    <!-- Main Content Hero & Information -->
    <main class="relative z-10 flex-grow flex items-center justify-center px-4 sm:px-6 py-12 md:py-16">
        <div class="w-full max-w-4xl mx-auto text-center">

            <!-- Maintenance Alert Tag -->
            <div class="inline-flex items-center space-x-2 px-4 py-2 rounded-full bg-yellow-400/10 border border-yellow-400/20 text-yellow-300 text-xs sm:text-sm font-semibold tracking-wide uppercase mb-6 backdrop-blur-md">
                <svg class="w-4 h-4 text-yellow-400 animate-spin" style="animation-duration: 8s;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span>Status: Sistem Sedang Dalam Perbaikan & Pemeliharaan</span>
            </div>

            <!-- Big Main Heading -->
            <h1 class="font-display text-3xl sm:text-5xl md:text-6xl font-extrabold tracking-tight text-white mb-6 leading-tight">
                Website Sedang <br class="hidden sm:block">
                <span class="gold-gradient-text">Dinonaktifkan Sementara</span>
            </h1>

            <!-- Explanatory Subtitle -->
            <p class="max-w-2xl mx-auto text-base sm:text-lg text-gray-300 font-normal leading-relaxed mb-10">
                Halo Pelanggan & Rekan HyperLink! Mohon maaf atas ketidaknyamanan Anda. Saat ini seluruh akses website dan halaman portal sedang kami alihkan sementara untuk proses peningkatan infrastruktur server, optimasi keamanan, dan pembaruan sistem berkala.
            </p>

            <!-- 3 Info Pillars Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 sm:gap-6 text-left mb-10">
                
                <!-- Card 1: Jaringan Pelanggan Aktif -->
                <div class="glass-card p-6 rounded-2xl relative overflow-hidden group">
                    <div class="w-12 h-12 rounded-xl bg-gold-500/10 border border-gold-500/20 flex items-center justify-center text-gold-400 mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0" />
                        </svg>
                    </div>
                    <h2 class="font-display font-semibold text-lg text-white mb-2">Jaringan Internet Normal</h2>
                    <p class="text-sm text-gray-400 leading-relaxed">
                        Layanan internet pelanggan aktif tetap beroperasi normal seperti biasa. Pemeliharaan ini difokuskan pada pembaruan portal web dan sistem cloud.
                    </p>
                </div>

                <!-- Card 2: Pendaftaran Paket Baru -->
                <div class="glass-card p-6 rounded-2xl relative overflow-hidden group">
                    <div class="w-12 h-12 rounded-xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <h2 class="font-display font-semibold text-lg text-white mb-2">Pendaftaran & Pasang Baru</h2>
                    <p class="text-sm text-gray-400 leading-relaxed">
                        Pendaftaran paket baru & cek jangkauan area dialihkan langsung ke Customer Service via WhatsApp tanpa antrean panjang.
                    </p>
                </div>

                <!-- Card 3: Layanan Bantuan 24/7 -->
                <div class="glass-card p-6 rounded-2xl relative overflow-hidden group">
                    <div class="w-12 h-12 rounded-xl bg-blue-500/10 border border-blue-500/20 flex items-center justify-center text-blue-400 mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <h2 class="font-display font-semibold text-lg text-white mb-2">CS Siap Membantu</h2>
                    <p class="text-sm text-gray-400 leading-relaxed">
                        Jika Anda membutuhkan bantuan teknis atau informasi tagihan, tim support kami siap melayani Anda melalui saluran WhatsApp resmi.
                    </p>
                </div>

            </div>

            <!-- Action Buttons Area -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-8">
                <!-- Direct WhatsApp CS Button -->
                <a href="https://wa.me/{{ $whatsapp_number ?? '6285156412702' }}?text=Halo%20HyperLink%2C%20saya%20melihat%20website%20sedang%20dalam%20perbaikan.%20Saya%20ingin%20menanyakan%20informasi%20layanan%2Fpemasangan." 
                   target="_blank" 
                   rel="noopener noreferrer"
                   class="w-full sm:w-auto inline-flex items-center justify-center space-x-3 px-8 py-4 rounded-xl bg-gradient-to-r from-yellow-500 via-amber-500 to-yellow-600 text-black font-bold text-base glow-btn">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                    </svg>
                    <span>Hubungi CS via WhatsApp ({{ $contact_phone ?? '0851-5641-2702' }})</span>
                </a>

                <!-- Reload Button to check status -->
                <button onclick="window.location.reload()" 
                        class="w-full sm:w-auto inline-flex items-center justify-center space-x-2 px-6 py-4 rounded-xl bg-white/5 hover:bg-white/10 text-white font-semibold text-base border border-white/10 transition-all">
                    <svg class="w-5 h-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                    </svg>
                    <span>Periksa Status (Muat Ulang)</span>
                </button>
            </div>

            <!-- Emergency / Help Note -->
            <p class="text-xs text-gray-500">
                Punya pertanyaan mendesak? Kirim email ke <a href="mailto:{{ $support_email ?? 'support@hyperlink.net.id' }}" class="text-gold-400 hover:underline">{{ $support_email ?? 'support@hyperlink.net.id' }}</a> atau chat langsung via WhatsApp resmi kami.
            </p>

        </div>
    </main>

    <!-- Footer Copyright & Info -->
    <footer class="relative z-10 w-full max-w-6xl mx-auto px-6 py-8 border-t border-white/5 text-center text-xs text-gray-500 flex flex-col sm:flex-row items-center justify-between gap-4">
        <div class="flex items-center space-x-2">
            <span class="w-2 h-2 rounded-full bg-gold-500"></span>
            <span>&copy; {{ date('Y') }} {{ $site_name ?? 'HyperLink' }}. All rights reserved.</span>
        </div>
        <div class="text-gray-400">
            Powered by <span class="text-gray-200 font-medium">Sekawan Putra Pratama</span>
        </div>
    </footer>

</body>
</html>
