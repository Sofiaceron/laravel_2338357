<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class huespedesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombres' => $this->faker->name(),
            'apellidos' => $this->faker->lastName(),
            'telefono' => $this->faker->phoneNumber(),
            'correo' => $this->faker->freeEmail(),
            'direccion' => $this->faker->address(),
            'ciudad' => $this->faker->city(),
            'pais' => $this->faker->country(),

        ];
    }
}
