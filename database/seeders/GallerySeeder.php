<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('galleries')->insert([
            [
                'plan_id' => 1,
                'type' => 'video',
                'video' => 'https://www.youtube.com/embed/-qAsFAqHjyo?si=MQdQVEs0av4-V4ut',
                'image' => null,
            ],
            [
                'plan_id' => 1,
                'type' => 'video',
                'video' => 'https://www.youtube.com/embed/-qAsFAqHjyo?si=MQdQVEs0av4-V4ut',
                'image' => null,
            ],
            [
                'plan_id' => 1,
                'type' => 'image',
                'video' => null,
                'image' => null
            ],
            [
                'plan_id' => 2,
                'type' => 'image',
                'video' => null,
                'image' => null
            ],
            [
                'plan_id' => 2,
                'type' => 'video',
                'video' => 'https://www.youtube.com/embed/-qAsFAqHjyo?si=MQdQVEs0av4-V4ut',
                'image' => null,
            ],
            [
                'plan_id' => 2,
                'type' => 'image',
                'video' => null,
                'image' => null
            ],
        ]);
    }
}
