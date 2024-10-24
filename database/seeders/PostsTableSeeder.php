<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // First method
        $post = new Post;
        $post->title = "How";
        $post->body = "This";
        $post->save();

        // Second method
        Post::create([
        	"title" => "Another",
        	"body" => "Well",
        ]);

        // Finally
        Post::factory()->count(50)->create();
    }
}
