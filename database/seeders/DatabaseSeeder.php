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


        DB::table('authors')->insert([
            'name' => 'Admin informa rojalih',
            'email' => 'rojalih@informa.com',
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
            'body' => 'Bakal calon presiden Ganjar Pranowo mengatakan Bogor, Jawa Barat, merupakan daerah dengan jumlah pemilih banyak. Hal itu membuat Bogor menjadi menarik bagi para politisi.

            Pernyataan itu disampaikan Ganjar kala ditanya alasannya memilih Bogor sebagai salah satu daerah untuk bersafari politik.
            
            "Bogor pasti menjadi tempat yang sangat menarik untuk semua politisi. Karena ini satu titik tetapi jumlah pemilihnya lebihnya minta ampun. Luar biasa," ujar Ganjar saat ditemui di DPC PDIP Kabupaten Bogor, Sabtu (22/7).
            
            Meski sudah beberapa kali mendapat undangan untuk menghadiri acara di Bogor, Ganjar mengaku baru bisa berkunjung kali ini. Ia pun meminta maaf karena tak bisa hadir di undangan-undangan sebelumnya.
            
            "Maka waktunya tinggal hari ini, maka saya buat road show sekalian untuk bertemu dengan kelompok-kelompok masyarakat, terus kemudian nanti konsolidasi partai pendukung, ngobrol dengan anak-anak muda, tadi dengan musisi," katanya.
            
            Pada kesempatan itu Ganjar melakukan serangkaian kegiatan. Mulai dari lari pagi bersama relawan, blusukan ke Pasar Citeureup, serta berdialog bersama konten kreator, musisi, dan sejumlah generasi Z.
            
            Ganjar merupakan bakal capres 2024 yang diusung 2024. Ia juga turut didukung oleh PPP, Hanura, Perindo dan PSI.(fby/end)',

            'slug' => Str::excerpt('Alasan Ganjar Safari Politik Di Bogor'),
            'thumbnail' => 'ganjar-pranowo-3_169.png',
            'photo_description' => 'Bakal calon presiden Ganjar Pranowo mengatakan Bogor, Jawa Barat, merupakan daerah yang menarik bagi para politisi. (dok. DPP PDIP)',
            'published_at' => now(), // Tambahkan ini untuk mengisi published_at
            'created_at' => now(), // Tambahkan ini untuk mengisi created_at
            'updated_at' => now(), // Tambahkan ini untuk mengisi updated_at

        ]);

        DB::table('news')->insert([
            'category_id' => 2,
            'author_id' => 1,
            'title' => 'Alasan Ganjar Safari Politik Di Bogor Jumlah tapi nasional',
            'slug' => Str::excerpt('Alasan Ganjar Safari Politik Di Bogor tapi nasional'),
            'excerpt' => Str::excerpt('Alasan Ganjar Safari Politik Di Bogor tapi nasional'),
            'body' => 'Bakal calon presiden Ganjar Pranowo mengatakan Bogor, Jawa Barat, merupakan daerah dengan jumlah pemilih banyak. Hal itu membuat Bogor menjadi menarik bagi para politisi.

            Pernyataan itu disampaikan Ganjar kala ditanya alasannya memilih Bogor sebagai salah satu daerah untuk bersafari politik.
            
            "Bogor pasti menjadi tempat yang sangat menarik untuk semua politisi. Karena ini satu titik tetapi jumlah pemilihnya lebihnya minta ampun. Luar biasa," ujar Ganjar saat ditemui di DPC PDIP Kabupaten Bogor, Sabtu (22/7).
            
            Meski sudah beberapa kali mendapat undangan untuk menghadiri acara di Bogor, Ganjar mengaku baru bisa berkunjung kali ini. Ia pun meminta maaf karena tak bisa hadir di undangan-undangan sebelumnya.
            
            "Maka waktunya tinggal hari ini, maka saya buat road show sekalian untuk bertemu dengan kelompok-kelompok masyarakat, terus kemudian nanti konsolidasi partai pendukung, ngobrol dengan anak-anak muda, tadi dengan musisi," katanya.
            
            Pada kesempatan itu Ganjar melakukan serangkaian kegiatan. Mulai dari lari pagi bersama relawan, blusukan ke Pasar Citeureup, serta berdialog bersama konten kreator, musisi, dan sejumlah generasi Z.
            
            Ganjar merupakan bakal capres 2024 yang diusung 2024. Ia juga turut didukung oleh PPP, Hanura, Perindo dan PSI.(fby/end)',

            'thumbnail' => 'ganjar-pranowo-3_169.png',
            'photo_description' => 'Bakal calon presiden Ganjar Pranowo mengatakan Bogor, Jawa Barat, merupakan daerah yang menarik bagi para politisi. (dok. DPP PDIP)',
            'created_at' => now(), // Tambahkan ini untuk mengisi created_at
            'updated_at' => now(), // Tambahkan ini untuk mengisi updated_at
            'published_at' => now(), // Tambahkan ini untuk mengisi published_at

        ]);

        DB::table('news')->insert([
            'category_id' => 2,
            'author_id' => 2,
            'title' => 'Polisi Temukan 2 Botol Anggur di Lokasi Tewasnya Bripda Ignatius',
            'slug' => Str::excerpt('Polisi Temukan 2 Botol Anggur di Lokasi Tewasnya Bripda Ignatius'),
            'excerpt' => Str::excerpt('Polisi Temukan 2 Botol Anggur di Lokasi Tewasnya Bripda Ignatius'),
            'body' => 'Polisi menyebut menemukan dua botol alkohol jenis anggur di tempat sampah Rusun Polri Cikeas, Bogor, Jawa Barat, yang menjadi lokasi tewasnya Bripda Ignatius Dwi Frisco Sirage. Ia tewas tertembak oleh rekannya, Bripda IMS.
            "Botol-botol ditemukan di tempat sampah di belakang rusun. Ada dua botol anggur merek Kawa-Kawa," ujar Direktur Reserse Kriminal Umum Polda Jawa Barat Kombes Surawan saat dikonfirmasi, Rabu (2/8).
            Surawan mengatakan temuan botol tersebut juga telah dikonfirmasi penyidik kepada Bripda IMS dan saksi yang berada di lokasi. Ia menyebut pelaku sudah mengakui bahwa botol alkohol jenis anggur tersebut merupakan sisa yang sudah dibuang seusai dikonsumsi.

            "Sudah diakui pelaku," jelasnya.
            
            Bripda Ignatius tewas tertembak di Rusun Polri Cikeas, Minggu (23/7) pukul 01.40 WIB. Dua pelaku penembakan yakni Bripda IMS dan Bripka IG telah ditangkap dan ditahan.
            
            Karo Penmas Polri Brigjen Ahmad Ramadhan mengatakan Bripda Ignatius tewas usai terkena peluru senjata api rakitan non organik alias ilegal milik tersangka Bripka IG yang saat itu dipegang Bripda IMS.
            
            Kedua tersangka akan dikonfrontir untuk mendalami asal usul senjata api ilegal yang menewaskan Bripda Ignatius.
            
            Atas perbuatannya, Bripda IMS dijerat dengan Pasal 338 KUHP dan atau Pasal 359 KUHP dan atau Undang-undang Darurat RI Nomor 12 Tahun 1951.

            Sementara Bripka IG dikenakan Pasal 338 KUHP Juncto Pasal 56 dan atau Pasal 359 KUHP Juncto Pasal 56 dan atau Undang-undang Darurat RI Nomor 12 Tahun 1951.',

            'thumbnail' => 'ilustrasi-penembakan-3_169.jpeg',
            'photo_description' => 'Ilustrasi. Dua botol alkohol jenis anggur ditemukan di tempat sampah lokasi tewasnya Bripda Ignatius. Pelaku mengakui membuang botol usai mengonsumsinya. (iStockphoto/Maxiphoto)',
            'updated_at' => now(), // Tambahkan ini untuk mengisi updated_at
            'published_at' => now(), // Tambahkan ini untuk mengisi published_at
            'created_at' => now(), // Tambahkan ini untuk mengisi created_at

        ]);
        DB::table('news')->insert([
            'category_id' => 3,
            'author_id' => 2,
            'title' => 'Polisi Temukan 2 Botol Anggur di Lokasi Tewasnya Bripda Ignatius',
            'slug' => Str::excerpt('Polisi Temukan 2 Botol Anggur di Lokasi Tewasnya Bripda Ignatius'),
            'excerpt' => Str::excerpt('Polisi Temukan 2 Botol Anggur di Lokasi Tewasnya Bripda Ignatius'),
            'body' => 'Polisi menyebut menemukan dua botol alkohol jenis anggur di tempat sampah Rusun Polri Cikeas, Bogor, Jawa Barat, yang menjadi lokasi tewasnya Bripda Ignatius Dwi Frisco Sirage. Ia tewas tertembak oleh rekannya, Bripda IMS.
            "Botol-botol ditemukan di tempat sampah di belakang rusun. Ada dua botol anggur merek Kawa-Kawa," ujar Direktur Reserse Kriminal Umum Polda Jawa Barat Kombes Surawan saat dikonfirmasi, Rabu (2/8).
            Surawan mengatakan temuan botol tersebut juga telah dikonfirmasi penyidik kepada Bripda IMS dan saksi yang berada di lokasi. Ia menyebut pelaku sudah mengakui bahwa botol alkohol jenis anggur tersebut merupakan sisa yang sudah dibuang seusai dikonsumsi.

            "Sudah diakui pelaku," jelasnya.
            
            Bripda Ignatius tewas tertembak di Rusun Polri Cikeas, Minggu (23/7) pukul 01.40 WIB. Dua pelaku penembakan yakni Bripda IMS dan Bripka IG telah ditangkap dan ditahan.
            
            Karo Penmas Polri Brigjen Ahmad Ramadhan mengatakan Bripda Ignatius tewas usai terkena peluru senjata api rakitan non organik alias ilegal milik tersangka Bripka IG yang saat itu dipegang Bripda IMS.
            
            Kedua tersangka akan dikonfrontir untuk mendalami asal usul senjata api ilegal yang menewaskan Bripda Ignatius.
            
            Atas perbuatannya, Bripda IMS dijerat dengan Pasal 338 KUHP dan atau Pasal 359 KUHP dan atau Undang-undang Darurat RI Nomor 12 Tahun 1951.

            Sementara Bripka IG dikenakan Pasal 338 KUHP Juncto Pasal 56 dan atau Pasal 359 KUHP Juncto Pasal 56 dan atau Undang-undang Darurat RI Nomor 12 Tahun 1951.',

            'thumbnail' => 'ilustrasi-penembakan-3_169.jpeg',
            'photo_description' => 'Ilustrasi. Dua botol alkohol jenis anggur ditemukan di tempat sampah lokasi tewasnya Bripda Ignatius. Pelaku mengakui membuang botol usai mengonsumsinya. (iStockphoto/Maxiphoto)',
            'updated_at' => now(), // Tambahkan ini untuk mengisi updated_at
            'published_at' => now(), // Tambahkan ini untuk mengisi published_at
            'created_at' => now(), // Tambahkan ini untuk mengisi created_at

        ]);
    }
}
