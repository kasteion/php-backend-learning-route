<?php

namespace Tests\Feature\Http\Controllers\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Post;
use App\Models\User;

class PostControllerTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_store()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user, 'api')->json('POST', 'api/posts', [
            'title'=>'El post de prueba'
        ]);
        $response->assertJsonStructure(['id', 'title', 'created_at', 'updated_at'])
            ->assertJson(['title'=>'El post de prueba'])
            ->assertStatus(201);
        $this->assertDatabaseHas('posts', ['title'=>'El post de prueba']);
    }

    public function test_validate_title()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user, 'api')->json('POST', 'api/posts', [
            'title' => '' 
        ]);
        // Status HTTP 422
        $response->assertStatus(422)
            ->assertJsonValidationErrors('title');
    }

    public function test_show()
    {
        $user = User::factory()->create();

        $post = Post::factory()->create();

        $response = $this->actingAs($user, 'api')->json('GET', "api/posts/$post->id");
        
        $response->assertJsonStructure(['id', 'title', 'created_at', 'updated_at'])
            ->assertJson(['title'=> $post->title])
            ->assertStatus(200);
    }

    public function test_404_show()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user, 'api')->json('GET', 'api/posts/9999');
        $response->assertStatus(404);
    }

    public function test_update()
    {
        $user = User::factory()->create();
        $post = Post::factory()->create();

        $response = $this->actingAs($user, 'api')->json('PUT', "api/posts/$post->id", [
            'title'=>'Nuevo'
        ]);

        $response->assertJsonStructure(['id', 'title', 'created_at', 'updated_at'])
            ->assertJson(['title'=>'Nuevo'])
            ->assertStatus(200);
        
        $this->assertDatabaseHas('posts', ['title'=>'Nuevo']);
    }

    public function test_destroy()
    {
        $user = User::factory()->create();
        $post = Post::factory()->create();
        $this->actingAs($user, 'api')->assertDatabaseHas('posts', ['id' => $post->id ]); 
        $response = $this->json('DELETE', "api/posts/$post->id");
        // 204 - Ok - No Content
        //var_dump($response);
        $response->assertSee(null)
            ->assertStatus(204);
        $this->assertDatabaseMissing('posts', [ 'id' => $post->id]);
    }

    public function test_index()
    {
        $user = User::factory()->create();
        $post = Post::factory(5)->create();
        $response = $this->actingAs($user, 'api')->json('GET', 'api/posts');

        $response->assertJsonStructure([
            'data' => [
                '*' => ['id', 'title', 'created_at', 'updated_at']
            ]
        ])->assertStatus(200);
    }

    public function test_guest()
    {
        $this->json('GET', 'api/posts')->assertStatus(401);
        $this->json('POST', 'api/posts')->assertStatus(401);
        $this->json('GET', 'api/posts/1')->assertStatus(401);
        $this->json('PUT', 'api/posts/1')->assertStatus(401);
        $this->json('DELETE', 'api/posts/1')->assertStatus(401);
    }
}
