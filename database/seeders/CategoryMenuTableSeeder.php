<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class CategoryMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::findOrFail(1)->categories()->sync(1);
        Menu::findOrFail(2)->categories()->sync(1);
        Menu::findOrFail(3)->categories()->sync(2);
        Menu::findOrFail(4)->categories()->sync(3);
        Menu::findOrFail(5)->categories()->sync(3);
        Menu::findOrFail(6)->categories()->sync(4);
        Menu::findOrFail(7)->categories()->sync(4);
    }
}
