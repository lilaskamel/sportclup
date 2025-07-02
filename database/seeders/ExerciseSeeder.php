<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Exercise;

class ExerciseSeeder extends Seeder
{
    public function run(): void
    {
        Exercise::create([
            'note' => 'ابدأ بلأحماء قبل التمرين',
            'description' => 'تمرين تقوية عضلات الصدر باستخدام جهاز البنش برس',
            'machineName' => 'آلة ضغط الصدر العمودية
                              (Chest Press Machine)',
            'machineImage' => 'image/img1.jpg', // تأكد إنو الصورة موجودة هون فعليًا
            'video' => 'https://www.example.com/video1',
            'machineName1' => ' عضلة الصدر الكبرى (Pectoralis Major)',
            'machineImage1' => 'image/img6.jpg',
            'video1' => 'https://example.com/video-fake',
            'muscel_id' => 1, // لازم يكون عندك عضلة بـ id = 1
        ]);

        Exercise::create([
            'note' => 'ابدأ بلأحماء قبل التمرين',
            'description' => 'تمرين تقوية عضلات الفخد باستخدام جهاز الإهليلجي ',
            'machineName' => 'جهاز الإهليلجي / الأوربتراك
                            ( Elliptical Trainer أو Cross Trainer)',
            'machineImage' => 'image/img5.jpg', // تأكد إنو الصورة موجودة هون فعليًا
            'video' => 'https://www.example.com/video2',
            'machineName1' => 'عضلات أوتار الركبة (Hamstrings)',
            'machineImage1' => 'image/img7.jpg',
            'video1' => 'https://example.com/video-fake',
            'muscel_id' => 3, // لازم يكون عندك عضلة بـ id = 1
        ]);

         Exercise::create([
            'note' => 'ابدأ بلأحماء قبل التمرين',
            'description' => 'تمرين تقوية ععضلات الذراع الأمامية',
            'machineName' => 'Biceps Curl Machine',
            'machineImage' => 'image/img4.jpg', // تأكد إنو الصورة موجودة هون فعليًا
            'video' => 'https://www.example.com/video2',
            'machineName1' => ' عضلات الذراع الأمامية',
            'machineImage1' => 'image/img8.jpg',
            'video1' => 'https://example.com/video-fake',
            'muscel_id' => 3, // لازم يكون عندك عضلة بـ id = 1
        ]);

        Exercise::create([
            'note' => 'ابدأ بلأحماء قبل التمرين',
            'description' => 'لتقوية عضلات الرقبة الأمامية والخلفية والجانبية',
            'machineName' => 'Neck Extension ',
            'machineImage' => 'image/img9.jpg', // تأكد إنو الصورة موجودة هون فعليًا
            'video' => 'https://www.example.com/video2',
            'machineName1' => 'عضلات الرقبة (Hamstrings)',
            'machineImage1' => 'image/img10.jpg',
            'video1' => 'https://example.com/video-fake',
            'muscel_id' => 3, // لازم يكون عندك عضلة بـ id = 1
        ]);

    }
}
