<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MateriContentSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('materi_contents')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('materi_contents')->insert([

            // =====================
            // HTML
            // =====================
            [
                'sub_materi_id' => 1,
                'isi' => 'HTML atau HyperText Markup Language adalah bahasa standar yang digunakan untuk membuat struktur halaman web. HTML bekerja dengan cara mendefinisikan elemen-elemen seperti teks, gambar, link, tabel, dan form menggunakan tag khusus yang kemudian dirender oleh browser menjadi tampilan visual. Setiap tag HTML memiliki fungsi dan makna tersendiri, misalnya tag h1 untuk judul utama, tag p untuk paragraf, dan tag a untuk membuat hyperlink ke halaman lain.',
                'contoh_code' => "<h1>Hello World</h1>\n<p>Ini adalah paragraf pertama saya.</p>\n<a href=\"https://google.com\">Kunjungi Google</a>"
            ],
            [
                'sub_materi_id' => 2,
                'isi' => 'Struktur dasar HTML terdiri dari tiga bagian utama yaitu html, head, dan body. Bagian html adalah wrapper utama seluruh dokumen. Bagian head berisi metadata seperti judul halaman, charset, dan link ke stylesheet yang tidak ditampilkan langsung ke pengguna. Sedangkan bagian body berisi semua konten yang akan ditampilkan di browser seperti teks, gambar, dan tombol. Memahami struktur dasar ini sangat penting sebelum belajar lebih lanjut tentang web development.',
                'contoh_code' => "<!DOCTYPE html>\n<html lang=\"id\">\n<head>\n  <meta charset=\"UTF-8\">\n  <title>Halaman Pertama</title>\n</head>\n<body>\n  <h1>Selamat Datang</h1>\n  <p>Ini adalah halaman web pertama saya.</p>\n</body>\n</html>"
            ],

            // =====================
            // CSS
            // =====================
            [
                'sub_materi_id' => 3,
                'isi' => 'CSS atau Cascading Style Sheets adalah bahasa yang digunakan untuk mengatur tampilan dan desain halaman web. Dengan CSS, kamu bisa mengubah warna teks, ukuran font, jarak antar elemen, warna latar belakang, hingga mengatur layout halaman menjadi lebih menarik. CSS bekerja dengan cara memilih elemen HTML tertentu lalu memberikan aturan style padanya. Tanpa CSS, halaman web hanya akan tampil polos tanpa ada keindahan visual sama sekali.',
                'contoh_code' => "body {\n  background-color: #f0f4f8;\n  color: #333;\n  font-family: Arial, sans-serif;\n}\n\nh1 {\n  color: #1057C1;\n  text-align: center;\n}"
            ],
            [
                'sub_materi_id' => 4,
                'isi' => 'Selector CSS digunakan untuk memilih elemen HTML mana yang ingin diberi style. Ada beberapa jenis selector yaitu tag selector yang memilih semua elemen dengan tag tertentu, class selector yang memilih elemen berdasarkan atribut class menggunakan tanda titik, dan id selector yang memilih elemen unik menggunakan tanda pagar. Memahami perbedaan ketiga selector ini sangat penting agar styling yang kamu buat tepat sasaran dan tidak mengganggu elemen lain.',
                'contoh_code' => "/* Tag selector */\np { color: red; }\n\n/* Class selector */\n.tombol { background: blue; color: white; padding: 10px; }\n\n/* ID selector */\n#judul { font-size: 32px; font-weight: bold; }"
            ],

            // =====================
            // JAVASCRIPT
            // =====================
            [
                'sub_materi_id' => 5,
                'isi' => 'JavaScript adalah bahasa pemrograman yang berjalan di browser dan membuat website menjadi interaktif dan dinamis. Dengan JavaScript, kamu bisa menangani berbagai interaksi pengguna seperti klik tombol, mengisi form, menampilkan notifikasi, hingga mengambil data dari server tanpa perlu reload halaman. JavaScript adalah salah satu dari tiga teknologi utama web bersama HTML dan CSS, dan saat ini juga bisa digunakan di sisi server menggunakan Node.js.',
                'contoh_code' => "// Menampilkan pesan\nalert('Halo, selamat datang!');\n\n// Mengubah teks elemen\ndocument.getElementById('judul').innerText = 'Teks Baru';\n\n// Event listener saat tombol diklik\ndocument.getElementById('btn').addEventListener('click', function() {\n  console.log('Tombol diklik!');\n});"
            ],
            [
                'sub_materi_id' => 6,
                'isi' => 'Variabel adalah tempat untuk menyimpan data sementara di dalam program. Di JavaScript modern ada tiga cara mendeklarasikan variabel yaitu var, let, dan const. Var adalah cara lama yang memiliki scope function, let adalah cara modern dengan scope block yang nilainya bisa diubah, dan const juga block scope tetapi nilainya tidak bisa diubah setelah dideklarasikan. Sebaiknya gunakan const untuk nilai yang tetap dan let untuk nilai yang akan berubah.',
                'contoh_code' => "const nama = 'Dinda'; // tidak bisa diubah\nlet umur = 17; // bisa diubah\nvar kota = 'Bandung'; // cara lama\n\numur = 18; // valid karena pakai let\nconsole.log(nama + ' berumur ' + umur + ' tahun');"
            ],

            // =====================
            // REACT
            // =====================
            [
                'sub_materi_id' => 7,
                'isi' => 'React adalah library JavaScript yang dikembangkan oleh Meta untuk membangun tampilan user interface yang cepat dan interaktif. React menggunakan pendekatan component-based dimana setiap bagian tampilan dibuat sebagai komponen tersendiri yang bisa digunakan ulang di tempat lain. React juga menggunakan Virtual DOM yang membuat perubahan tampilan menjadi lebih efisien karena hanya bagian yang berubah saja yang diperbarui tanpa harus merender ulang seluruh halaman.',
                'contoh_code' => "import React from 'react';\n\nfunction App() {\n  return (\n    <div>\n      <h1>Hello React!</h1>\n      <p>Selamat belajar React.</p>\n    </div>\n  );\n}\n\nexport default App;"
            ],
            [
                'sub_materi_id' => 8,
                'isi' => 'Component adalah blok bangunan utama dalam React. Setiap component adalah fungsi JavaScript yang mengembalikan tampilan dalam bentuk JSX. Component bisa menerima data dari luar melalui props dan bisa memiliki state sendiri untuk menyimpan data yang bisa berubah. Dengan memecah tampilan menjadi banyak component kecil, kode menjadi lebih mudah dibaca, dikelola, dan digunakan kembali di berbagai bagian aplikasi.',
                'contoh_code' => "// Component dengan props\nfunction Greeting({ nama }) {\n  return <h2>Halo, {nama}!</h2>;\n}\n\n// Penggunaan component\nfunction App() {\n  return (\n    <div>\n      <Greeting nama=\"Dinda\" />\n      <Greeting nama=\"Aisyah\" />\n    </div>\n  );\n}"
            ],

            // =====================
            // LARAVEL
            // =====================
            [
                'sub_materi_id' => 9,
                'isi' => 'Laravel adalah framework PHP yang sangat populer untuk membangun aplikasi web dan API. Laravel menyediakan banyak fitur bawaan seperti routing yang mudah, ORM Eloquent untuk berinteraksi dengan database, sistem autentikasi, dan banyak lagi. Dengan Laravel, developer bisa fokus pada logika bisnis aplikasi tanpa harus menulis kode boilerplate dari awal. Laravel mengikuti pola arsitektur MVC yaitu Model, View, dan Controller.',
                'contoh_code' => "// routes/api.php\nRoute::get('/users', [UserController::class, 'index']);\nRoute::post('/users', [UserController::class, 'store']);\n\n// UserController.php\npublic function index() {\n  return response()->json(User::all());\n}"
            ],
            [
                'sub_materi_id' => 10,
                'isi' => 'Routing di Laravel adalah sistem yang menghubungkan URL yang diminta oleh pengguna dengan fungsi atau controller yang akan memproses request tersebut. Laravel menyediakan berbagai method routing seperti GET untuk mengambil data, POST untuk mengirim data baru, PUT untuk mengupdate data, dan DELETE untuk menghapus data. Dengan routing yang terstruktur, aplikasi Laravel menjadi lebih mudah dipahami dan dikelola oleh tim developer.',
                'contoh_code' => "// Routing dasar\nRoute::get('/home', function () {\n  return 'Ini halaman home';\n});\n\n// Routing ke controller\nRoute::get('/users', [UserController::class, 'index']);\nRoute::post('/users', [UserController::class, 'store']);\nRoute::put('/users/{id}', [UserController::class, 'update']);\nRoute::delete('/users/{id}', [UserController::class, 'destroy']);"
            ],

        ]);
    }
}
