<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MessageTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_send_message(): void
    {
        $this->post('/message/send', [
            'name' => 'Hello Test',
            'email' => 'test@test.com',
            'message' => 'Hello World!',
            'sent_at' => now(),
        ])->assertRedirect('/');
    }
}
