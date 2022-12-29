<?php

namespace Database\Seeders;

use App\Models\Cats;
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
        Cats::factory()->count(10)->create();
    }
}
