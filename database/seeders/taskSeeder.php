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

        \DB::table('programstudis')->insert ([
            ['nama'=>'Sistem Informasi',
            'deskripsi'=>'Jurusan Sistem Informasi adalah bidang ilmu yang mengintegrasikan bidang manajemen dengan bidang teknologi komputer.'],
            ['nama'=>'Infromatika',
            'deskripsi'=>'Teknik Informatika adalah bidang ilmu yang mempelajari bagaimana menggunakan teknologi komputer secara optimal guna menangani masalah transformasi atau pengolahan data dengan proses logika.'],
            ['nama'=>'Hukum',
            'deskripsi'=>'Jurusan Ilmu Hukum adalah bidang ilmu yang mempelajari berbagai sistem hukum yang berkaitan dengan kehidupan kemasyarakatan.'],
            ['nama'=>'Manajemen',
            'deskripsi'=>'Manajemen adalah bidang yang mempelajari tentang bagaimana mengatur, mengelola, merencanakan, serta membagi tugas untuk mencapai tujuan atau target dari perusahaan.'],
            ['nama'=>'Perhotelan',
            'deskripsi'=>'Perhotelan adalah bidang yang berhubungan dengan manajemen hotel dan mengeksplorasi cara untuk menyeimbangkan aspek pariwisata dan manajemen bisnis untuk sukses.']
        ]
        );

        \DB::table('pembayarans')->insert ([
            ['studentid'=>'03081210003',
            'amount'=>1000.2,
            'paymentdate'=>'2023-11-1',
            'paymentmethod'=>'Cash'],
            ['studentid'=>'03081210004',
            'amount'=>2000.2,
            'paymentdate'=>'2023-11-2',
            'paymentmethod'=>'Debit'],
            ['studentid'=>'03081210005',
            'amount'=>3000.2,
            'paymentdate'=>'2023-11-3',
            'paymentmethod'=>'Kredit'],
            ['studentid'=>'03081210006',
            'amount'=>4000.2,
            'paymentdate'=>'2023-11-4',
            'paymentmethod'=>'Cash'],
            ['studentid'=>'03081210007',
            'amount'=>5000.2,
            'paymentdate'=>'2023-11-5',
            'paymentmethod'=>'Debit']
        ]
        );
        
        \DB::table('jadwalkuliahs')->insert ([
            ['kodematakuliah'=>'SYS07701',
            'kodeterm'=>'KT1',
            'kodedosen'=>'KD1',
            'day'=>'Senin',
            'jammulai'=>'17:30:00',
            'jamselesai'=>'20:10:00',
            'ruangan'=>'AD.109'],
            ['kodematakuliah'=>'SYS0771B',
            'kodeterm'=>'KT2',
            'kodedosen'=>'KD2',
            'day'=>'Selasa',
            'jammulai'=>'17:30:00',
            'jamselesai'=>'21:00:00',
            'ruangan'=>'AD.101'],
            ['kodematakuliah'=>'SYS07702',
            'kodeterm'=>'KT3',
            'kodedosen'=>'KD3',
            'day'=>'Rabu',
            'jammulai'=>'17:30:00',
            'jamselesai'=>'19:30:00',
            'ruangan'=>'AD.101'],
            ['kodematakuliah'=>'SYS0772B',
            'kodeterm'=>'KT4',
            'kodedosen'=>'KD4',
            'day'=>'Kamis',
            'jammulai'=>'17:30:00',
            'jamselesai'=>'21:00:00',
            'ruangan'=>'AD.101'],
            ['kodematakuliah'=>'SYS07704',
            'kodeterm'=>'KT5',
            'kodedosen'=>'KD5',
            'day'=>'Jumat',
            'jammulai'=>'17:30:00',
            'jamselesai'=>'20:10:00',
            'ruangan'=>'AD.109']
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

        for($i = 1; $i <= 15; $i++){
 
            // insert data ke table pegawai menggunakan Faker
          DB::table('users')->insert([
              'name' => $faker->name,
              'email' => $faker->email,
              'password' => $faker->password,
          ]);
      }
    }
}