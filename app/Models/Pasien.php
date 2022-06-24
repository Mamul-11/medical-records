<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function rajal(){
            return $this->hasMany(Rajal::class);
        }
    
    public function ranap(){
        return $this->hasMany(Ranap::class);
    }

    public function ragad(){
        return $this->hasMan(Ragad::class);
    }

    public function getRouteKeyName()
    {
        return 'no_rm';
    }

    public function scopeFilter($query, array $cari){
        $query->when($cari['table_search'] ?? false, function($query, $search){
            return $query->where('no_rm', 'like', '%' . $search . '%')->
                    orWhere('nik', 'like', '%' . $search . '%')->
                    orWhere('nama', 'like', '%' . $search . '%');
        });

    }
}
