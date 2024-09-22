<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Topic;
use App\Models\Category;
use App\Models\Testimonial;
use App\Models\Contact;




// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Category::factory(7)->create();
        Topic::factory(60)->create();
        Testimonial::factory(9)->create();
        Contact::factory(20)->create();
    }
}
