<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $fillable = [
        'ID_siswa',
        'nama',
        'no_hp',
        'alamat',
        'kelas',
        'status'
    ];

    protected $table = 'anggota';

    // protected $keyType = 'int';
    // protected $primaryKey = 'id';
}
