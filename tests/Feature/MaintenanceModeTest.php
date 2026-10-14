<?php

namespace Tests\Feature;

use Tests\TestCase;

class MaintenanceModeTest extends TestCase
{
    public function test_all_routes_return_raw_maintenance_page_with_503(): void
    {
        $responseHome = $this->get('/');
        $responseHome->assertStatus(503);
        $responseHome->assertSee('503 Service Unavailable');
        $responseHome->assertSee('nginx');
        $responseHome->assertDontSee('HyperLink');
        $responseHome->assertDontSee('0851-5641-2702');
        $responseHome->assertDontSee('Sekawan Putra Pratama');

        $responseAdmin = $this->get('/admin');
        $responseAdmin->assertStatus(503);
        $responseAdmin->assertSee('503 Service Unavailable');

        $responseRandom = $this->get('/halaman-acak-tidak-ada');
        $responseRandom->assertStatus(503);
        $responseRandom->assertSee('503 Service Unavailable');
    }

    public function test_json_requests_receive_503_json(): void
    {
        $response = $this->getJson('/api/anything');
        $response->assertStatus(503);
        $response->assertJson([
            'message' => 'Service Unavailable',
        ]);
        $response->assertDontSee('HyperLink');
        $response->assertDontSee('0851-5641-2702');
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
