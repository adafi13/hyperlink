<?php

namespace Tests\Feature;

use Tests\TestCase;

class MaintenanceModeTest extends TestCase
{
    public function test_all_routes_return_maintenance_page_with_503(): void
    {
        $responseHome = $this->get('/');
        $responseHome->assertStatus(503);
        $responseHome->assertSee('Website Sedang Dalam Pemeliharaan');
        $responseHome->assertSee('Dinonaktifkan Sementara');
        $responseHome->assertSee('0851-5641-2702');

        $responseAdmin = $this->get('/admin');
        $responseAdmin->assertStatus(503);
        $responseAdmin->assertSee('Dinonaktifkan Sementara');

        $responseRandom = $this->get('/halaman-acak-tidak-ada');
        $responseRandom->assertStatus(503);
        $responseRandom->assertSee('Dinonaktifkan Sementara');
    }

    public function test_json_requests_receive_503_json(): void
    {
        $response = $this->getJson('/api/anything');
        $response->assertStatus(503);
        $response->assertJson([
            'status' => 503,
            'error' => 'Service Unavailable',
        ]);
    }

    public function test_health_check_remains_accessible(): void
    {
        $response = $this->get('/up');
        $response->assertStatus(200);
    }

    public function test_bypass_token_allows_access(): void
    {
        $response = $this->get('/up?bypass=hyperlink-dev');
        $response->assertStatus(200);
        $response->assertPlainCookie('maintenance_bypass', 'hyperlink-dev');
    }

    public function test_when_maintenance_mode_is_disabled(): void
    {
        putenv('MAINTENANCE_MODE=false');
        $_ENV['MAINTENANCE_MODE'] = 'false';
        $_SERVER['MAINTENANCE_MODE'] = 'false';

        $response = $this->get('/up');
        $response->assertStatus(200);

        putenv('MAINTENANCE_MODE=true');
        $_ENV['MAINTENANCE_MODE'] = 'true';
        $_SERVER['MAINTENANCE_MODE'] = 'true';
    }
}
