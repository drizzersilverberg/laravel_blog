<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    # migrate the database before testing
    use DatabaseMigrations;

    # use database transaction
    use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $first = factory('App\Post')->create();

        $second = factory('App\Post')->create([
            'created_at' => \Carbon\Carbon::now()->subMonth()
        ]);

        $posts = \App\Post::archives();

        $this->assertCount(2, $posts);

        $this->assertEquals([
            [
                'year' => $first->created_at->format('Y'),
                'month' => $first->created_at->format('F'),
                'published' => 1,
            ],
            [
                'year' => $second->created_at->format('Y'),
                'month' => $second->created_at->format('F'),
                'published' => 1,
            ]
        ], $posts);

    }
}
