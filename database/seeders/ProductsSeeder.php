<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'product_name' => 'Kost Deluxe Type A',
                'product_description' => 'Kamar mandi dalam, wifi, meja kerja, lemari, kasur single bed',
                'photo'=> '1.jpeg',
                'price' => '1000000',
            ],
            [
                'product_name' => 'Kost Deluce Type B',
                'product_description' => 'Kamar mandi luar, wifi, meja kerja, lemari, kasur single bed',
                'photo'=> '2.jpeg',
                'price' => '850000',
            ],
            [
                'product_name' => 'Kost Behive Type C',
                'product_description' => 'Kamar mandi luar, wifi, meja kerja, lemari, kasur single bed',
                'photo'=> '3.jpeg',
                'price' => '650000',
            ],
        ]);
    }
}
