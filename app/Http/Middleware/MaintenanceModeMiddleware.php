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
        // Cek apakah mode maintenance aktif (default: true)
        $isMaintenance = filter_var(env('MAINTENANCE_MODE', true), FILTER_VALIDATE_BOOLEAN);

        if (! $isMaintenance) {
            return $next($request);
        }

        // Jika request berupa API atau JSON request
        if ($request->expectsJson() || $request->is('api/*')) {
            return response()->json([
                'message' => 'Service Unavailable',
            ], 503, [
                'Retry-After' => '3600',
            ]);
        }

        // Render halaman mentah 503 nginx (tanpa identitas, logo, kontak, bypass, ataupun style)
        return response()->view('maintenance', [], 503, [
            'Retry-After'   => '3600',
            'Cache-Control' => 'no-store, no-cache, must-revalidate, max-age=0',
        ]);
    }
}
