<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('doctors')->delete();
        
        \DB::table('doctors')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Dr Vinay Kumar - Best Neuropsychiatrist in Patna',
                'address' => 'Near Premchand Circle, Opp- Maila Tanki, near Khetan Lab, Rajendra Nagar, Patna, Bihar 800016 Areas served: Doctors Colony',
                'phone' => '091172 17024',
                'capital' => 'Patna',
            ),
        ));
    }
}
