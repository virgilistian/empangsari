<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Nasi Goreng',
                'description' => 'Aneka Makanan Nasi Goreng',
                'slug' => Str::slug('Nasi Goreng', '-'),
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ],
            [
                'name' => 'Gurame',
                'description' => 'Aneka Makanan Gurame',
                'slug' => Str::slug('Gurame', '-'),
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ],
            [
                'name' => 'Nasi Liwet',
                'description' => 'Aneka Makanan Nasi Liwet',
                'slug' => Str::slug('Nasi Liwet', '-'),
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ],
            [
                'name' => 'Minuman',
                'description' => 'Aneka Minuman',
                'slug' => Str::slug('Minuman', '-'),
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ],
        ];

        Category::insert($categories);
    }
}
