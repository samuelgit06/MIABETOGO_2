<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom_serv' => $this->faker->word(),
            'Type_serv' => $this->faker->word(),
            'note_serv' => $this->faker->numberBetween(0,10),
            'image_serv' => $this->faker->image('public/storage/service_img'),
        ];
    }
}
