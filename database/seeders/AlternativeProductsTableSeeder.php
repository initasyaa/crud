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
                'code' => 8888166988399,
                'product_name' => 'Kg ast bisc red 300g',
                'brand_name' => 'Khong Guan',
                'type_id' => 1,
                'description' => 'product aman untuk saat ini, karena tidak ada di daftar boikot',
                'image' => 'images/kg_ast_bisc_red_300g.png',
                'halal_certificate_number' => 'HALAL123456789',
                'bpom_certificate_number' => 'BPOM123456789',
            ],
            [
                'code' => 9999999999999,
                'product_name' => 'Healthy Snack',
                'brand_name' => 'Healthy Brand',
                'type_id' => 1,
                'description' => 'Alternative snack product.',
                'image' => 'images/healthy_snack.png',
                'halal_certificate_number' => 'HALAL987654321',
                'bpom_certificate_number' => 'BPOM987654321',
            ],
        ];

        foreach ($alternativeProduct as $alternative) {
            AlternativeProduct::create($alternative);
        }
    }
}
