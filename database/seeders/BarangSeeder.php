<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('barang')->insert([
            [
                'kode_barang' => 'KD - 01',
                'nama_barang' => 'Kost Deluxe Type A',
                'kategori_barang'=> 'Deluxe',
                'harga' => 1000000,
                'jumlah' => 2
            ],
            [
                'kode_barang' => 'KC - 02',
                'nama_barang' => 'Kost Deluce Type B',
                'kategori_barang'=> 'Deluce',
                'harga' => 850000,
                'jumlah' => 5
            ],
            [
                'kode_barang' => 'KB - 03',
                'nama_barang' => 'Kost Behive Type A',
                'kategori_barang'=> 'Behive',
                'harga' => 650000,
                'jumlah' => 4
            ],
        ]);
    }
}
