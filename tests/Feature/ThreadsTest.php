<?php

namespace Tests\Feature;

use App\Thread;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

/**
 * Class ThreadsTest
 * @package Tests\Feature
 */
class ThreadsTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_user_can_view_all_threads()
    {
        /** @var Thread $thread */
        $thread = factory(Thread::class)->create();

        $response = $this->get('/threads');
        $response->assertStatus(200)->assertSee($thread->title);
    }

    /** @test */
    public function a_user_can_view_a_single_thread()
    {
        /** @var Thread $thread */
        $thread = factory(Thread::class)->create();

        $response = $this->get('/threads/'.$thread->id);
        $response->assertSee($thread->title)->assertStatus(200);
    }
}
