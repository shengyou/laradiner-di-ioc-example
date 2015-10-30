<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();

        foreach(range(1, 10) as $number) {
            Post::create([
                'title' => '(db) post title '.$number,
                'content' => '(db) post content',
            ]);
        }
    }
}
