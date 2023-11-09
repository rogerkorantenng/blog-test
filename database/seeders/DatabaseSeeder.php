<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Category::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work',
        ]);

        $hobbies = Category::create([
            'name' => 'Hobbies',
            'slug' => 'hobbies',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'slug' => 'my-first-post',
            'title' => 'My First Post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>',
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
