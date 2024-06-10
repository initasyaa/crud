<?php

namespace Database\Seeders;

use App\Models\ProductBoikot;
use Illuminate\Database\Seeder;

class ProductBoikotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'code' => 8992753722693,
                'product_name' => 'Frisian Flag UHT Coklat 250ML',
                'type_id' => 2,
                'brand_name' => 'Frisian Flag',
                'status' => 'Produk Tidak Masuk di Daftar Boikot!',
                'description' => 'Dilansir dari situs bdnaash, nama Frisian Flag atau FrieslandCampina tidak tercantum dalam daftar perusahaan yang mendukung penjajahan Israel atas Palestina.',
                'alternative_id' => null,
            ],
            [
                'code' => 8886008101336,
                'product_name' => 'Aqua',
                'type_id' => 2,
                'brand_name' => 'Danone',
                'status' => 'Produk Masuk di Daftar Boikot!',
                'description' => 'Berdasarkan berita dari Jerusalem Post, Danone memimpin investasi sebesar 3,5 juta dolar AS atau sekitar Rp 54,9 miliar bersama dengan perusahaan susu Israel Tara. ',
                'alternative_id' => 2,
            ],
            [
                'code' => 7613037425208,
                'product_name' => 'KitKat',
                'type_id' => 1,
                'brand_name' => 'Khong Guan',
                'status' => 'Produk Masuk di Daftar Boikot!',
                'description' => 'Dilansir dari AFP, Parlemen Turki secara tegas memboikot Nestle, dianggap sebagai produk yang pro dengan Israel.',
                'alternative_id' => 1,
            ],
            [
                'code' => 955600102527,
                'product_name' => 'Nescafe Latte',
                'type_id' => 2,
                'brand_name' => 'Nestle',
                'status' => 'Produk Masuk di Daftar Boikot!',
                'description' => 'Dilansir dari AFP, Parlemen Turki secara tegas memboikot Nestle, dianggap sebagai produk yang pro dengan Israel.',
                'alternative_id' => 2,
            ],
            [
                'code' => 8993175535878,
                'product_name' => 'Nabati Keju',
                'type_id' => 1,
                'brand_name' => 'Kaldu Sari Nabati Indonesia',
                'status' => 'Produk Tidak Masuk di Daftar Boikot!',
                'description' => 'Dilansir dari situs hopes.id, produk Nabati disinyalir tidak terafiliasi dengan Israel.',
                'alternative_id' => null,
            ],
            [
                'code' => 12,
                'product_name' => 'test',
                'type_id' => 3,
                'brand_name' => 'Nirwana Lestari',
                'status' => 'boikot',
                'description' => 'produk ini ada di daftar boikot',
                'alternative_id' => 1,
            ],
        ];

        foreach ($products as $product) {
            ProductBoikot::create($product);
        }
    }
}
