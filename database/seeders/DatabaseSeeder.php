<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Database\Seeder;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create();

        Category::factory(5)
            ->has(
                Article::factory()
                    ->has(Comment::factory()->for($user)->count(2))
                    ->for($user)
                    ->count(4)
            )
            ->create();
    }
}
