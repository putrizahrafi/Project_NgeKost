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
                'price' => '1.000.000',
            ],
        ]);
    }
}
