<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\car;
use App\Models\client;
use App\Models\fuel;
use App\Models\mark;
use App\Models\review;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        review::factory(8)->create();
        //  car::factory(41)->create();
        // mark::factory(10)->create();
        // fuel::factory(10)->create();
        //client::factory(4)->create();
        
    }
}
