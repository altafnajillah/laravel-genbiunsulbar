<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('messages')->insert([
            [
                'sent_at' => now(),
                'name' => 'John Doe',
                'email' => 'john@doe.com',
                'message' => 'Hello, John Doe!'
            ],
            [
                'sent_at' => now(),
                'name' => 'Jane Doe',
                'email' => 'jane@doe.com',
                'message' => 'Hello, Jane Doe!'
            ]
        ]);
    }
}
