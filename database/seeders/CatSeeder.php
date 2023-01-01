<?php

namespace Database\Seeders;

use App\Models\Cats;
use App\Models\Exam;
use App\Models\Question;
use App\Models\Skills;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cats::factory()->has(
            Skills::factory()->has(
                Exam::factory()->has(
                    Question::factory()->count(15)
                )->count(2),
            )->count(8)
        )->count(5)->create();
    }
}
