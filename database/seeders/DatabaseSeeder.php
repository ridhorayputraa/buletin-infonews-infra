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

        // Table Category

        DB::table('categories')->insert([
            'name' => 'Mahasiswa',
            'slug' => 'mahasiswa',
            'created_at' => Carbon::now()
        ]);

        DB::table('categories')->insert([
            'name' => 'Nasional',
            'slug' => 'nasional',
            'created_at' => Carbon::now()
        ]);

        DB::table('categories')->insert([
            'name' => 'Politik',
            'slug' => 'politik',
            'created_at' => Carbon::now()
        ]);

        DB::table('categories')->insert([
            'name' => 'Opini',
            'slug' => 'opini',
            'created_at' => Carbon::now()
        ]);

        DB::table('categories')->insert([
            'name' => 'Pendidikan',
            'slug' => 'pendidikan',
            'created_at' => Carbon::now()
        ]);

        DB::table('categories')->insert([
            'name' => 'Sosial',
            'slug' => 'sosial',
            'created_at' => Carbon::now()
        ]);

        DB::table('categories')->insert([
            'name' => 'Teknologi',
            'slug' => 'teknologi',
            'created_at' => Carbon::now()
        ]);



        // table Authors

        DB::table('authors')->insert([
            'name' => 'Admin informa abdul',
            'email' => 'abdul@informa.com',
            'password' => '1223332'
        ]);


        // Seeder User
        DB::table('users')->insert([
            'name' => 'Ridho ganteng',
            'email' => 'ridhorayputra033@gmail.com',
            'password' => '123456'
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
            'thumbnail' => 'ganjar-pranowo-3_169.png',
            'photo_description' => 'Bakal calon presiden Ganjar Pranowo mengatakan Bogor, Jawa Barat, merupakan daerah yang menarik bagi para politisi. (dok. DPP PDIP)',


        ]);

        DB::table('news')->insert([
            'category_id' => 2,
            'author_id' => 1,
            'title' => 'Alasan Ganjar Safari Politik Di Bogor Jumlah tapi nasional',
            'slug' => Str::excerpt('Alasan Ganjar Safari Politik Di Bogor tapi nasional'),
            'excerpt' => Str::excerpt('Alasan Ganjar Safari Politik Di Bogor tapi nasional'),
            'body' => 'Jakarta, CNN Indonesia -- Bakal calon presiden Ganjar Pranowo mengatakan Bogor, Jawa Barat, merupakan daerah dengan jumlah pemilih banyak. Hal itu membuat Bogor menjadi menarik bagi para politisi.

            Pernyataan itu disampaikan Ganjar kala ditanya alasannya memilih Bogor sebagai salah satu daerah untuk bersafari politik.
            
            "Bogor pasti menjadi tempat yang sangat menarik untuk semua politisi. Karena ini satu titik tetapi jumlah pemilihnya lebihnya minta ampun. Luar biasa," ujar Ganjar saat ditemui di DPC PDIP Kabupaten Bogor, Sabtu (22/7).
            
            Meski sudah beberapa kali mendapat undangan untuk menghadiri acara di Bogor, Ganjar mengaku baru bisa berkunjung kali ini. Ia pun meminta maaf karena tak bisa hadir di undangan-undangan sebelumnya.
            
            "Maka waktunya tinggal hari ini, maka saya buat road show sekalian untuk bertemu dengan kelompok-kelompok masyarakat, terus kemudian nanti konsolidasi partai pendukung, ngobrol dengan anak-anak muda, tadi dengan musisi," katanya.
            
            Pada kesempatan itu Ganjar melakukan serangkaian kegiatan. Mulai dari lari pagi bersama relawan, blusukan ke Pasar Citeureup, serta berdialog bersama konten kreator, musisi, dan sejumlah generasi Z.
            
            Ganjar merupakan bakal capres 2024 yang diusung 2024. Ia juga turut didukung oleh PPP, Hanura, Perindo dan PSI.(fby/end)',

            'thumbnail' => 'ganjar-pranowo-3_169.png',
            'photo_description' => 'Bakal calon presiden Ganjar Pranowo mengatakan Bogor, Jawa Barat, merupakan daerah yang menarik bagi para politisi. (dok. DPP PDIP)',


        ]);
    }
}
