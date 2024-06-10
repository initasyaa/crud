<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AlternativeProduct;

class AlternativeProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alternativeProduct = [
             [
                'code' => 8888166989399,
                'product_name' => 'Frisian Flag UHT Coklat 250ML',
                'type_id' => 2, 
                'brand_name' => 'Frisian Flag',
                'description' => 'Dilansir dari situs bdnaash, nama Frisian Flag atau FrieslandCampina tidak tercantum dalam daftar perusahaan yang mendukung penjajahan Israel atas Palestina.'
            ],
            [
                'code' => 89686598131,
                'product_name' => 'Chitato Sapi Panggang',
                'type_id' => 1,
                'brand_name' => 'Indofood CBP Sukses Makmur',
                'description' => 'Dilansir dari situs bdnaash, nama Frisian Flag atau FrieslandCampina tidak tercantum dalam daftar perusahaan yang mendukung penjajahan Israel atas Palestina.'
            ],            
            [
                'code' => 89686060003,
                'product_name' => 'Pop Mie Rasa Ayam Bawang',
                'type_id' => 1,
                'brand_name' => 'Indofood CBP Sukses Makmur',
                'description' => 'Dilansir dari situs Nusahits, ICBP tidak memiliki hubungan bisnis dengan perusahaan Israel mana pun.'
            ],
            [
                'code' => 8993007000253,
                'product_name' => 'Indomilk Kids 115ML',
                'type_id' => 1,
                'brand_name' => 'Indolakto',
                'description' => 'Dilansir dari situs Pitutur, menurut hasil penelusurannya Indofood tidak memiliki hubungan langsung dengan Israel.'
            ],
            [
                'code' => 8993137715812,
                'product_name' => 'Colorfit Perfect Glow Cushion',
                'type_id' => 3,
                'brand_name' => 'Wardah',
                'description' => 'Dilansir dari situs Republika, brand Wardah secara tegas menyatakan dukungan dan keberpihakannya terhadap Palestina salah satunya adalah memboikot semua bahan baku yang berafiliasi dengan Israel.'
            ],
        ];

        foreach ($alternativeProduct as $alternative) {
            AlternativeProduct::create($alternative);
        }
    }
}
