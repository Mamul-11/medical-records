<?php

namespace Database\Factories;

use App\Models\Ragad;
use Illuminate\Database\Eloquent\Factories\Factory;

class RagadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ragad::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
    //     $boolean = ['YA', 'Tidak'];
    //     $rs = ['rs moewardi', 'rs margono', 'rs surakarta', 'rs banyumas'];
    //     return [
    //         'tindakan' => $this->faker->boolean($boolean),
    //         'ic' => $this->faker->randomElement($boolean),
    //         'rujuk' => $this->faker->randomElement($boolean),
    //         'rs_rujuk' => $this->faker->randomElement($rs),
    //         'monitoring_rujuk' =>$this->faker->randomHtml(10)
    //     ];
    }
}
