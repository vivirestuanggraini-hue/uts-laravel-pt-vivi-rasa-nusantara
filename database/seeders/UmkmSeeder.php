<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;
use App\Models\Produk;

class UmkmSeeder extends Seeder
{
    public function run(): void
    {
        $k1 = Kategori::create(['nama_kategori' => 'Makanan Ringan']);
        $k2 = Kategori::create(['nama_kategori' => 'Minuman Segar']);

        $data = [
            ['kategori_id' => $k1->id, 'nama_produk' => 'Keripik Pisang Cokelat', 'harga' => 15000, 'deskripsi' => 'Keripik pisang renyah dengan balutan cokelat lumer khas Lampung.'],
            ['kategori_id' => $k1->id, 'nama_produk' => 'Basreng Pedas Daun Jeruk', 'harga' => 12000, 'deskripsi' => 'Bakso goreng renyah dengan bumbu cabai asli dan aroma daun jeruk.'],
            ['kategori_id' => $k1->id, 'nama_produk' => 'Kemplang Panggang Ikan Tenggiri', 'harga' => 25000, 'deskripsi' => 'Kemplang panggang gurih lengkap dengan sambal terasi pedas manis.'],
            ['kategori_id' => $k2->id, 'nama_produk' => 'Kopi Robusta Bubuk 250gr', 'harga' => 35000, 'deskripsi' => 'Kopi robusta petik merah pilihan dengan aroma kuat dan nikmat.'],
            ['kategori_id' => $k2->id, 'nama_produk' => 'Es Teh Lemon Madu Botol', 'harga' => 10000, 'deskripsi' => 'Minuman segar perpaduan teh pilihan, perasan lemon, dan madu murni.'],
        ];

        foreach ($data as $item) {
            Produk::create($item);
        }
    }
}