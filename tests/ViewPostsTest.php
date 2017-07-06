<?php

use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ViewPostsTest extends TestCase
{
    use DatabaseMigrations;
    /** @test */
    public function users_can_see_all_posts()
    {
        $post = factory(App\Post::class)->create();

        $this->actingAs(factory(User::class)->create())
            ->get('/posts')
            ->assertStatus(200)
            ->assertSee($post->title);
    }
}
