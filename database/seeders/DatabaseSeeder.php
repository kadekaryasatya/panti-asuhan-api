<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Obat;
use App\Models\ObatPenyakit;
use App\Models\Penyakit;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('obats')->insert([
            'nama' => 'Combantrin 250 mg 2 Tablet',
            'kandungan' => 'Setiap tablet Combantrin 250 mg mengandung Pirantel Pamoat setara dengan pirantel base 250 mg.',
            'deskripsi' => 'COMBANTRIN 250 MG TABLET merupakan obat cacing yang bekerja untuk mengatasi cacing kremi (Enterobius vermicularis), cacing gelang (Ascaris lumbricoides), cacing tambang (Ancylostoma duodenale), Cacing tambang (Necator americanus), cacing Trichostrongyfus colubriformis dan Trichostrongylus orientalls. Obat ini mengandung zat aktif Pirantel Pamoat yang bekerja  Anak usia 2-6 tahun: 0.5-1 tablet, diberikan sekali. Anak usia 6-12 tahun: 1-1.5 tablet, diberikan sekali. Di atas usia 12 tahun: 1.5-2 tablet, diberikan sekali.dengan melumpuhkan cacing dan mengeluarkannya dari dalam tubuh melalui tinja, biasanya tanpa memerlukan pencahar.',
        ]);

        DB::table('obats')->insert([
            'nama' => 'Diapet 3 Strip',
            'kandungan' => 'Psidium guajava leaf extract 240 mg (daun jambu biji), curcumae domestica rhizoma 204 mg (kunyit), terminalia cherbulae 64 mg (buah mojokeling), punicae granati pericarpium 72 mr (kulit buah delima)',
            'deskripsi' => 'DIAPET merupakan obat herbal yang mengandung ekstrak daun jambu biji, kunyit, buah mojokeling dan kulit buah delima yang dikemas dalam bentuk sediaan kapsul. Diapet digunakan untuk membantu mengurangi frekuensi buang air besar, memadatkan kembali feses yang cair, dan meredakan rasa mulas akibat diare. Dewasa: Sehari 2 kali 2 kapsul Untuk diare akut: 2 kali 2 kapsul, dengan selang waktu 1 jam',
            ]);

        DB::table('obats')->insert([
            'nama' => 'Konvermex Suspensi 125 mg',
            'kandungan' => 'Pyrantel base 125 mg',
            'deskripsi' => 'KONVERMEX SUSPENSI 125 MG merupakan obat yang digunakan untuk mengatasi infeksi cacing. Anak < 5 th : 1 sendok takar / hari; Anak 5-9 th : 2 sendok / hari; Anak 10-15 th : 3 sendok takar / hari; usia 15 th ke atas : 4 sendok takar / hari',
        ]);

        DB::table('obats')->insert([
            'nama' => 'Sanadryl DMP Sirup 60 ml',
            'kandungan' => 'Per 5 ml: Dextromethorphan HBr 10 mg, Diphenhydramine HCl 12.5 mg, Ammonium Cl 100 mg, Na citrate 50 mg, Menthol 1 mg.',
            'deskripsi' => 'SANADRYL DMP SIRUP 60 ML mengandung zat aktif Dextromethorphan HBr, Difenhidramin HCl, Ammonium Klorida, Natrium Sitrat dan menthol. Obat ini digunakan untuk mengatasi batuk tidak berdahak yang disebabkan karena alergi. Dalam penggunaan obat ini HARUS SESUAI DENGAN PETUNJUK DOKTER. Dewasa : 3 kali sehari, 2 sendok takar (@10 ml). Anak-anak (6-12 tahun) : 3 kali sehari, 1 sendok takar (@ 5 ml).',
        ]);

        DB::table('penyakits')->insert([
            'nama' => 'Cacingan',
            'gejala' => 'feses mengandung cacaing, kulit kemerahan, gatal pada area pantat, sering kelelahan, nafsu makan berkurang',
            'deskripsi' => 'Cacingan adalah sebutan untuk infeksi cacing yang masuk ke dalam tubuh manusia. Parasit tersebut menginfeksi bagian usus sehingga menimbulkan sederetan gejala. Kondisi ini bisa terjadi pada siapa saja, mulai dari anak-anak hingga dewasa. Namun, anak-anak biasanya lebih sering mengalaminya karena sistem kekebalan tubuh mereka yang masih belum sempurna.',
        ]);

        DB::table('penyakits')->insert([
            'nama' => 'Diare',
            'gejala' => 'perut kembung, tidak mampu menahan BAB, perut mulas, mual, demam',
            'deskripsi' => 'Diare adalah keluhan buang air besar encer atau berair yang terjadi lebih dari 3 kali dalam sehari. Diare umumnya disebabkan oleh konsumsi makanan atau minuman yang terkontaminasi virus, bakteri, atau parasit.',
        ]);

        DB::table('penyakits')->insert([
            'nama' => 'Influenza (Flu)',
            'gejala' => 'demam, pilek, hidung tersumbat, sakit kepala',
            'deskripsi' => 'Flu atau influenza merupakan penyakit yang disebabkan oleh infeksi virus yang dapat menyerang hidung, tenggorokan, dan paru-paru. Kondisi ini sangat umum terjadi di musim pancaroba. Penyakit ini sangat mudah menular ke orang lain, terutama ketika 3–4 hari pertama setelah pengidapnya terinfeksi virus flu',
        ]);

        DB::table('obat_penyakits')->insert([
            'penyakit_id' => '1', 'obat_id' => '1'
        ]);

        DB::table('obat_penyakits')->insert([
            'penyakit_id' => '1', 'obat_id' => '2'
        ]);

        DB::table('obat_penyakits')->insert([
            'penyakit_id' => '2', 'obat_id' => '3'
        ]);

        DB::table('obat_penyakits')->insert([
            'penyakit_id' => '3', 'obat_id' => '4'
        ]);
    }
}
