<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /*  
    The name of the factory's corresponding model.
    
    
    @var string
    /*  */

    protected $model = \App\Models\Post::class;
      /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
     public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'content' => fake()->paragraph(),
            'picture' => fake()->imageURL(),
            'created_at' => now(),
        ];
    }
}
