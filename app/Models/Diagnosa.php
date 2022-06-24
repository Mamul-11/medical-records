<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // public function pasien(){
    //     return $this->belongsTo(Pasien::class);
    // }
    // public function user(){
    //     return $this->belongsTo(User::class);
    // }

    // public function rajal(){
    //     return $this->hasMany(Rajal::class);
    // }

    // public function ranap(){
    //     return $this->hasMany(Ranap::class);
    // }

    // public function ragad(){
    //     return $this->hasOne(Ragad::class);
    // }
}
