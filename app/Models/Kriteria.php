<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kriteria extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

     public function alternatifs():HasMany{
        return $this->hasMany(Alternatif::class);
    }
}
