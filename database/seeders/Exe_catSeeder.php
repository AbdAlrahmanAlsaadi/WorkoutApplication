<?php

namespace Database\Seeders;

use App\Models\exe_cat;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Exe_catSeeder extends Seeder
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

