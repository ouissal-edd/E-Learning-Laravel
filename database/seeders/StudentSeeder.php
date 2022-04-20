<?php

namespace Database\Seeders;
// student
use App\Models\Student;
use Carbon\Factory;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::factory()->times(2)->create();
    }
}
