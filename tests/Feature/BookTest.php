<?php

namespace Tests\Feature;

use App\Models\Author;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BookTest extends TestCase
{
    use RefreshDatabase;

    public function test_book_creation()
    {
        $author = Author::factory()->create();

        $response = $this->post('/books', [
            'title' => 'Test Book',
            'author_id' => $author->id,
            'description' => 'Test Description',
        ]);

        $response->assertStatus(302);
        $this->assertDatabaseHas('books', ['title' => 'Test Book']);
    }
}

