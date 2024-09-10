<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Topic;
use App\Models\Category;
use App\Models\Testimonial;
use App\Models\Message;




// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       //Category::factory(7)->create();
        Topic::factory(30)->create();
        Testimonial::factory(7)->create();
        Message::factory(30)->create();




        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
