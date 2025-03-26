<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'alamat', 'no_hp', 'email', 'password', 'role'];

    // Seorang pasien bisa punya banyak pemeriksaan
    public function pasiens(): HasMany
    {
        return $this->hasMany(Periksa::class, 'id_pasien');
    }

    // Seorang dokter bisa punya banyak pasien dalam pemeriksaan
    public function dokters(): HasMany
    {
        return $this->hasMany(Periksa::class, 'id_dokter');
    }
}