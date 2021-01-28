<?php

namespace Database\Factories;

use App\Models\MojModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class MojModelFactory extends Factory
{
    /**
     * The name of the factory's corres ponding model.
     *
     * @var string
     */
    protected $model = MojModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Ime' => $this->faker->firstName(),
            'Prezime' => $this->faker->lastName(),
            'Broj' => $this->faker->numberBetween(500),
            'zklj' => $this->faker->uuid()
        ];
    }
}
