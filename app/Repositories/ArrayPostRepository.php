<?php

namespace App\Repositories;

use App\Contracts\PostRepository as PostContract;

class ArrayPostRepository implements PostContract
{
    public function all()
    {
        $posts = collect();
        foreach(range(1, 10) as $number) {
            $post = [
                'title' => '(array) post title '.$number,
                'content' => '(array) post content',
            ];

            $posts->push((object) $post);
        }

        return $posts;
    }
}