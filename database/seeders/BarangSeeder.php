<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang')->insert([
            'nama' => 'Nike Air Force 1',
            'harga' => '1.000.000',
            'brand' => 'Nike'
          ]);
  
          DB::table('barang')->insert([
              'nama' => 'Air Jordan 1',
              'harga' => '1.200.000',
              'brand' => 'Nike'
          ]);
    }
}
