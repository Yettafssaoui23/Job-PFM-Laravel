<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();
         \App\Models\Company::factory(15)->create();
         \App\Models\Job::factory(15)->create();

         $categories = [

            'Technologie',
            'Ingénierie',
            'Gouvernement',
            'Médical',
            'Construction',
            'Software'

        ];
        foreach($categories as $category){
            Category::create(['name'=>$category]);
        }
    }
}
