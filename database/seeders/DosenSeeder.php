<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dosen;

class DosenSeeder extends Seeder
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
                'nama' => 'Sri Hasta Mulyani, S.Kom., M.Kom',
                'Fakultas' => 'Sains dan Teknologi',
                // 'jabatan_fungsional' => '',
                's1' => 'S1 Teknik Informatika, Universitas Respati Indonesia Jakarta',
                's2' => 'S2 Magister Teknik Informatika, STTI Benarif Jakarta',
                // 's3' => '',
            ],
            [
                'nama' => 'I Wayan Ordiyasa, S.Kom., M.T.',
                'Fakultas' => 'Sains dan Teknologi',
                // 'jabatan_fungsional' => '',
                's1' => 'S1 Teknik Informatika Universitas Kristen Duta Wacana Yogyakarta',
                's2' => 'S2 Magister Teknologi Informasi Universitas Gadjah Mada Yogyakarta',
                // 's3' => '',
            ],
            [
                'nama' => 'Mohammad Diqi, S.T., M.T.',
                'Fakultas' => 'Sains dan Teknologi',
                // 'jabatan_fungsional' => '',
                's1' => 'S1 Universitas Gadjah Mada',
                's2' => 'S2 Universitas Gadjah Mada',
                // 's3' => '',
            ],
            [
                'nama' => 'Hamzah, S.T., M.T.',
                'Fakultas' => 'Sains dan Teknologi',
                // 'jabatan_fungsional' => '',
                's1' => 'S1 Teknik Informatika Universitas Ahmad Dahlan Yogyakarta',
                's2' => 'S2 Informatika - Universitas Atmajaya Yogyakarta',
                // 's3' => '',
            ],
            [
                'nama' => 'Marselina Endah Hiswati, S.T., M.Cs.',
                'Fakultas' => 'Sains dan Teknologi',
                // 'jabatan_fungsional' => '',
                's1' => 'S1 Manajemen Informatika dan Teknik Komputer, Institut Sains dan Teknologi Akprind Yogyakarta',
                's2' => 'S2 Ilmu Komputer, Universitas Gadjah Mada',
                // 's3' => '',
            ],
            [
                'nama' => 'Putra Wanda, S.Kom., M.Eng, Ph.D,',
                'Fakultas' => 'Sains dan Teknologi',
                // 'jabatan_fungsional' => '',
                's1' => 'S1 Teknik Informatika, Universitas Respati Yogyakarta, Indonesia',
                's2' => 'S2 Teknologi Informasi, Universitas Gadjah Mada',
                's3' => 'S3 Computer Science & Tehcnology, Harbin University of Science & Technology, China',
            ],
            [
                'nama' => 'M. Hizbul Wathan, S.Kom., M.Kom',
                'Fakultas' => 'Sains dan Teknologi',
                // 'jabatan_fungsional' => '',
                's1' => 'S1 Teknik Informatika, Universitas Respati Yogyakarta, Indonesia',
                's2' => 'S2 Universitas Atma Jaya Yogyakarta',
                // 's3' => '',
            ],
            [
                'nama' => 'Eliza Staviana, S.Kom., M.Kom.',
                'Fakultas' => 'Sains dan Teknologi',
                // 'jabatan_fungsional' => '',
                's1' => 'S1 Teknik Informatika, Universitas Respati Yogyakarta, Indonesia',
                's2' => 'S2 Universitas Amikom Yogyakarta',
                // 's3' => '',
            ],
            [
                'nama' => 'R. Nurhadi Wijaya, S.Kom., M.Kom',
                'Fakultas' => 'Sains dan Teknologi',
                // 'jabatan_fungsional' => '',
                's1' => 'S1 Teknik Informatika Fakultas Teknologi Industri Universitas Ahmad Dahlan Yogyakarta',
                's2' => 'S2 Magister Teknik Informatika Fakultas Ilmu Komputer Universitas Dian Nuswantoro',
                // 's3' => '',
            ],
        ];

        foreach ($data as $value) {
            Dosen::create($value);
        }
    }
}
