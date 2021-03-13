<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\Auto;
use App\Models\Registro;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegistroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Registro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //fakers
            'fecha' => $this->faker->dateTime($max = 'now'),
            'dias' => $this->faker->numberBetween($min=1,$max=15),
            'visible'=>$this->faker->boolean,
            //atributos foraneos
            'cliente_id' =>Cliente::factory(),
            'auto_id' =>Auto::factory(),
        ];
    }
}
