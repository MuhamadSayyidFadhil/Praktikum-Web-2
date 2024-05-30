<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('periksas')->insert([
            [
                'tanggal' => '2024-03-01',
                'berat' => 65.5,
                'tinggi' => 170,
                'tensi' => '120/80',
                'keterangan' => 'Normal',
            ],
        ]);
    }
}
