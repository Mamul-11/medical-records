<?php

namespace App\Models;

use App\Models\Ragad as ModelsRagad;
use Clockwork\Request\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class Ragad extends Model
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

    public function scopeFilter($query, array $cari)
    {
        $query->when($cari['table_search'] ?? false, function ($query, $search) {
            return $query->where('no_rm', 'like', '%' . $search . '%')
            ->orWhere('nik', 'like', '%' . $search . '%')
            ->orWhere('nama', 'like', '%' . $search . '%');
        });
    }
    public function scopeRagad($query, array $cari)
    {
        $query->when($cari['table_search'] ?? false, function ($query, $search) {
            return $query->where('tgl_masuk', 'LIKE', '%' . $search . '%')
            ->orWhere('keluhan', 'like', '%' . $search . '%')
            ->orWhere('user1', 'like', '%' . $search . '%')
            ->orWhere('user2', 'like', '%' . $search . '%')
            ->orWhere('user3', 'like', '%' . $search . '%');

        });

        // $query->when($cari['table_search'] ?? false, function ($query, $search) {
        //     $query = Ragad::join('users','users.id','=','ragads.user_id')
        //         ->where('users.nama','like', '%' . $search . '%');
                
        //     return ($query);
        // });

    }
}
