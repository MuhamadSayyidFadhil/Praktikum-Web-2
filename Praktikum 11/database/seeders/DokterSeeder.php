<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dokters')->insert([
            [
                'nama' => 'Dr. John Doe',
                'tmp_lahir' => 'surabaya',
                'tgl_lahir' => '1980-05-15',
                'gender' => 'L',
                'kategori' => 'Umum',
                'telpon' => '081234567890',
                'alamat' => 'Jakarta',
            ],
            [
                'nama' => 'Dr. Jane Doe',
                'tmp_lahir' => 'surabaya',
                'tgl_lahir' => '1975-10-20',
                'gender' => 'P',
                'kategori' => 'Spesialis',
                'telpon' => '082345678901',
                'alamat' => 'Surabaya',
            ],
            [
                'nama' => 'Dr. Michael Smith',
                'tmp_lahir' => 'Bandung',
                'tgl_lahir' => '1982-03-25',
                'gender' => 'L',
                'kategori' => 'Bidan',
                'telpon' => '083456789012',
                'alamat' => 'Bandung',
            ],
        ]);
    }
}
