<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Role::create(['name'=>'administrateur']);
        \App\Models\Role::create(['name'=>'superviseur']);
        \App\Models\Role::create(['name'=>'analyste']);

        // \App\Models\User::factory(10)->create();
    }
}