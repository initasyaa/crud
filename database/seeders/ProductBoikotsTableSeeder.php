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
                'brand_name' => 'Frisian Flag',
                'status' => 'Produk Tidak Masuk di Daftar Boikot!',
                'type_id' => 2,
                'description' => 'Dilansir dari situs bdnaash, nama Frisian Flag atau FrieslandCampina tidak tercantum dalam daftar perusahaan yang mendukung penjajahan Israel atas Palestina.',
                'image' => 'images/frisian_flag_uht_coklat_250ml.png',
                'alternative_id' => null,
                'halal_certificate_number' => '123456789',
                'bpom_certificate_number' => 'BPOM123456789',
            ],
            [
                'code' => 7613037425208,
                'product_name' => 'KitKat',
                'brand_name' => 'Nestle',
                'status' => 'Produk Masuk di Daftar Boikot!',
                'type_id' => 1,
                'description' => 'Dilansir dari AFP, Parlemen Turki secara tegas memboikot Nestle, dianggap sebagai produk yang pro dengan Israel.',
                'image' => 'images/kitkat.png',
                'alternative_id' => 2, // Assuming the ID of Healthy Snack is 2
                'halal_certificate_number' => '987654321',
                'bpom_certificate_number' => 'BPOM987654321',
            ],
        ];

        foreach ($products as $product) {
            ProductBoikot::create($product);
        }
    }
}
