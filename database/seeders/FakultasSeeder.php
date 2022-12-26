<?php

namespace Database\Seeders;

use App\Models\Fakultas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Sains dan Teknologi',
            'Ilmu Kesehatan',
            'Ilmu Sosial dan Ekonomi'
        ];

        foreach ($data as $value) {
            Fakultas::create(['fakultas' => $value]);
        }
    }
}
