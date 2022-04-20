<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=3;$i++){
            for($j=1;$j<=6;$j++){
                DB::table('course_student')->insert([
                    'course_id' => $i,
                    'student_id' => $j,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }
     
    }
}
