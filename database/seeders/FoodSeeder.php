<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('foods')->insert([
            'name' => 'コシヒカリごはん',
            'price' => '150',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);  
    }
}
