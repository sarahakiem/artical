<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    { 
        $imageDirectory = public_path('assets/images/testimonials');

         $images = array_diff(scandir($imageDirectory), ['..', '.']);
 
        return [
        'name'=>fake()->name($gender ='male'|'female'),
        'content'=>fake()->paragraph(),
        'published'=>fake()->boolean(),
        'image' => fake()->randomElement($images), 
        ];
    }
}
