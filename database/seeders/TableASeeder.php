<?php

namespace Database\Seeders;

use App\Models\TableA;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TableASeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TableA::factory(3000);
    }
}
