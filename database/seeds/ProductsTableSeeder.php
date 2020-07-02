<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [   'category_id'=> '1',
                'name' => 'Ноутбук Asus Laptop 15',
                'code' => 'asus_laptop_15',
                'description'=> 'Экран 15.6" IPS (1920x1080) Full HD, матовый / AMD Ryzen 5-3500U (2.1 - 3.7 ГГц) / RAM 8 ГБ / HDD 1 ТБ + SSD 128 ГБ / nVidia GeForce MX250, 2 ГБ / без ОД / Wi-Fi / Bluetooth / веб-камера / без ОС / 1.8 кг / серый',
                'image' => 'products/asus_laptop_15.jpeg',
                'price' => '17599',],

            [   'category_id'=> '1',
                'name' => 'Ноутбук Apple MacBook Air',
                'code' => 'apple_macbook_air',
                'description'=> 'Экран 13.3" IPS (2560x1600), глянцевый / Intel Core i3 (1.1 - 3.2 ГГц) / RAM 8 ГБ / SSD 256 ГБ / Intel Iris Plus Graphics / Wi-Fi / Bluetooth / macOS Catalina / 1.29 кг / серый',
                'image' => 'products/apple_macbook_air.jpeg',
                'price' => '30499',],

            [   'category_id'=> '1',
                'name' => 'Ноутбук HP Pavilion Gaming',
                'code' => 'hp_pavilion_gaming',
                'description'=> 'Экран 15.6" IPS (1920x1080) Full HD, матовый / Intel Core i5-8300H (2.3 - 4.0 ГГц) / RAM 16 ГБ / HDD 1 ТБ + SSD 256 ГБ / nVidia GeForce GTX 1050 Ti, 4 ГБ / без ОД / LAN / Wi-Fi / Bluetooth 4.2 / веб-камера / DOS / 2.4 кг / серый',
                'image' => 'products/hp_pavilion_gaming.jpeg',
                'price' => '23999',],

            [   'category_id'=> '2',
                'name' => 'Samsung Galaxy M21',
                'code' => 'samsung_galaxy_m21',
                'description'=> 'Экран (6.4", Super AMOLED, 2340х1080) / Samsung Exynos 9611 (4 x 2.3 ГГц + 4 x 1.7 ГГц) / тройная основная камера: 48 Мп + 8 Мп + 5 Мп, фронтальная 20 Мп / RAM 4 ГБ / 64 ГБ встроенной памяти + microSD (до 512 ГБ) / 3G / LTE / GPS / поддержка 2х SIM-карт (Nano-SIM) / Android 10 (Q) / 6000 мА*ч',
                'image' => 'products/samsung_galaxy_m21.jpeg',
                'price' => '5555',],

            [   'category_id'=> '2',
                'name' => 'Huawei P30 Lite',
                'code' => 'huawei_p30_lite',
                'description'=> 'Экран (6.15", LTPS, 2312x1080)/ HiSilicon Kirin 710 (4 x 2.2 ГГц + 4 x 1.7 ГГц)/ тройная основная камера: 24 Мп + 8 Мп + 2 Мп, фронтальная камера: 32 Мп/ RAM 4 ГБ/ 64 ГБ встроенной памяти + microSD (до 512 ГБ)/ 3G/ LTE/ GPS/ GLONASS/ BDS/ поддержка 2х SIM-карт (Nano-SIM)/ Android 9.0 (EMUI 9.0.1)/ 3340 мА*ч',
                'image' => 'products/huawei_p30_lite.jpeg',
                'price' => '4999',],

            [   'category_id'=> '2',
                'name' => 'Samsung Galaxy Note 10 Lite',
                'code' => 'samsung_galaxy_note_10_lite',
                'description'=> 'Экран (6.7", SuperAMOLED, 2400x1080)/ Samsung Exynos 9810 (4 x 2.7 ГГц + 4 x 1.7 ГГц)/ тройная основная камера: 12 Мп + 12 Мп + 12 Мп/ фронтальная: 32 Мп / RAM 6 ГБ/ 128 ГБ встроенной памяти + microSD (до 1 ТБ)/ 3G/ LTE/ GPS/ A-GPS/ ГЛОНАСС/ BDS/ поддержка 2х SIM-карт (Nano-SIM)/ Android 10 (Q)/ 4500 мА*ч',
                'image' => 'products/samsung_galaxy_note_10_lite.jpeg',
                'price' => '12999',],

            [   'category_id'=> '1',
                'name' => 'ARTLINE Gaming X51',
                'code' => 'artline_gaming_x51',
                'description'=> 'Intel Core i5-9400F (2.9 - 4.1 ГГц) / RAM 16 ГБ / HDD 1 ТБ + SSD 480 ГБ / nVidia GeForce GTX 1660 Super, 6 ГБ / без ОД / LAN / без ОС',
                'image' => 'products/artline_gaming_x51.jpeg',
                'price' => '21888',],

            [   'category_id'=> '3',
                'name' => 'Samsung UE43N5000AUXUA',
                'code' => 'samsung_ue43n5000auxua',
                'description'=> 'Диагональ экрана:43 дюйма Разрешение:1920x1080 Диапазоны цифрового тюнера:DVB-C DVB-S2 DVB-T2 Частота обновления:300 Гц (PQI)',
                'image' => 'products/samsung_ue43n5000auxua.jpeg',
                'price' => '6999',],
        ]);
    }
}
