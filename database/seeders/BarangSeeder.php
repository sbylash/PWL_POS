<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => '1',
                'barang_kode' => 'LTE',
                'barang_nama' => 'Lip Tint Emina',
                'harga_beli' => '47000',
                'harga_jual' => '50000',
            ],
            [
                'barang_id' => 2,
                'kategori_id' => '1',
                'barang_kode' => 'LCE',
                'barang_nama' => 'Lip Cream Emina',
                'harga_beli' => '49000',
                'harga_jual' => '53000',
            ],
            [
                'barang_id' => 3,
                'kategori_id' => '2',
                'barang_kode' => 'BLN',
                'barang_nama' => 'Bulan',
                'harga_beli' => '88000',
                'harga_jual' => '99000',
            ],
            [
                'barang_id' => 4,
                'kategori_id' => '2',
                'barang_kode' => 'CFS',
                'barang_nama' => 'Confessions',
                'harga_beli' => '63000',
                'harga_jual' => '65000',
            ],
            [
                'barang_id' => 5,
                'kategori_id' => '3',
                'barang_kode' => 'PLN',
                'barang_nama' => 'Pulpen',
                'harga_beli' => '4500',
                'harga_jual' => '5000',
            ],
            [
                'barang_id' => 6,
                'kategori_id' => '3',
                'barang_kode' => 'TPX',
                'barang_nama' => 'Tip X',
                'harga_beli' => '6000',
                'harga_jual' => '6500',
            ],
            [
                'barang_id' => 7,
                'kategori_id' => '4',
                'barang_kode' => 'QTL',
                'barang_nama' => 'Qtela',
                'harga_beli' => '9000',
                'harga_jual' => '10000',
            ],
            [
                'barang_id' => 8,
                'kategori_id' => '4',
                'barang_kode' => 'LYS',
                'barang_nama' => 'Lays',
                'harga_beli' => '7000',
                'harga_jual' => '8000',
            ],
            [
                'barang_id' => 9,
                'kategori_id' => '5',
                'barang_kode' => 'SSR',
                'barang_nama' => 'Teh Sosro',
                'harga_beli' => '4500',
                'harga_jual' => '5000',
            ],
            [
                'barang_id' => 10,
                'kategori_id' => '5',
                'barang_kode' => 'UMC',
                'barang_nama' => 'Ultra Milk Coklat',
                'harga_beli' => '6000',
                'harga_jual' => '7000',
            ],
            
        ];
        DB::table('m_barang')->insert($data);
    }
}