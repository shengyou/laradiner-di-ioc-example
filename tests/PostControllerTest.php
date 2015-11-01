<?php

use App\Contracts\PostRepository;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PostControllerTest extends TestCase
{
    /**
     * @group post
     */
    public function testPostControllerIndex()
    {
        // Arrange
        $data = [
            (object) ['title' => 'fake title 1', 'content' => 'fake title 1'],
            (object) ['title' => 'fake title 2', 'content' => 'fake title 2'],
        ];
        $repository = Mockery::mock(PostRepository::class);
        $repository->shouldReceive('all')->once()->andReturn($data);
        $this->app->instance(PostRepository::class, $repository);

        // Act
        $this->action('get', 'PostsController@index');

        // Assert
        $this->assertResponseOk();
        $this->assertViewHas('posts', $data);
    }
}
