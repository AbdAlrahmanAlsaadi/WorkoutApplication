<?php

namespace Database\Seeders;

use App\Models\Food_category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Food_category::create([
            'category_name'=>'supplements'
        ]);
        Food_category::create([
            'category_name'=>'healthy food'
        ]);
        Food_category::create([
            'category_name'=>'medicine'
        ]);
    }
}
