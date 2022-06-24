<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    // // public function diagnosa(){
    // //     return $this->belongsTo(Diagnosa::class);
    // // }

    // // public function poli(){
    // //     return $this->belongsTo(Poli::class);
    // }
}
