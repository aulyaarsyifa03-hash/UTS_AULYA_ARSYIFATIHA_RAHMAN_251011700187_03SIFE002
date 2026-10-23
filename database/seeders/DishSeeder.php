<?php

namespace Database\Seeders;

use App\Models\Dish;
use Illuminate\Database\Seeder;

class DishSeeder extends Seeder
{
    public function run(): void
    {
        $dishes = [
            ['name' => 'Rendang', 'origin_region' => 'Sumatera Barat', 'ingredients' => 'Daging sapi, santan, cabai, kunyit, jahe, lengkuas, serai, daun jeruk', 'price' => 45000, 'image' => 'rendang.jpg',
             'description' => 'Daging sapi yang dimasak pelan dengan santan dan rempah sampai bumbunya mengental dan meresap. Hidangan khas Minangkabau yang sering disajikan pada acara adat.'],
            ['name' => 'Gudeg', 'origin_region' => 'Yogyakarta', 'ingredients' => 'Nangka muda, santan, gula merah, bawang, ketumbar, daun jati, telur, ayam', 'price' => 25000, 'image' => 'gudeg.jpg',
             'description' => 'Nangka muda yang dimasak berjam-jam dengan gula merah dan santan hingga manis dan berwarna cokelat. Biasanya disajikan dengan telur, ayam, dan krecek.'],
            ['name' => 'Soto Betawi', 'origin_region' => 'DKI Jakarta', 'ingredients' => 'Daging sapi, jeroan, santan, susu, kentang, tomat, emping, bawang goreng', 'price' => 35000, 'image' => 'soto-betawi.jpg',
             'description' => 'Soto berkuah santan dan susu dengan potongan daging sapi yang gurih. Ditaburi emping, tomat, dan bawang goreng.'],
            ['name' => 'Rawon', 'origin_region' => 'Jawa Timur', 'ingredients' => 'Daging sapi, kluwek, bawang merah, bawang putih, kunyit, lengkuas, tauge, telur asin', 'price' => 30000, 'image' => 'rawon.jpg',
             'description' => 'Sup daging sapi berkuah hitam pekat dari kluwek. Disantap dengan tauge pendek, sambal, dan telur asin.'],
            ['name' => 'Pempek', 'origin_region' => 'Sumatera Selatan', 'ingredients' => 'Ikan tenggiri, tepung sagu, telur, bawang putih, garam, cuko (cuka, gula aren, cabai)', 'price' => 28000, 'image' => 'pempek.jpg',
             'description' => 'Olahan ikan dan sagu yang digoreng, dicocol dengan kuah cuko yang asam, manis, dan pedas. Khas Palembang.'],
            ['name' => 'Papeda Ikan Kuah Kuning', 'origin_region' => 'Papua dan Maluku', 'ingredients' => 'Tepung sagu, ikan tongkol, kunyit, jeruk nipis, kemangi, serai, cabai', 'price' => 32000, 'image' => 'papeda.jpg',
             'description' => 'Bubur sagu yang kenyal dan bening, dimakan bersama ikan berkuah kuning yang segar dan asam.'],
            ['name' => 'Coto Makassar', 'origin_region' => 'Sulawesi Selatan', 'ingredients' => 'Daging sapi, jeroan, kacang tanah, rempah coto, bawang goreng, daun bawang', 'price' => 33000, 'image' => 'coto-makassar.jpg',
             'description' => 'Sup daging dan jeroan dengan kuah kental dari kacang tanah dan rempah. Lazim dimakan dengan ketupat atau buras.'],
            ['name' => 'Ayam Betutu', 'origin_region' => 'Bali', 'ingredients' => 'Ayam kampung, base genep, cabai, kemiri, kencur, daun singkong, jahe', 'price' => 55000, 'image' => 'ayam-betutu.jpg',
             'description' => 'Ayam utuh berbumbu base genep, dibungkus daun lalu dikukus atau dipanggang lama sampai empuk dan pedas.'],
        ];

        foreach ($dishes as $dish) {
            Dish::create($dish);
        }
    }
}
