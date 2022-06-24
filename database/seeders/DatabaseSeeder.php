<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Periksa;
use App\Models\Poli;
use App\Models\Ragad;
use App\Models\Rajal;
use App\Models\Ranap;
use App\Models\Register;
use App\Models\Riwayat;
use App\Models\Pasien;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'Admin Rekam Medis',
            'nik' => '0000000000000001',
            'level' => 0,
            'email_verified_at' => now(),
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123admin')

        ]);
        // User::factory(15)->create();
        $this->call([PoliSeeder::class]);
        Pasien::factory(25)->create();
        // $this->call([DiagnosaSeeder::class]);
        // $this->call([RagadSeeder::class]);
        // $this->call([RanapSeeder::class]);
        // $this->call([RajalSeeder::class]);
        
    }
}
