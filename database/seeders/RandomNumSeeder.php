<?php

namespace Database\Seeders;

use App\Models\RandomNum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RandomNumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RandomNum::factory()->count(100)->create();
    }
}
