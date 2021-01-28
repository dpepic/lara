<?php

namespace Database\Factories;

use App\Models\Osoba;
use Illuminate\Database\Eloquent\Factories\Factory;

class OsobaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Osoba::class;

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
            'Mejl' => $this->faker->unique()->email()
        ];
    }
}
