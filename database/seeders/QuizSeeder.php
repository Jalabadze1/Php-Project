<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\Quiz::create([
            'name' => 'Sample Quiz 1',
            'description' => 'This is a sample quiz.',
            'status' => 1,
        ]);

    }

}
