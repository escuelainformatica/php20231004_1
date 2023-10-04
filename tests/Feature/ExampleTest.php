<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    public function test_listar() {
        $response = $this->get('/listaralbum'); // http://127.0.0.1:8000/listaralbum
        $response->assertSeeText("Symphony");
        $response->assertStatus(200);
    }
}
