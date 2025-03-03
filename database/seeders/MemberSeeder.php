<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('members')->insert([
            [
                'name' => "Ketua Umum",
                'nim' => "A0123456",
                'prodi' => "Teknik Sipil",
                'image' => null,
                'departemen' => 0,
                'position' => 0,
            ],
            [
                'name' => "Sekretaris Umum",
                'nim' => "A0123457",
                'prodi' => "Teknik Informatika",
                'image' => null,
                'departemen' => 0,
                'position' => 1,
            ],
            [
                'name' => "Bendahara Umum",
                'nim' => "A0123458",
                'prodi' => "Ilmu Hukum",
                'image' => null,
                'departemen' => 0,
                'position' => 2,
            ],
//            Departemen 1
            [
                'name' => "Ketua Pendidikan",
                'nim' => "B0123456",
                'prodi' => "Agribisnis",
                'image' => null,
                'departemen' => 1,
                'position' => 0,
            ],
            [
                'name' => "Sekretaris Pendidikan",
                'nim' => "B0123457",
                'prodi' => "Agroekoteknologi",
                'image' => null,
                'departemen' => 1,
                'position' => 1,
            ],
            [
                'name' => "Anggota 1",
                'nim' => "B0123458",
                'prodi' => "Pendidikan Fisika",
                'image' => null,
                'departemen' => 1,
                'position' => 3,
            ],
            [
                'name' => "Anggota 2",
                'nim' => "B0123459",
                'prodi' => "Pendidikan Biologi",
                'image' => null,
                'departemen' => 1,
                'position' => 3,
            ],
            [
                'name' => "Anggota 3",
                'nim' => "B0123460",
                'prodi' => "Pendidikan Bahasa Inggris",
                'image' => null,
                'departemen' => 1,
                'position' => 3,
            ],
//            Departemen 2
            [
                'name' => "Ketua Pubdok",
                'nim' => "C0123456",
                'prodi' => "Ilmu Politik",
                'image' => null,
                'departemen' => 2,
                'position' => 0,
            ],
            [
                'name' => "Sekretaris Pubdok",
                'nim' => "C0123457",
                'prodi' => "Akuntansi",
                'image' => null,
                'departemen' => 2,
                'position' => 1,
            ],
            [
                'name' => "Anggota 1",
                'nim' => "C0123458",
                'prodi' => "PGSD",
                'image' => null,
                'departemen' => 2,
                'position' => 3,
            ],
            [
                'name' => "Anggota 2",
                'nim' => "C0123459",
                'prodi' => "Sistem Informasi",
                'image' => null,
                'departemen' => 2,
                'position' => 3,
            ],
            [
                'name' => "Anggota 3",
                'nim' => "C0123460",
                'prodi' => "PWK",
                'image' => null,
                'departemen' => 2,
                'position' => 3,
            ],
//            Departemen 3
            [
                'name' => "Ketua Kewirus",
                'nim' => "D0123456",
                'prodi' => "Akuakultur",
                'image' => null,
                'departemen' => 3,
                'position' => 0,
            ],
            [
                'name' => "Sekretaris Kewirus",
                'nim' => "D0123457",
                'prodi' => "Manajemen",
                'image' => null,
                'departemen' => 3,
                'position' => 1,
            ],
            [
                'name' => "Anggota 1",
                'nim' => "D0123458",
                'prodi' => "Bisnis Digital",
                'image' => null,
                'departemen' => 3,
                'position' => 3,
            ],
            [
                'name' => "Anggota 2",
                'nim' => "D0123459",
                'prodi' => "Gizi",
                'image' => null,
                'departemen' => 3,
                'position' => 3,
            ],
            [
                'name' => "Anggota 3",
                'nim' => "D0123460",
                'prodi' => "Keperawatan",
                'image' => null,
                'departemen' => 3,
                'position' => 3,
            ],
//            Departemen 4
            [
                'name' => "Ketua LKH",
                'nim' => "E0123456",
                'prodi' => "Teknik Informatika",
                'image' => null,
                'departemen' => 4,
                'position' => 0,
            ],
            [
                'name' => "Sekretaris LKH",
                'nim' => "E0123457",
                'prodi' => "Akuntansi",
                'image' => null,
                'departemen' => 4,
                'position' => 1,
            ],
            [
                'name' => "Anggota 1",
                'nim' => "E0123458",
                'prodi' => "Farmasi",
                'image' => null,
                'departemen' => 4,
                'position' => 3,
            ],
            [
                'name' => "Anggota 2",
                'nim' => "E0123459",
                'prodi' => "Kebidanan",
                'image' => null,
                'departemen' => 4,
                'position' => 3,
            ],
            [
                'name' => "Anggota 3",
                'nim' => "E0123460",
                'prodi' => "Kesehatan Masyarakat",
                'image' => null,
                'departemen' => 4,
                'position' => 3,
            ],
//            Departemen 5
            [
                'name' => "Ketua Humas",
                'nim' => "F0123456",
                'prodi' => "Teknik Informatika",
                'image' => null,
                'departemen' => 5,
                'position' => 0,
            ],
            [
                'name' => "Sekretaris Humas",
                'nim' => "F0123457",
                'prodi' => "Sistem Informasi",
                'image' => null,
                'departemen' => 5,
                'position' => 1,
            ],
            [
                'name' => "Anggota 1",
                'nim' => "F0123458",
                'prodi' => "Teknologi Informasi",
                'image' => null,
                'departemen' => 5,
                'position' => 3,
            ],
            [
                'name' => "Anggota 2",
                'nim' => "F0123459",
                'prodi' => "Teknik Sipil",
                'image' => null,
                'departemen' => 5,
                'position' => 3,
            ],
            [
                'name' => "Anggota 3",
                'nim' => "F0123460",
                'prodi' => "Teknik Informatika",
                'image' => null,
                'departemen' => 5,
                'position' => 3,
            ],
        ]);
    }
}
