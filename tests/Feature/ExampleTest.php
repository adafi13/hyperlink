<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        putenv('MAINTENANCE_MODE=false');
        $_ENV['MAINTENANCE_MODE'] = 'false';
        $_SERVER['MAINTENANCE_MODE'] = 'false';

        $response = $this->get('/');

        $response->assertStatus(200);

        putenv('MAINTENANCE_MODE=true');
        $_ENV['MAINTENANCE_MODE'] = 'true';
        $_SERVER['MAINTENANCE_MODE'] = 'true';
    }
}
