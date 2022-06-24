<?php

namespace Database\Factories;

use App\Models\Rajal;
use Illuminate\Database\Eloquent\Factories\Factory;

class RajalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rajal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // // $random = ['Ya', "Tidak"];
        // // return [
        // //     'kode' => $this->faker->numerify('ICD-#'),
        // //     'ptm_sendiri' => $this->faker->randomElement($random),
        // //     'ptm_keluarga' => $this->faker->randomElement($random),
        // //     'lab' => $this->faker->randomHtml(2),
        // //     'rokok' => $this->faker->randomElement($random)
        // ];
    }
}
