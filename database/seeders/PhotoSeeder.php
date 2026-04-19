<?php

namespace Database\Seeders;

use App\Models\Photo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Photo::firstOrCreate([
            'path' => 'images/contoh2.png',
        ], [
            'title' => 'Contoh Foto Galeri',
            'description' => 'Salah satu contoh foto untuk galeri portfolio.',
        ]);

        Photo::firstOrCreate([
            'path' => 'images/profil.png',
        ], [
            'title' => 'Foto Profil',
            'description' => 'Foto profil M. Awaludin Majid.',
        ]);
    }
}
