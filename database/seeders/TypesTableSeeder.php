<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            ['name' => 'Kosmetik'],
        ];

        foreach ($types as $type) {
            Type::create($type);
        }
    }
}
