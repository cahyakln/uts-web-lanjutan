<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Department;
use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UtsKepegawaianSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@kepegawaian.test'],
            [
                'name' => 'Administrator',
                'password' => Hash::make('password123'),
            ]
        );

        $it = Department::firstOrCreate([
            'name' => 'Teknologi Informasi',
        ]);

        $hr = Department::firstOrCreate([
            'name' => 'Sumber Daya Manusia',
        ]);

        $finance = Department::firstOrCreate([
            'name' => 'Keuangan',
        ]);

        $employees = [
            [
                'department_id' => $it->id,
                'name' => 'Andi Saputra',
                'position' => 'Backend Developer',
                'salary' => 8000000,
                'joined_at' => '2022-03-01',
            ],
            [
                'department_id' => $it->id,
                'name' => 'Budi Santoso',
                'position' => 'Frontend Developer',
                'salary' => 7500000,
                'joined_at' => '2023-01-15',
            ],
            [
                'department_id' => $hr->id,
                'name' => 'Citra Lestari',
                'position' => 'HR Specialist',
                'salary' => 6500000,
                'joined_at' => '2021-07-10',
            ],
            [
                'department_id' => $finance->id,
                'name' => 'Dian Permata',
                'position' => 'Akuntan',
                'salary' => 7000000,
                'joined_at' => '2020-11-20',
            ],
            [
                'department_id' => $hr->id,
                'name' => 'Eko Prasetyo',
                'position' => 'Recruiter',
                'salary' => 6000000,
                'joined_at' => '2024-02-05',
            ],
        ];

        foreach ($employees as $employee) {
            Employee::updateOrCreate(
                ['name' => $employee['name']],
                $employee
            );
        }
    }
}
