<?php

namespace Database\Seeders;

use App\Models\Publikasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'dosen_id' => 1,
                'judul' => '1judul 1',
                'jenis' => 'penelitian',
            ],
            [
                'dosen_id' => 2,
                'judul' => '2 judul 1',
                'jenis' => 'penelitian',
            ],
        ];
        foreach ($data as $value) {
            Publikasi::create($value);
        }
    }
}
