<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run(){
    
        Blog::create([
            'post_title' => $this->faker->unique()->sentence,
            'description' => $this->faker->paragraph,
            'post_slug' => $this->faker->unique()->sentence,
            'user_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
