<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TaskTest extends TestCase
{

    use DatabaseMigrations;
    use DatabaseTransactions;

    public function testCrudTask()
    {
        $user = factory(\App\User::class)->create();
        $this->actingAs($user);

        $this->json('POST', '/api/tasks', ['name' => 'Learn Vue.js'])
             ->assertStatus(200)
             ->assertJson([
                'id'   => 1,
                'name' => 'Learn Vue.js',
                'is_done' => false,
            ]);

        $this->assertDatabaseHas('tasks', [
                'id'   => 1,
                'name' => 'Learn Vue.js',
                'is_done' => false,
            ]);

        $this->json('GET', '/api/tasks')
             ->assertStatus(200)
             ->assertJson([
                1 => [
                    'id'   => 1,
                    'name' => 'Learn Vue.js',
                    'is_done' => false,
                ]
            ]);

        $this->json('PUT', '/api/tasks/1', ['is_done' => true])
             ->assertStatus(200)
             ->assertJson([
                'id'   => 1,
                'name' => 'Learn Vue.js',
                'is_done' => true,
            ]);

        $this->assertDatabaseHas('tasks', [
                'id'   => 1,
                'name' => 'Learn Vue.js',
                'is_done' => true,
            ]);

        $this->json('DELETE', '/api/tasks/1')
             ->assertStatus(200);

        $this->assertDatabaseMissing('tasks', [
                'id'   => 1,
            ]);
    }
}
