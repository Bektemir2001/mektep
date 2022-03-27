<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Tag;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Post::factory(10)->create();
        Category::factory(10)->create();
        Tag::factory(10)->create();
        // \App\Models\User::factory(10)->create();
    }
}
