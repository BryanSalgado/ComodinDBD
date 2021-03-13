<?php

namespace Database\Factories;

use App\Models\Auto;
use App\Models\Sucursal;
use Illuminate\Database\Eloquent\Factories\Factory;

class AutoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Auto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //fakers
            'color' => $this->faker->randomElement($array = array ('Rojo','Verde','Azul','Blanco','Gris','Negro')),
            'patente' => $this->faker->randomElement($array = array ('BC FG 12','DJ LT 32','YR KP 15','WH XZ 87','GV NM 22','DK RC 24')),
            'ano' => $this->faker->numberBetween($min=2000,$max=2021),
            'modelo' => $this->faker->randomElement($array = array ('Peugeot 3008','Jeep Renegade','Jeep Wrangler','Jaguar F-Pace','Bugatti Chiron','Volkswagen Caddy')),
            'valor' => $this->faker->numberBetween($min=10000,$max=200000),
            'disponible'=>$this->faker->boolean,
            'veces_rentado' => $this->faker->numberBetween($min=0,$max=100),
            'visible'=>$this->faker->boolean,
            //atributos foraneos
            'sucursal_id' => $this->faker->numberBetween($min=1,$max=3)
        ];
    }
}
