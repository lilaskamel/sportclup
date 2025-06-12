<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\Exercise::create([
            'machineName' => 'عضلة الصدر',
            'machineImage' => 'images/chest.png',
            'note' => 'ملاحظة',
            'video' => '',
            'machineName1' => 'آلة الصدر',
            'machineImage1' => 'images/machine.png',
            'description' => 'وصف الآلة',
            'video1' => '',
        ]);
    }
}
