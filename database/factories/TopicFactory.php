<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Topic>
 */
class TopicFactory extends Factory
{ 
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {    
         $imageDirectory = public_path('assets/images/topics');

         $images = array_diff(scandir($imageDirectory), ['..', '.']);
 
         return [
             'title' => fake()->word(3, true),
             'content' => fake()->paragraphs(3, true),
             'trending' => fake()->boolean(),
             'published' => fake()->boolean(),
             'category_id' => fake()->numberBetween(1,7),
             'image' => fake()->randomElement($images), 
         ];
    }
}
