<?php

namespace App\Http\Controllers;

use App\Contracts\PostRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    protected $post;

    public function __construct(PostRepository $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        $posts = $this->post->all();

        $data = compact('posts');

        return view('posts.index', $data);
    }
}
