<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index()
    {
        $model = new Post();
        $posts = $model->all();

        $data = compact('posts');

        return view('posts.index', $data);
    }
}
