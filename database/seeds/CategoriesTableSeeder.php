<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [   'name' => 'Ноутбуки и компьютеры',
                'code' => 'computers',
                'description'=> 'В этой категории расположены ноутбуки и компьютеры',
                'image' => 'categories/notebooks.png'],
            [   'name' => 'Мобильные телефоны',
                'code' => 'mobiles',
                'description'=> 'В этой категории расположены мобильные телефоны',
                'image' => 'categories/mobiles.jpeg'],
            [   'name' => 'Телевизоры',
                'code' => 'televisions',
                'description'=> 'В этой категории расположены телевизоры',
                'image' => 'categories/tv.jpeg'],
        ]);
    }
}
