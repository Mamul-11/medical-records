<?php

namespace App\Models;

use App\Models\Ranap as ModelsRanap;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ranap extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
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

    public function scopeRanap($query, array $cari){
        $query->when($cari['table_search'] ?? false, function($query, $search){
            return $query->where('tgl_masuk', 'like', '%' . $search . '%')->
                    orWhere('tgl_keluar', 'like', '%' . $search . '%')->
                    orWhere('keluhan', 'like', '%' . $search . '%')->
                    orWhere('user1', 'like', '%' . $search . '%')->
                    orWhere('user2', 'like', '%' . $search . '%')->
                    orWhere('user3', 'like', '%' . $search . '%');
        });

        // $query->when($cari['user'] ?? false, function($query, $user){
        //     return $query->wherehas('user', function($query) use($user){
        //         $query->where('user_id', $user);
        //     });
        // });
    }    
}
