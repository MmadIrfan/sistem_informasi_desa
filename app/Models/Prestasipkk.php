<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasipkk extends Model
{
    use HasFactory;
    protected $fillable = [
        'prestasi',
        'judulprestasi'
    ];
}
