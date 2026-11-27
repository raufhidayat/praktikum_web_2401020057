<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Buku;
use App\Models\Kategori;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $k = Kategori::where('nama', 'Pemrograman')->firstOrFail();
        Buku::firstOrCreate(['kode' => 'BK001'],
            ['judul' => 'Dasar PHP', 'kategori_id' => $k->id]);
        Buku::firstOrCreate(['kode' => 'BK002'],
            ['judul' => 'Belajar Laravel', 'kategori_id' => $k->id]);
    }
}
