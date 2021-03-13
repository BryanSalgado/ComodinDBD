<?php

namespace Database\Factories;

use App\Models\Sucursal;
use Illuminate\Database\Eloquent\Factories\Factory;

class SucursalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sucursal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //fakers
            'nombre' => $this->faker->randomElement($array = array ('sucursal1','sucursal2','sucursal3')),
            'visible'=>$this->faker->boolean
        ];
    }
}
