<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('categories')->insert([
            'name' => 'mahasiswa',
            'slug' => 'mahasiswa',
            'created_at' => Carbon::now()
        ]);

        DB::table('categories')->insert([
            'name' => 'nasional',
            'slug' => 'nasional',
            'created_at' => Carbon::now()
        ]);

        DB::table('authors')->insert([
            'name' => 'Admin informa abdul',
            'email' => 'abdul@informa.com',
            'password' => '1223332'
        ]);


        

        // Addin more data mockup in here
        DB::table('news')->insert([
            'category_id' => 1,
            'author_id' => 1,
            'title' => 'Alasan Ganjar Safari Politik Di Bogor Jumlah Pemilihnya Minta Ampun',
            'excerpt' => Str::excerpt('Alasan Ganjar Safari Politik Di Bogor'),
            'body' => 'Jakarta, CNN Indonesia -- Bakal calon presiden Ganjar Pranowo mengatakan Bogor, Jawa Barat, merupakan daerah dengan jumlah pemilih banyak. Hal itu membuat Bogor menjadi menarik bagi para politisi.

            Pernyataan itu disampaikan Ganjar kala ditanya alasannya memilih Bogor sebagai salah satu daerah untuk bersafari politik.
            
            "Bogor pasti menjadi tempat yang sangat menarik untuk semua politisi. Karena ini satu titik tetapi jumlah pemilihnya lebihnya minta ampun. Luar biasa," ujar Ganjar saat ditemui di DPC PDIP Kabupaten Bogor, Sabtu (22/7).
            
            Meski sudah beberapa kali mendapat undangan untuk menghadiri acara di Bogor, Ganjar mengaku baru bisa berkunjung kali ini. Ia pun meminta maaf karena tak bisa hadir di undangan-undangan sebelumnya.
            
            "Maka waktunya tinggal hari ini, maka saya buat road show sekalian untuk bertemu dengan kelompok-kelompok masyarakat, terus kemudian nanti konsolidasi partai pendukung, ngobrol dengan anak-anak muda, tadi dengan musisi," katanya.
            
            Pada kesempatan itu Ganjar melakukan serangkaian kegiatan. Mulai dari lari pagi bersama relawan, blusukan ke Pasar Citeureup, serta berdialog bersama konten kreator, musisi, dan sejumlah generasi Z.
            
            Ganjar merupakan bakal capres 2024 yang diusung 2024. Ia juga turut didukung oleh PPP, Hanura, Perindo dan PSI.(fby/end)',

            'slug' => Str::excerpt('Alasan Ganjar Safari Politik Di Bogor'),
            'thumbnail' => 'image.png',
            'photo_description' => 'Bakal calon presiden Ganjar Pranowo mengatakan Bogor, Jawa Barat, merupakan daerah yang menarik bagi para politisi. (dok. DPP PDIP)',


        ]);
    }
}
