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
    public function test_message_retrieves_recipient(): void
    {
        $recipient = Recipient::factory()
            ->has(Message::factory()
                ->count(3)
            )->create();

        $messages = Recipient::find($recipient->id)->messages;
        $this->assertCount(3, $messages);
    }
}
