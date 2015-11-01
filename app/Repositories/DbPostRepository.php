<?php

namespace App\Repositories;

use App\Contracts\PostRepository as PostContract;
use App\Post;

class DbPostRepository implements PostContract
{

    public function all()
    {
        return Post::all();
    }

}
