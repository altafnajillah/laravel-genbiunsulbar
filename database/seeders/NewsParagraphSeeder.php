<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsParagraphSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news_paragraphs')->insert([
            [
                'news_id' => 1,
                'paragraph_order' => 1,
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod INI BERITA SATU PARAGRAF SATU',
            ],
            [
                'news_id' => 1,
                'paragraph_order' => 2,
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod INI BERITA SATU PARAGRAF DUA'
            ],
            [
                'news_id' => 1,
                'paragraph_order' => 3,
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod INI BERITA SATU PARAGRAF TIGA'
            ],
            [
                'news_id' => 2,
                'paragraph_order' => 1,
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod INI BERITA DUA PARAGRAF SATU',
            ],
            [
                'news_id' => 2,
                'paragraph_order' => 2,
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod INI BERITA DUA PARAGRAF DUA'
            ],
            [
                'news_id' => 2,
                'paragraph_order' => 3,
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod INI BERITA DUA PARAGRAF TIGA'
            ]
        ]);
    }
}
