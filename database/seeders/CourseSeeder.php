<?php

namespace Database\Seeders;
use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
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
                Course::create([
                    'name' => 'course '.$i.'-'.$j,
                    'small_desc' => 'small description '.$i.'-'.$j,
                    'desc' => 'description '.$i.'-'.$j,
                    'img' => 'course'.$i.'-'.$j.'.jpg',
                    'price' => rand(100,1000),
                    'cat_id' => $i,
                    'trainer_id' => rand(1,5)

                ]);
            }

    }
}
}
