<?php

namespace Database\Seeders;

use App\Models\Feedback;
use Illuminate\Database\Seeder;

class FeedbacksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $feedbacks = [
            [
                'code' => 8999999719395,
                'product_name' => 'Lotion Healthy Bright UV Extra Brightening',
                'brand_name' => 'Vaseline',
                'status' => 'Produk Masuk di Daftar Boikot!',
                'description' => 'Berdasarkan situs bdnaash, nama brand Vaseline tercantum dalam daftar perusahaan yang mendukung penjajahan Israel atas Palestina.'
            ],
            [
                'code' => 9992416378877,
                'product_name' => 'Zaitun Series Body Lotion Zaitun',
                'brand_name' => 'Herborist',
                'status' => 'Produk Tidak Masuk di Daftar Boikot!',
                'description' => 'Dilansir dari situs hopes.id, produk Herborist disinyalir tidak terafiliasi dengan Israel.'
            ],
        ];

        foreach ($feedbacks as $feedback) {
            Feedback::create($feedback);
        }
    }
}
