<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(1)->create();
         \App\Models\Customer::factory(100)->create();
         \App\Models\Product::factory(200)->create();
         \App\Models\Sale::factory(500)->create();
         \App\Models\Payment::factory(2000)->create();

         $this->call([
            TyreModelSeeder::class,
            TyreTypeSeeder::class,
            TyreSizeSeeder::class
        ]);
    }
}
