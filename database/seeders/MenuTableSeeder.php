<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = [
            [
                'name' => 'Nasi Goreng Seafood',
                'description' => 'Nasi Goreng Seafood',
                'price' => 16000,
                'slug' => Str::slug('Nasi Goreng Seafood', '-'),
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ],
            [
                'name' => 'Nasi Goreng Sosis',
                'description' => 'Nasi Goreng Sosis',
                'price' => 15000,
                'slug' => Str::slug('Nasi Goreng Sosis', '-'),
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ],
            [
                'name' => 'Gurame Asam Manis 6 Ons',
                'description' => 'Gurame Asam Manis',
                'price' => 60000,
                'slug' => Str::slug('Gurame Asam Manis 6 Ons', '-'),
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ],
            [
                'name' => 'Nasi Liwet Ayam',
                'description' => 'Nasi Liwet Ayam',
                'price' => 150000,
                'slug' => Str::slug('Nasi Liwet Ayam', '-'),
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ],
            [
                'name' => 'Nasi Liwet Gepuk',
                'description' => 'Nasi Liwet Gepuk',
                'price' => 150000,
                'slug' => Str::slug('Nasi Liwet Gepuk', '-'),
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ],
            [
                'name' => 'Es Teh Manis',
                'description' => 'Es Teh Manis',
                'price' => 4000,
                'slug' => Str::slug('Es Teh Manis', '-'),
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ],
            [
                'name' => 'Es Jeruk',
                'description' => 'Es Jeruk',
                'price' => 5000,
                'slug' => Str::slug('Es Jeruk', '-'),
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ],
        ];

        Menu::insert($menus);
    }
}
