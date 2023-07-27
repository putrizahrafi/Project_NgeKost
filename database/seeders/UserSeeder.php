<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        //hapus data pengguna yang sudah ada jika ada
        User::truncate();

        //buat data pengguna awal
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@admin',
            'password' => bcrypt('adminadmin')
        ]);
    }
}
