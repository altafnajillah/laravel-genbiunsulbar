<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DemisionerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('demisioners')->insert([
            [
                'name' => '2022/2023',
                'image' => null
            ],
            [
                'name' => '2023/2024',
                'image' => null
            ],
        ]);
    }
}
