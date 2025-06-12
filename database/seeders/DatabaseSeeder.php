<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Partai; // Perbaiki casing nama model
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Partai::create([
            'nama_partai' => 'Golkar',
            'gambar_partai' => 'golkar.png' // Path gambar
        ]);
        Partai::create([
            'nama_partai' => 'Nasdem',
            'gambar_partai' => 'nasdem.png'
        ]);
        Partai::create([
            'nama_partai' => 'PSI',
            'gambar_partai' => 'psi.png'
        ]);
        Partai::create([
            'nama_partai' => 'PBB',
            'gambar_partai' => 'pbb.png'
        ]);
        Partai::create([
            'nama_partai' => 'Aww',
            'gambar_partai' => 'aww.png'
        ]);
        Partai::create([
            'nama_partai' => 'PDIP',
            'gambar_partai' => 'pdip.jpg'
        ]);
    }
}
