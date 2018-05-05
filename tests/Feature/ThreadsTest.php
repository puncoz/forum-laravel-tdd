<?php

namespace Tests\Feature;

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
    public function a_user_can_browse_test()
    {
        $response = $this->get('/threads');

        $response->assertStatus(200);
    }
}
