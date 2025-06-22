<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NilaiAkhir extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function alternatif() : BelongsTo
    {
        return $this->belongsTo(Alternatif::class);
    }
}
