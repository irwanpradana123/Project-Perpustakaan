<?php

namespace Database\Seeders;

use App\Models\buku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        buku::create([
            'judul' => 'naruto',
            'slug' => Str::slug('naruto'),
            'sampul' => 'naruto.jpg',
            'penulis' => 'momoshiki',
            'penerbit_id' => 1,
            'kategori_id' => 1,
            'rak_id' => 1,
            'stok' => 10
        ]);
    }
}
