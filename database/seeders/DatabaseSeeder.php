<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();
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
        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }

        Role::truncate();
        $adminRole = Role::create(['name' => 'admin']);

        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin@gmail.com'),
            'email_verified_at' => NOW()
        ]);

        $admin->roles()->attach($adminRole);
    }
}