<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('plans')->insert([
            [
                'title' => 'GenBI Mengajar',
                'held_at' => "2025-01-25",
            ],
            [
                'title' => 'GenBI Kunjungan Museum',
                'held_at' => "2025-02-10",
            ],
            [
                'title' => 'KRITAM 2024',
                'held_at' => "2024-11-2",
            ],
        ]);
    }
}
