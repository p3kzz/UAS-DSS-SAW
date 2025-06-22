<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('kriterias')->insert([
            [
                'nama_kriteria'=> 'harga',
                'kode'=> 'c1',
                'bobot'=> 0.25,
                'tipe'=> 'cost',
            ],
            [
                'nama_kriteria'=> 'kualitas',
                'kode'=> 'c2',
                'bobot'=> 0.25,
                'tipe'=> 'benefit',
            ],
            [
                'nama_kriteria'=> 'kecepatan_pengiriman',
                'kode'=> 'c3',
                'bobot'=> 0.20,
                'tipe'=> 'benefit',
            ],
            [
                'nama_kriteria'=> 'konsistensi_pasokan',
                'kode'=> 'c4',
                'bobot'=> 0.15,
                'tipe'=> 'benefit',
            ],
            [
                'nama_kriteria'=> 'kemudahan_komunikasi',
                'kode'=> 'c5',
                'bobot'=> 0.15,
                'tipe'=> 'benefit',
            ],
         ]);
    }
}
