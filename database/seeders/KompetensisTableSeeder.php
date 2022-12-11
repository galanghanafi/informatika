<?php

namespace Database\Seeders;

use App\Models\Kompetensi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KompetensisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kompetensi = [
            'bertakwa kepada Tuhan Yang Maha Esa dan mampu menunjukkan sikap religius menjunjung tinggi nilai kemanusiaan dalam menjalankan tugas berdasarkan agama, moral dan etika;',
            'dapat berperan sebagai warga negara yang bangga dan cinta tanah air, memiliki nasionalisme serta rasa tanggungjawab pada negara dan bangsa;',
            'dapat berkontribusi dalam peningkatan mutu kehidupan bermasyarakat, berbangsa, dan bernegara berdasarkan Pancasila;',
            'dapat bekerja sama dan memiliki kepekaan sosial serta kepedulian terhadap masyarakat dan lingkungan;',
            'dapat menghargai keanekaragaman budaya, pandangan, agama, dan kepercayaan, serta pendapat atau temuan orisinal orang lain;',
            'taat hukum dan disiplin dalam kehidupan bermasyarakat dan bernegara;',
            'menunjukkan sikap bertanggungjawab atas pekerjaan di bidang keahliannya secara mandiri;',
            'menginternalisasi nilai, norma, dan etika akademik;',
            'menginternalisasi semangat kemandirian, kejuangan, dan kewirausahaan.',
        ];

        foreach ($kompetensi as $key => $value) {
            # code...
            Kompetensi::insert(['id' => $key + 1, 'Kompetensi' => $value]);
        }
    }
}
