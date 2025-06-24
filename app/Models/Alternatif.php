<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alternatif extends Model
{
    use HasFactory;
    protected $table = 'alternatifs';
    protected $fillable = [
        'nama_alternatif',
        'harga',
        'kualitas',
        'kecepatan_pengiriman',
        'konsistensi_pasokan',
        'kemudahan_komunikasi',
        'kategori_id',
        'kriteria_id'
    ];

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }

    public function kriteria(): BelongsTo
    {
        return $this->belongsTo(Kriteria::class);
    }

    public function nilaiAkhir(): HasOne
    {
        return $this->hasOne(NilaiAkhir::class);
    }
}
