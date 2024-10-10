<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class FlowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('flowers')->insert([
            ['species' => 'Tulipán', 'color' => 'Negro'],
            ['species' => 'Girasol', 'color' => 'Amarillo'],
        ]);
    }
}
