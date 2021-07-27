<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'price' => $this->faker->randomFloat(2, 0, 100),
            'genre' => $this->faker->randomElements(['Horror', 'Action', 'Indie', 'Survival', 'Exploration', 'Cards', 'RPG', 'MMORPG', 'Strategy'], 2),
            'company' => $this->faker->randomElement(['Kunami', 'FromHardware', 'Volve', 'Activichon']),
            'platforms' => $this->faker->randomElements(['PS5', 'PS4', 'PC', 'XBOX ONE', 'Stadia'], 3),
            'release_date' => $this->faker->time(),
        ];
    }
}
