<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = ['novel', 'sejarah', 'religi', 'biografi', 'komik'];

        foreach ($kategori as $value) {
            Kategori::create([
                'name' => $value,
                'slug' => Str::slug($value)
            ]);
        }
    }
}
