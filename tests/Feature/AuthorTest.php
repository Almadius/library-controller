<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthorTest extends TestCase
{
    use RefreshDatabase;

    public function test_author_creation()
    {
        $response = $this->post('/authors', [
            'name' => 'Test Author',
        ]);

        $response->assertStatus(302);
        $this->assertDatabaseHas('authors', ['name' => 'Test Author']);
    }
}

