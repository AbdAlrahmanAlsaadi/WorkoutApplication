<?php

namespace Database\Seeders;

use App\Models\Exercise;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
    Exercise::unguard();
         $jsonpath=public_path('/sql/exercises.sql');
         DB::unprepared(file_get_contents($jsonpath));

    }
}
