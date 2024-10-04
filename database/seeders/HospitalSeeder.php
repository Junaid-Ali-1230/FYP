<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hospitals')->insert([
            // Lahore Hospitals
            [
                'id' => 1,
                'hospital_name' => 'Lahore General Hospital',
                'address' => 'Ferozepur Road, Lahore',
            ],
            [
                'id' => 1,
                'hospital_name' => 'Shaukat Khanum Hospital',
                'address' => 'Johar Town, Lahore',
            ],
            [
                'id' => 1,
                'hospital_name' => 'Mayo Hospital',
                'address' => 'Nishtar Road, Lahore',
            ],
            [
                'id' => 1,
                'hospital_name' => 'Jinnah Hospital',
                'address' => 'Allama Iqbal Town, Lahore',
            ],

            // Karachi Hospitals
            [
                'id' => 2,
                'hospital_name' => 'Karachi Civil Hospital',
                'address' => 'Baba-e-Urdu Road, Karachi',
            ],
            [
                'id' => 2,
                'hospital_name' => 'Aga Khan University Hospital',
                'address' => 'Stadium Road, Karachi',
            ],
            [
                'id' => 2,
                'hospital_name' => 'South City Hospital',
                'address' => 'Clifton, Karachi',
            ],
            [
                'id' => 2,
                'hospital_name' => 'Liaquat National Hospital',
                'address' => 'Stadium Road, Karachi',
            ],

            // Multan Hospitals
            [
                'id' => 3,
                'hospital_name' => 'Nishtar Hospital',
                'address' => 'Nishtar Road, Multan',
            ],
            [
                'id' => 3,
                'hospital_name' => 'Ibn-e-Siena Hospital',
                'address' => 'Shah Rukn-e-Alam, Multan',
            ],
            [
                'id' => 3,
                'hospital_name' => 'Bilal Hospital',
                'address' => 'Model Town, Multan',
            ],
            [
                'id' => 3,
                'hospital_name' => 'CPEIC Hospital',
                'address' => 'Abdali Road, Multan',
            ],

            // Islamabad Hospitals
            [
                'id' => 4,
                'hospital_name' => 'PIMS Hospital',
                'address' => 'G-8/3, Islamabad',
            ],
            [
                'id' => 4,
                'hospital_name' => 'Shifa International Hospital',
                'address' => 'H-8/4, Islamabad',
            ],
            [
                'id' => 4,
                'hospital_name' => 'Kulsum International Hospital',
                'address' => 'Blue Area, Islamabad',
            ],
            [
                'id' => 4,
                'hospital_name' => 'Islamabad International Hospital',
                'address' => 'G-5/2, Islamabad',
            ],
        ]);
    }

}
