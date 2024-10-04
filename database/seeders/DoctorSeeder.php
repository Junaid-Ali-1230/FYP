<?php

namespace Database\Seeders;
use App\Models\Doctors;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Doctors::factory(1)->create();
    }
}
