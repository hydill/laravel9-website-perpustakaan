<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = [
        'jdl_buku',
        'pengarang',
        'kategori',
        'stok',
        'lokasi'
    ];
    protected $table = 'buku';
    protected $guarded = [];
}
