<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('buku')->insert([
            'jdl_buku'=>'pemrograman web',
            'pengarang'=>'firman',
            'kategori'=>'pemrograman',
            'stok'=>'kosong',
            'lokasi'=>'rak 12'
        ]);
    }
}
