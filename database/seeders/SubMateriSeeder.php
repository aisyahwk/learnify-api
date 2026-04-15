<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubMateriSeeder extends Seeder
{
    public function run(): void
    {


        DB::table('sub_materis')->insert([

            // MATERI 1 - HTML
            [
                'materi_id' => 1,
                'judul' => 'Apa itu HTML?',
                'ringkasan' => 'HTML adalah bahasa dasar untuk membuat struktur halaman web.'
            ],
            [
                'materi_id' => 1,
                'judul' => 'Struktur Dasar HTML',
                'ringkasan' => 'HTML memiliki struktur seperti html, head, dan body.'
            ],

            // MATERI 2 - CSS
            [
                'materi_id' => 2,
                'judul' => 'Apa itu CSS?',
                'ringkasan' => 'CSS digunakan untuk mengatur tampilan dan desain website.'
            ],
            [
                'materi_id' => 2,
                'judul' => 'Selector CSS',
                'ringkasan' => 'Selector digunakan untuk memilih elemen HTML yang akan di-style.'
            ],

            // MATERI 3 - JAVASCRIPT
            [
                'materi_id' => 3,
                'judul' => 'Pengenalan JavaScript',
                'ringkasan' => 'JavaScript membuat website menjadi interaktif.'
            ],
            [
                'materi_id' => 3,
                'judul' => 'Variabel dan Tipe Data',
                'ringkasan' => 'JavaScript punya variabel seperti let, const, dan tipe data.'
            ],

            // MATERI 4 - REACT
            [
                'materi_id' => 4,
                'judul' => 'Apa itu React?',
                'ringkasan' => 'React adalah library JavaScript untuk membuat UI.'
            ],
            [
                'materi_id' => 4,
                'judul' => 'Component di React',
                'ringkasan' => 'React menggunakan component untuk membangun UI modular.'
            ],

            // MATERI 5 - LARAVEL
            [
                'materi_id' => 5,
                'judul' => 'Apa itu Laravel?',
                'ringkasan' => 'Laravel adalah framework PHP untuk backend.'
            ],
            [
                'materi_id' => 5,
                'judul' => 'Routing di Laravel',
                'ringkasan' => 'Routing digunakan untuk mengatur URL dan controller.'
            ],

        ]);
    }
}
