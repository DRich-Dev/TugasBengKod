<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Periksa extends Model
{
    use HasFactory;

    protected $fillable = ['id_pasien', 'id_dokter', 'tanggal', 'keluhan', 'diagnosis'];

    // Relasi ke pasien (User dengan role pasien)
    public function pasien(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_pasien');
    }

    // Relasi ke dokter (User dengan role dokter)
    public function dokter(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_dokter');
    }
}