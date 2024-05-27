<?php

namespace Database\Seeders;

use App\Models\Category_Exercise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategoryExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    Category_Exercise::unguard();
         $jsonpath=public_path('/sql/category__exercises.sql');
         DB::unprepared(file_get_contents($jsonpath));
    }
}
