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
        $post->save();

        $post = new Post;
        $post->title = 'Hello Crewmate';
        $post->content = 'This is second post';
        $post->save();

        $post = new Post;
        $post->title = 'Hello Imposer';
        $post->content = 'This is third post';
        $post->save();

        Post::factory()->count(100)->create();
    }
}
