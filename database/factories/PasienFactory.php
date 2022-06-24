<?php

namespace Database\Factories;

use App\Models\Pasien;
use Illuminate\Database\Eloquent\Factories\Factory;

class PasienFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pasien::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = ['Laki-laki', 'Perempuan'];
        $agama = ['Islam', 'Kristen', 'Buddha', 'Hindu', 'Lainya'];
        $faskes = ['BPJS', 'faskes lainya'];
        $status = ['PBI', 'Non PBI'];
        $study = ['SD', 'SMP', 'SMA', 'S1', 'S2'];
        $penyakit=['Diabetes','Stroke','Jantung'];
        $alergi=['obat','makanan','minuman'];
        $pengobatan=['Ya','Tidak'];
        return [
            'nik' => $this->faker->unique()->numerify('#############'),
            'no_rm' => $this->faker->unique()->numerify('######'),
            'nama' => $this->faker->name(),
            'tgl_lahir' => $this->faker->date('Y-m-d', $max = 'now'),
            'kelamin' => $this->faker->randomElement($gender),
            'agama' => $this->faker->randomElement($agama),
            'alamat' => $this->faker->address(),
            'faskes' => $this->faker->randomElement($faskes),
            'no_kis' => $this->faker->unique()->numerify('#############'),
            'status_kis' => $this->faker->randomElement($status),
            'pendidikan' => $this->faker->randomElement($study),
            'pekerjaan' => $this->faker->jobTitle(),
            'kk' => $this->faker->name(),
            'telp' => $this->faker->e164PhoneNumber(12),
            'penyakit_sendiri' => $this->faker->randomElement($penyakit),
            'penyakit_keluarga' => $this->faker->randomElement($penyakit),
            'alergi' => $this->faker->randomElement($alergi),
            'pengobatan' => $this->faker->randomElement($pengobatan)
        ];
    }
}
