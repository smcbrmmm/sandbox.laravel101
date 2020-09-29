<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post;
        $post->title = 'Hello World';
        $post->content = 'This is first post';
        $post->user_id = 1;
        $post->save();

        $post = new Post;
        $post->title = 'Hello Crewmate';
        $post->content = 'This is second post';
        $post->user_id = 2;
        $post->save();

        $post = new Post;
        $post->title = 'Hello Impostor';
        $post->content = 'This is third post';
        $post->user_id = 3;
        $post->save();


    }
}
