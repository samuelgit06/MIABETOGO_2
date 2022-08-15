<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EtablissementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'Nom'=> $this->faker->word(),
            'Desc_eta'=> $this->faker->word(),
            'local_eta' => $this->faker->word(),
           'mail_eta'=> $this->faker->word(),
            'lien_web_eta'=> $this->faker->word(),
            'num_etablissment'=>$this->faker->numberBetween(70000000 ,99999999),
            'images'=>$this->faker->image('public/storage/service_img'),
            'Note_eta'=>$this->faker->numberBetween(0,10),
            'Montant_par_jour'=>$this->faker->numberBetween(),
            'prix_max'=>$this->faker->numberBetween(1000 ,1000000),
           'prix_min'=>$this->faker->numberBetween(0 ,1000),
            'typeetablissement'=>$this->faker->word(),
        ];
    }
}
