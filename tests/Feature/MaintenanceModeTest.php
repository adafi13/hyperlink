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

        $responseLogin = $this->get('/admin/login');
        $responseLogin->assertStatus(503);
        $responseLogin->assertSee('503 Service Unavailable');

        $responseRandom = $this->get('/halaman-acak-tidak-ada');
        $responseRandom->assertStatus(503);
        $responseRandom->assertSee('503 Service Unavailable');
    }

    public function test_bypass_attempt_is_strictly_blocked(): void
    {
        // Query bypass must NOT work - must strictly return 503
        $response = $this->get('/?bypass=hyperlink-dev');
        $response->assertStatus(503);
        $response->assertSee('503 Service Unavailable');
        $response->assertDontSee('HyperLink');
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

    public function test_when_maintenance_mode_is_disabled(): void
    {
        putenv('MAINTENANCE_MODE=false');
        $_ENV['MAINTENANCE_MODE'] = 'false';
        $_SERVER['MAINTENANCE_MODE'] = 'false';

        // When maintenance is off, normal routing takes place
        $response = $this->get('/up');
        $response->assertStatus(200);

        putenv('MAINTENANCE_MODE=true');
        $_ENV['MAINTENANCE_MODE'] = 'true';
        $_SERVER['MAINTENANCE_MODE'] = 'true';
    }
}
