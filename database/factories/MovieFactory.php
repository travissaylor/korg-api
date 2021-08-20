<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Movie;

class MovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4),
            'overview' => $this->faker->text,
            'release_date' => $this->faker->date(),
            'cover_url' => $this->faker->imageUrl(),
            'phase' => $this->faker->numberBetween(1, 4),
            'duration' => $this->faker->numberBetween(90, 210),
            'directed_by' => $this->faker->name,
        ];
    }
}
