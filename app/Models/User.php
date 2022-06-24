<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nama',
        'nik',
        'email',
        'password',
        'level',
        'image'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

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
        return 'nik';
    }

    public function scopeUser($query, array $cari){
        // if(isset($filters['table_search']) ? $filters['table_search'] : false){
        //     return $query->where('nama', 'like', '%' . $filters['table_search'] . '%')->
        //             orWhere('nik', 'like', '%' . $filters['table_search'] . '%');
        // }

        $query->when($cari['table_search'] ?? false, function($query, $search){
            return $query->where('nama', 'like', '%' . $search . '%')->
                    orWhere('nik', 'like', '%' . $search . '%');
        });

    }

    // protected static function booted()
    // {
    //     static::addGlobalScope(new Ragad);
    // }
}
