<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('matakuliah_angelines')->insert ([
            ['kodeMatakuliah'=>'MK001',
            'matakuliah'=>'Pemrograman Aplikasi Bisnis',
            'sks'=>4],
            ['kodeMatakuliah'=>'MK002',
            'matakuliah'=>'Audit SI',
            'sks'=>4],
            ['kodeMatakuliah'=>'MK003',
            'matakuliah'=>'Sistem Informasi Perusahaan',
            'sks'=>4]
        ]);
    }
}
