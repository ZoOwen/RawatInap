<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spesialis extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'nama_spesialis', 'tanggal'
    ];
}
