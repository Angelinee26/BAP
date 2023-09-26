<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Faker\Factory as Faker;

class taskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \DB::table('matakuliahs')->insert ([
            ['kodeMatakuliah'=>'MK001',
            'matakuliah'=>'Pemrograman Aplikasi Bisnis',
            'sks'=>4],
            ['kodeMatakuliah'=>'MK002',
            'matakuliah'=>'Audit SI',
            'sks'=>4],
            ['kodeMatakuliah'=>'MK003',
            'matakuliah'=>'Sistem Informasi Perusahaan',
            'sks'=>4]
        ]
        );

        \DB::table('khs')->insert ([
            ['kodeKhs'=>'K1',
            'keterangan'=>'2021/2022',
            'keteranganSingkat'=>'2021/2022'],
            ['kodeKhs'=>'K2',
            'keterangan'=>'2022/2023',
            'keteranganSingkat'=>'2022/2023'],
            ['kodeKhs'=>'K3',
            'keterangan'=>'2023/2024',
            'keteranganSingkat'=>'2023/2024']
        ]
        );

        \DB::table('khs_details')->insert ([
            ['kodeKhsDetail'=>'K1',
            'kodeKhs'=>'K1',
            'nilai'=>80],
            ['kodeKhsDetail'=>'K2',
            'kodeKhs'=>'K2',
            'nilai'=>70],
            ['kodeKhsDetail'=>'K3',
            'kodeKhs'=>'K3',
            'nilai'=>60]
        ]
        );

    	$faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 50; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('mahasiswas')->insert([
    			'studentID' => '03000811'&$i,
    			'nama' => $faker->name,
    			'tahunMasuk' => '2021',
    			'jurusan' => $faker->address
    		]);
        }
    }
}