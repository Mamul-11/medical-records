<?php

namespace Database\Seeders;

use App\Models\Rajal;
use Illuminate\Database\Seeder;

class RajalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rajal= new Rajal();
        $rajal->id=1;
        $rajal -> pasien_id = 1;
        $rajal -> tgl_masuk = now();
        $rajal->poli_id=1;
        $rajal -> tekanan = 110;
        $rajal -> bb = 80;
        $rajal -> tb = 175;
        $rajal -> lp = 80;
        $rajal -> keluhan = 'Perut sakit';
        $rajal -> diagnosa = 'Maag';
        $rajal->jaminan="umum";
        $rajal->terapi="lorem ipsum dolor sit amet, consectetur adipisicing elit.";
        $rajal->kode="";
        $rajal->lab="";
        $rajal->rokok;
        $rajal->save();

        $rajal= new Rajal();
        $rajal->id=2;
        $rajal -> pasien_id = 2;
        $rajal -> tgl_masuk = now();
        $rajal->poli_id=1;
        $rajal -> tekanan = 110;
        $rajal -> bb = 80;
        $rajal -> tb = 175;
        $rajal -> lp = 80;
        $rajal -> keluhan = 'Perut sakit';
        $rajal -> diagnosa = 'Maag';
        $rajal->jaminan="umum";
        $rajal->terapi="lorem ipsum dolor sit amet, consectetur adipisicing elit.";
        $rajal->kode="";
        $rajal->lab="";
        $rajal->rokok;
        $rajal->save();

        $rajal= new Rajal();
        $rajal->id=3;
        $rajal -> pasien_id = 1;
        $rajal -> tgl_masuk = now();
        $rajal->poli_id=2;
        $rajal -> tekanan = 110;
        $rajal -> bb = 80;
        $rajal -> tb = 175;
        $rajal -> lp = 80;
        $rajal -> keluhan = 'Perut sakit';
        $rajal -> diagnosa = 'Maag';
        $rajal->jaminan="umum";
        $rajal->terapi="lorem ipsum dolor sit amet, consectetur adipisicing elit.";
        $rajal->kode="";
        $rajal->lab="";
        $rajal->rokok;
        $rajal->save();

        $rajal= new Rajal();
        $rajal->id=4;
        $rajal -> pasien_id = 2;
        $rajal -> tgl_masuk = now();
        $rajal->poli_id=4;
        $rajal -> tekanan = 110;
        $rajal -> bb = 80;
        $rajal -> tb = 175;
        $rajal -> lp = 80;
        $rajal -> keluhan = 'Perut sakit';
        $rajal -> diagnosa = 'Maag';
        $rajal->jaminan="umum";
        $rajal->terapi="lorem ipsum dolor sit amet, consectetur adipisicing elit.";
        $rajal->kode="";
        $rajal->lab="";
        $rajal->rokok;
        $rajal->save();

        
    }
}
