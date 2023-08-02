<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'firstname' => 'Putri',
                'lastname' => 'Zahrafi',
                'email'=> 'putrizahrafi@gmail.com',
                'age' => 20,
                'position_id' => 1
            ],
            [
                'firstname' => 'Rosa',
                'lastname' => 'Mazela',
                'email'=> 'rosamazela@gmail.com',
                'age' => 20,
                'position_id' => 2
            ],
            [
                'firstname' => 'Maharani',
                'lastname' => 'Citra',
                'email'=> 'maharanicitra@gmail.com',
                'age' => 21,
                'position_id' => 3
            ],
        ]);
        Employee::factory()->count(10)->create();
    }
}
