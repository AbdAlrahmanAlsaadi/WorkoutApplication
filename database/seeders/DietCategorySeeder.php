<?php

namespace Database\Seeders;

use App\Models\Diet_category;
use App\Models\Food_category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DietCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Diet_category::create([
'name'=>'weight loss diet'

       ]);
       Diet_category::create([
        'name'=>'muscly building diet'

               ]);
               Diet_category::create([
                'name'=>'flexibilty diet'

                       ]);
    }
}
