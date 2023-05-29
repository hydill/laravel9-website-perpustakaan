<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class anggotaSeeder extends Seeder
{
   
    public function run(): void
    {
       

        DB::table('anggota')->insert([
            'ID'=>'003',
            'nama'=>'hidayat',
            'no_hp'=>'082344444444',
            'alamat'=>'jl.sana sini',
            'kelas'=>'10 IPA 3',
            'status'=>'nonaktif'
        ]);
    }
}
