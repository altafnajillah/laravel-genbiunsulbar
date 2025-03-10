<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->insert([
            [
                'title' => 'GenBI Unsulbar Mengadakan GenBI Mengajar 2025',
                'image' => null,
                'published_at' => now(),
            ],
            [
                'title' => 'GenBI Unsulbar Kunjungan Museum',
                'image' => null,
                'published_at' => now(),
            ]
        ]);
    }
}
