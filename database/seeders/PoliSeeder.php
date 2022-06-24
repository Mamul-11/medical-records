<?php

namespace Database\Seeders;

use App\Models\Poli;
use Illuminate\Database\Seeder;


class PoliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $poli = new Poli;
        $poli -> id = 1 ;
        $poli -> nama = "RPU";
        $poli->save();
        
        $poli = new Poli;
        $poli -> id = 2 ;
        $poli -> nama = "RGM";
        $poli->save();

        $poli = new Poli;
        $poli -> id = 3 ;
        $poli -> nama = "MTBS";
        $poli->save();

        $poli = new Poli;
        $poli -> id = 4 ;
        $poli -> nama = "KIA";
        $poli->save();
    }
}
