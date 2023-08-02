<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('positions')->insert([
            [
                'code' => 'DX',
                'name' => 'Deluxe',
                'description' => 'Type A'
            ],
            [
                'code' => 'DC',
                'name' => 'Deluce',
                'description' => 'Type B'
            ],
            [
                'code' => 'BV',
                'name' => 'Behive',
                'description' => 'Type C'
            ],
        ]);
        Position::factory()->count(5)->create();
    }
}
