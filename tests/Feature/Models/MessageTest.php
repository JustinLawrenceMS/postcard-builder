<?php

namespace Tests\Feature\Models;

use App\Models\Message;
use App\Models\Recipient;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MessageTest extends TestCase
{
    /**
     * Test that recipient accessor works 
     */
    public function test_it_can_access_recipient(): void
    {
        $recipient = Recipient::factory()->create();
        $message = Message::factory()->create([
            'recipient_id' => $recipient->id
        ]);
        $this->assertEquals($recipient->id, $message->recipient->id);
    }
}
