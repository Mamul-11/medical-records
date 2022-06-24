<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rajal extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function pasien(){
        return $this->belongsTo(Pasien::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function poli(){
        return $this->belongsTo(Poli::class);
    }

    public function scopeFilter($query, array $cari){
        $query->when($cari['table_search'] ?? false, function($query, $search){
            return $query->where('no_rm', 'like', '%' . $search . '%')->
                    orWhere('nik', 'like', '%' . $search . '%')->
                    orWhere('nama', 'like', '%' . $search . '%');
        });
    }

    public function scopeCari($query, array $cari){
        $query->when($cari['table_search'] ?? false, function($query, $search){
            return $query->where('tgl_masuk', 'like', '%' . $search . '%')->
                    orWhere('keluhan', 'like', '%' . $search . '%')->
                    orWhere('user1', 'like', '%' . $search . '%')->
                    orWhere('user2', 'like', '%' . $search . '%')->
                    orWhere('user3', 'like', '%' . $search . '%');
        });
    }    
}
