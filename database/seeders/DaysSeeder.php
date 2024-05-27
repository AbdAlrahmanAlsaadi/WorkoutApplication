<?php

namespace Database\Seeders;

use App\Models\Day;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $diet_categorys=[1,2,3];
        foreach($diet_categorys as $category_id){
            for($i=1;$i<=15;$i++){

                Day::create([
                    'day_num'=>$i,
                    'diet_category_id'=>$category_id

                ]);
            }
        }
    }
}
