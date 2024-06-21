<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Course;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'price' => fake()->randomFloat(2, 10, 100),
            'category' => fake()->word(),
            'instructor_id' => User::factory()->create()->id,
            'difficulty_level' => fake()->randomElement(['beginner', 'intermediate', 'advanced']),
            'img_thumbnail' => fake()->imageUrl(640, 480, 'courses', true),
            'learning_objectives' => fake()->paragraph(),
            'requirements' => fake()->paragraph(),
            'total_course_duration' => sprintf('%02d:%02d:00', fake()->numberBetween(1, 20), fake()->numberBetween(0, 59)), // Random hour and minute
        
        ];
    }
}
