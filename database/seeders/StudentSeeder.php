<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
        	'FullName'=>'Phi Van A',
            'firstName'=>'Phi Van A',
            'currentAddress'=>'Phi Van A',
            'city'=>'HO CHI MINH CITY',
        ]);
        Student::create([
        	'FullName'=>'Phi Van B',
            'firstName'=>'Phi Van A',
            'currentAddress'=>'Phi Van A',
            'city'=>'CAN Tho',
        ]);
        Student::create([
        	'FullName'=>'Phi Van C',
            'firstName'=>'Phi Van A',
            'currentAddress'=>'Phi Van A',
            'city'=>'Buon me thuot',
        	
        ]);
        Student::create([
        	'FullName'=>'Phi Van D',
            'firstName'=>'Phi Van A',
            'currentAddress'=>'Phi Van A',
            'city'=>'TAY NINH',
        ]);
        Student::create([
        	'FullName'=>'Phi Van E',
            'firstName'=>'Phi Van A',
            'currentAddress'=>'Phi Van A',
            'city'=>'Long An',
        ]);
       
    }
}
