<?php

namespace Database\Seeders;

use App\Models\Ninja;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NinjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Ninja::factory(10)->create();
    }
}
