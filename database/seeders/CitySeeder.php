<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('city')->insert([
            [
                'city' => 'Lahore',
            ],
            [
                'city' => 'Karachi',
            ],
            [
                'city' => 'Multan',
            ],
            [
                'city' => 'Islamabad',
            ],
        ]);
    }

}
