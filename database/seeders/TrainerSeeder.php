<?php

namespace Database\Seeders;
use App\Models\Trainer;

use Illuminate\Database\Seeder;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trainer::create([
            'name' => 'Ouissal',
            'spec' => 'web developer',
            'img' => '1.jpg'
        ]);

        Trainer::create([
            'name' => 'Oussama',
            'spec' => 'web developer',
            'img' => '2.jpg'
        ]);

        Trainer::create([
            'name' => 'lina',
            'spec' => 'doctor',
            'img' => '3.jpg'
        ]);

        Trainer::create([
            'name' => 'mohamed',
            'spec' => 'english teacher',
            'img' => '4.jpg'
        ]);

        Trainer::create([
            'name' => 'chaima',
            'spec' => 'dentist',
            'img' => '5.jpg'
        ]);

    }
}
