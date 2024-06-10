<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            ['name' => 'Makanan'],
            ['name' => 'Minuman'],
            ['name' => 'Cosmetics'],
            ['name' => 'Skincare'],
        ];

        foreach ($types as $type) {
            Type::create($type);
        }
    }
}
