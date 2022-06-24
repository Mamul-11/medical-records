<?php

namespace Database\Factories;

use App\Models\Ranap;
use Illuminate\Database\Eloquent\Factories\Factory;

class RanapFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ranap::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $ket = ['sakit','Meninggal','Rujuk'];
        // return [
        //     'biaya' => $this->faker->randomNumber(),
        //     'ket' => $this->faker->randomElement($ket),
        //     'tgl_keluar' => $this->faker->dateTime(),
            

        // ];
    }
}
