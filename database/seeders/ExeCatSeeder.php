<?php

namespace Database\Seeders;

use App\Models\Day;
use App\Models\exe_cat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExeCatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

         public function run(): void
    {
        {
         exe_cat::unguard();
         $jsonpath=public_path('/sql/exe_cats.sql');
         DB::unprepared(file_get_contents($jsonpath));

    }}
    }
