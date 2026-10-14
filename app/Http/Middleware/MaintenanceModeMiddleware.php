<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MaintenanceModeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // 1. Cek apakah mode maintenance aktif (default: true jika di-set atau fallback true)
        $isMaintenance = filter_var(env('MAINTENANCE_MODE', true), FILTER_VALIDATE_BOOLEAN);

        if (! $isMaintenance) {
            return $next($request);
        }

        // 2. Bypass Secret Token (untuk pengembang/admin membuka website secara privat)
        // Contoh akses: https://domain.com/?bypass=hyperlink-dev
        $bypassToken = env('MAINTENANCE_BYPASS_TOKEN', 'hyperlink-dev');
        $queryBypass = $request->query('bypass');
        $cookieBypass = $request->cookies->get('maintenance_bypass');

        if ($bypassToken && ($queryBypass === $bypassToken || $cookieBypass === $bypassToken)) {
            $response = $next($request);
            if ($queryBypass === $bypassToken && method_exists($response, 'withCookie')) {
                // Simpan cookie selama 24 jam agar admin bisa navigasi dengan lancar
                return $response->withCookie(cookie('maintenance_bypass', $bypassToken, 60 * 24, '/', null, false, false));
            }
            return $response;
        }

        // 3. Izinkan health check Laravel (/up)
        if ($request->is('up')) {
            return $next($request);
        }

        // 4. Jika request berupa API atau JSON request
        if ($request->expectsJson() || $request->is('api/*')) {
            return response()->json([
                'message' => 'Service Unavailable',
            ], 503, [
                'Retry-After' => '3600',
            ]);
        }

        // 5. Render halaman mentah 503 (tanpa identitas, logo, kontak, ataupun style)
        return response()->view('maintenance', [], 503, [
            'Retry-After'   => '3600',
            'Cache-Control' => 'no-store, no-cache, must-revalidate, max-age=0',
        ]);
    }
}
