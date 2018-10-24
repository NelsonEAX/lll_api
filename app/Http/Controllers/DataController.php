<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function data($shop)
    {
        //TODO: Пока хардкор жи есть
        return response()->json([
            [
                'id' => 1,
                'name' => 'Настенные часы Force Awakens',
                'description' => 'Настенные часы с любимыми героями из легендарной саги StarWars',
                'img' => 'media/catalog/product/8QVNV6RXLu8-228x228.jpg',
                'price' => 2150,
                'pwd' => 2650,
                'rating' => 100,
                'sale' => true,
                'new' => true,
                'category' => ['киш', 'sw', 'звездные войны']
            ],[
                'id' => 2,
                'name' => 'Настенные часы Битва',
                'description' => 'Настенные часы с любимыми героями из легендарной саги StarWars',
                'img' => 'media/catalog/product/42SeKVC3S5M-228x228.jpg',
                'price' => 2250,
                'pwd' => 2650,
                'rating' => 20,
                'sale' => false,
                'new' => true,
                'category' => ['киш']
            ],[
                'id' => 3,
                'name' => 'Настенные часы Star Wars',
                'description' => 'Настенные часы с любимыми героями из легендарной саги StarWars',
                'img' => 'media/catalog/product/Op4JXYJKpUk-228x228.jpg',
                'price' => 2350,
                'pwd' => 2650,
                'rating' => 60,
                'sale' => true,
                'new' => false,
                'category' => ['звездные войны']
            ],[
                'id' => 4,
                'name' => 'Настенные часы Война',
                'description' => 'Настенные часы с любимыми героями из легендарной саги StarWars',
                'img' => 'media/catalog/product/rpp6YIrJQF0-228x228.jpg',
                'price' => 2450,
                'pwd' => 2650,
                'rating' => 50,
                'sale' => false,
                'new' => false,
                'category' => []
            ],[
                'id' => 5,
                'name' => 'Samsung Galaxy Gear Smartwatch',
                'description' => 'Настенные часы Samsung Galaxy Gear Smartwatch',
                'img' => 'media/catalog/product/cache/1/small_image/270x270/9df78eab33525d08d6e5fb8d27136e95/s/a/samsung_gear_2_smartwatch_10.png',
                'price' => 2450,
                'pwd' => 2650,
                'rating' => 70,
                'sale' => false,
                'new' => false,
                'category' => ['watch']
            ],[
                'id' => 6,
                'name' => 'Oulm 1140 Men\'s Watches',
                'description' => 'Настенные часы Oulm 1140 Men\'s Watches',
                'img' => 'media/catalog/product/cache/1/small_image/270x270/9df78eab33525d08d6e5fb8d27136e95/o/u/oulm_1140_men_s_large_watch_3.png',
                'price' => 2450,
                'pwd' => 2650,
                'rating' => 20,
                'sale' => true,
                'new' => false,
                'category' => ['watch']
            ],[
                'id' => 7,
                'name' => 'Oulm Analog Dark Brown',
                'description' => 'Настенные часы Oulm Analog Dark Brown',
                'img' => 'media/catalog/product/cache/1/small_image/270x270/9df78eab33525d08d6e5fb8d27136e95/o/u/oulm_analog_dark_brown_leather_strap_four_sub-dials_men_watch_2.png',
                'price' => 2450,
                'pwd' => 2650,
                'rating' => 40,
                'sale' => false,
                'new' => true,
                'category' => ['watch']
            ],[
                'id' => 8,
                'name' => 'Louis XVI ATHOS L\'argent Noir',
                'description' => 'Настенные часы Louis XVI ATHOS L\'argent Noir',
                'img' => 'media/catalog/product/cache/1/small_image/270x270/9df78eab33525d08d6e5fb8d27136e95/l/o/louis_xvi_athos_l_argent_noir_sapphire_mechanical_automatic_watch_1.png',
                'price' => 2450,
                'pwd' => 2650,
                'rating' => 100,
                'sale' => false,
                'new' => false,
                'category' => ['watch']
            ]
        ]);
    }
}
