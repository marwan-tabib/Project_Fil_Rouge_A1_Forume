<?php

namespace Database\Seeders;

use App\Models\Shape;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Shape::factory()->count(5)->create();
    }
}
