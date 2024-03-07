<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 3,
                'pembeli' => 'Rava',
                'penjualan_kode' => 'P1',
                'penjualan_tanggal' => '2024-02-21',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 3,
                'pembeli' => 'Sera',
                'penjualan_kode' => 'P2',
                'penjualan_tanggal' => '2024-02-21',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Dimas',
                'penjualan_kode' => 'P3',
                'penjualan_tanggal' => '2024-02-21',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 3,
                'pembeli' => 'Sia',
                'penjualan_kode' => 'P4',
                'penjualan_tanggal' => '2024-02-22',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 3,
                'pembeli' => 'Dimas',
                'penjualan_kode' => 'P5',
                'penjualan_tanggal' => '2024-02-22',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Rava',
                'penjualan_kode' => 'P6',
                'penjualan_tanggal' => '2024-02-23',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 3,
                'pembeli' => 'Anna',
                'penjualan_kode' => 'P7',
                'penjualan_tanggal' => '2024-02-23',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 3,
                'pembeli' => 'Kiana',
                'penjualan_kode' => 'P8',
                'penjualan_tanggal' => '2024-02-23',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Shava',
                'penjualan_kode' => 'P9',
                'penjualan_tanggal' => '2024-02-23',
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => 'Arsya',
                'penjualan_kode' => 'P10',
                'penjualan_tanggal' => '2024-02-24',
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}