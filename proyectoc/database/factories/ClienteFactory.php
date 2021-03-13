<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\Pais;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //fakers
            'nombre' => $this->faker->name,
            'mail' => $this->faker->safeEmail,
            'edad' => $this->faker->numberBetween($min=18,$max=80),
            'visible'=>$this->faker->boolean,
            //atributos foraneos
            'pais_id' =>Pais::factory()
        ];
    }
}
