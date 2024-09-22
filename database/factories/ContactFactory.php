<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name($gender ='male'|'female'),
            'email'=>fake()->email(),
            'subject'=>fake()->word(),
            'message'=>fake()->text(400),
            'read'=>fake()->boolean(),
        ];
    }
}
