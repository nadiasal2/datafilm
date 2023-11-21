<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Old extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'tahun',
        'genre',
        'sinopsis',
    ];
}
