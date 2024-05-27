<?php

namespace Database\Seeders;

use App\Models\Advice_category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdviceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Advice_category::create([
'category_name'=>'eating'

        ]);

        Advice_category::create([
            'category_name'=>'sleep'

                    ]);

    }
}
