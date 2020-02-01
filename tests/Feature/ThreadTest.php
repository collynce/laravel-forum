<?php

namespace Tests\Feature;

use App\Thread;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ThreadTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic feature test example.
     *
     * @return \Illuminate\Foundation\Testing\TestResponse
     */
    public function testExample()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function a_user_can_browse_threads()
    {
        $thread = factory(Thread::class)->create();

        $response = $this->get('/threads');
        $response->assertSee($thread->title);

    }

    public function a_user_can_read_a_single_thread()
    {
        $thread = factory(Thread::class)->create();

        $response = $this->get('/threads/' . $thread->id);
        $response->assertSee($thread->title);

    }
}
