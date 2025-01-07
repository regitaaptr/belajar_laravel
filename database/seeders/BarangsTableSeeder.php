<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
            ['nama_barang'=>'Handphone', 'merk'=>'Samsung', 'harga'=>30000],
            ['nama_barang'=>'Laptop', 'merk'=>'Asus', 'harga'=>900000],
            ['nama_barang'=>'Earphone', 'merk'=>'Gojodoq', 'harga'=>200000],
            ['nama_barang'=>'Tv', 'merk'=>'Sharp', 'harga'=>400000],
            ['nama_barang'=>'Kulkas', 'merk'=>'Gv', 'harga'=>70000]
        ];
        // masukkan data ke database
        DB::table('barangs')->insert($barang);

    }
}
