<?php

namespace Tests\Feature\Http\Controllers\API\V1;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormControllerTest extends TestCase
{
    /**
     * Tests FormController via endpoint.
     */
    public function test_endpoint_can_save_form(): void
    {
        $response = $this->post('/api/v1/save', [
            'name' => 'John Doe',
            'street_1' => '123 Main St',
            'street_2' => 'Apt 4B',
            'city' => 'Anytown',
            'state' => 'CA',
            'zip_code' => '12345',
            'message' => 'Hello, world!'
        ]);

        $response->assertStatus(200);
        $this->assertDatabaseHas('recipients', [
            'name' => 'John Doe',
            'street_1' => '123 Main St',
            'street_2' => 'Apt 4B',
            'city' => 'Anytown',
            'state' => 'CA',
            'zip_code' => '12345'
        ]);  
        
        $this->assertDatabaseHas('messages', [
            'message' => 'Hello, world!'
        ]);
    }
}
