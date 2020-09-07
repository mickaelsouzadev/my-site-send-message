<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class SendMessageTest extends TestCase
{
    use WithoutMiddleware;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCanSend()
    {
        $response = $this->post('/send', [
            'name' => "Akim Zas",
            'email' => 'mickaelbraz17@gmail.com',
            'mensagem' => "Fala ae meu brother"
        ]);

        $response->assertStatus(200);

    }
}
