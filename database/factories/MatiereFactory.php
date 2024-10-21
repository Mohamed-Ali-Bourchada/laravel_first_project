<?php

namespace Database\Factories;

use App\Models\Matiere;
use Illuminate\Database\Eloquent\Factories\Factory;

class MatiereFactory extends Factory
{
    protected $model = Matiere::class;

    public function definition()
    {
return [
    'code' => $this->faker->unique()->lexify(strtolower($this->faker->bothify('????'))), 
    'libelle' => function (array $attributes) {
        return ucfirst($attributes['code']) . ' ' . $this->faker->word(); 
    },
    'coef' => $this->faker->randomFloat(2, 0.5, 5), 
    'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
    'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'), 
];


    }
}
