<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('documents')->insert([
            [
                'name' => 'Form Biodata Mahasiswa A0',
                'link' => 'https://docs.google.com/document/d/1WErbRKyZQVkOW13DNhY1HpAUDLPzVaI0Z2YTSDqGSwQ'
            ],
            [
                'name' => 'Form Biodata Mahasiswa A1',
                'link' => 'https://docs.google.com/document/d/1wV7zo9zssAmHWrlYZ4L1VmP54q01Ijyl1yYNpK-FXRY'
            ]
        ]);
    }
}
