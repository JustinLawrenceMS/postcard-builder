<?php

namespace Tests\Feature\Models;

use App\Models\Message;
use App\Models\Recipient;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RecipientTest extends TestCase
{
    /**
     * tests messages accessor works 
     */
    public function test_it_can_access_messages(): void
    {
        $recipient = Recipient::factory()
            ->has(Message::factory()
                ->count(3)
            )->create();

        $messages = Recipient::find($recipient->id)->messages;
        $this->assertCount(3, $messages);
    }
}
