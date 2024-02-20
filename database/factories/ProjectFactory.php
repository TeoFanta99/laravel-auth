<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'name' => fake() -> word(),
            'description' => fake() -> words(50, true),
            'author' => fake() -> name(),

            // 'name' => ['Progetto 1', 'Progetto 2', 'Progetto 3'],
            // 'description' => ['Progetto di scienze', 'Progetto di Matematica', 'Progetto di Storia'],
            // 'author' => ['Filippo', 'Gianluca', 'Matteo'],

        ];
    }
}
