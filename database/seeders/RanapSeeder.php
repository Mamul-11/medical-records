<?php

namespace Database\Seeders;

use App\Models\Ranap;
use Illuminate\Database\Seeder;

class RanapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ranap= new Ranap();
        $ranap -> tgl_masuk = now();
        $ranap->id=1;
        $ranap -> pasien_id = 1;
        $ranap -> keluhan = 'demam Tinggi';
        $ranap -> diagnosa = 'covid';
        $ranap->jaminan="umum";
        $ranap->terapi="Pemberian obat";
        $ranap->tgl_keluar;
        $ranap->biaya=500000;
        $ranap->ket="sakit";
        $ranap->save();

        $ranap= new Ranap();
        $ranap -> tgl_masuk = now();
        $ranap->id=2;
        $ranap -> pasien_id = 1;
        $ranap -> keluhan = 'Perut sakit';
        $ranap -> diagnosa = 'Maag';
        $ranap->jaminan="umum";
        $ranap->terapi="Pemberian obat";
        $ranap->tgl_keluar;
        $ranap->biaya=500000;
        $ranap->ket="sakit";
        $ranap->save();

        $ranap= new Ranap();
        $ranap -> tgl_masuk = now();
        $ranap->id=3;
        $ranap -> pasien_id = 2;
        $ranap -> keluhan = 'Perut sakit';
        $ranap -> diagnosa = 'Maag';
        $ranap->terapi="Pemberian obat";
        $ranap->jaminan="umum";
        $ranap->tgl_keluar;
        $ranap->biaya=500000;
        $ranap->ket="sakit";
        $ranap->save();

        $ranap= new Ranap();
        $ranap -> tgl_masuk = now();
        $ranap->id=4;
        $ranap -> pasien_id = 2;
        $ranap -> keluhan = 'Perut sakit';
        $ranap -> diagnosa = 'Maag';
        $ranap->terapi="Pemberian obat";
        $ranap->jaminan="umum";
        $ranap->tgl_keluar;
        $ranap->biaya=500000;
        $ranap->ket="sakit";
        $ranap->save();

        $ranap= new Ranap();
        $ranap -> tgl_masuk = now();
        $ranap->id=5;
        $ranap -> pasien_id = 3;
        $ranap -> keluhan = 'Perut sakit';
        $ranap -> diagnosa = 'Maag';
        $ranap->terapi="Pemberian obat";
        $ranap->jaminan="umum";
        $ranap->tgl_keluar;
        $ranap->biaya=500000;
        $ranap->ket="sakit";
        $ranap->save();
    }
}
