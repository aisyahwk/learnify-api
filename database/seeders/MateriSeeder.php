<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MateriSeeder extends Seeder
{
    public function run(): void
    {
        // 🔥 MATIIN FK
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // 🔥 HAPUS DATA
        DB::table('sub_materis')->truncate();
        DB::table('materis')->truncate();

        // 🔥 NYALAIN LAGI
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // 🔥 INSERT DATA
        DB::table('materis')->insert([
            [
                'judul' => 'Pengenalan HTML',
                'deskripsi' => 'Belajar dasar HTML'
            ],
            [
                'judul' => 'CSS Dasar',
                'deskripsi' => 'Belajar styling dengan CSS'
            ],
            [
                'judul' => 'JavaScript',
                'deskripsi' => 'Dasar JS'
            ],
            [
                'judul' => 'React JS',
                'deskripsi' => 'Frontend React'
            ],
            [
                'judul' => 'Laravel',
                'deskripsi' => 'Backend Laravel'
            ],
        ]);
    }
}
