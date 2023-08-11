<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatankartun extends Model
{
    use HasFactory;
    protected $fillable = [
        'kegiatan',
        'judulkegiatan'
    ];
}
