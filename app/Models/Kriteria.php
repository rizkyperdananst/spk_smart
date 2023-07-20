<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;

    protected $fillable = ['alternatif_kriteria', 'bobot_awal', 'deskripsi_kriteria', 'bobot_kriteria'];
    
}
