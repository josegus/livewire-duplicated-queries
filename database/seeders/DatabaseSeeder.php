<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $post = Post::factory()->create();

        Comment::factory()->for($post)
            ->has(Comment::factory()->for($post)->count(2))
            ->count(10)
            ->create();
    }
}
