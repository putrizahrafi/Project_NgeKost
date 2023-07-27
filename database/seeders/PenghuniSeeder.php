<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenghuniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('penghuni')->insert([
            [
                'nomor_kamar' => 'KD - 01',
                'nama_penghuni' => 'Putri Zahrafi',
                'kategori_kamar'=> 'Deluxe',
                'tanggal_penempatan' => '5 Agustus 2022',
            ],
            [
                'nomor_kamar' => 'KD - 02',
                'nama_penghuni' => 'Rosa Mazela',
                'kategori_kamar'=> 'Deluxe',
                'tanggal_penempatan' => '21 Juli 2023',
            ],
            [
                'nomor_kamar' => 'KC - 03',
                'nama_penghuni' => 'Mifta Yulya',
                'kategori_kamar'=> 'Deluce',
                'tanggal_penempatan' => '17 Desember 2022',
            ],
            [
                'nomor_kamar' => 'KB - 05',
                'nama_penghuni' => 'Maharan Citra',
                'kategori_kamar'=> 'Behive',
                'tanggal_penempatan' => '26 Januari 2023',
            ],
        ]);
    }
}
