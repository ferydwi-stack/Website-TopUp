<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Diamond;
use App\Models\Game;

class DiamondSeeder extends Seeder
{
    public function run()
    {
        $diamonds = [
            // Mobile Legends
            [
                'game_id' => 1,
                'name' => '86 💎',
                'amount' => 86,
                'price' => 20000,
                'image' => '/img/ml.jpg',
                'is_popular' => false,
            ],
            [
                'game_id' => 1,
                'name' => '172 💎',
                'amount' => 172,
                'price' => 40000,
                'image' => '/img/ml.jpg',
                'is_popular' => false,
            ],
            [
                'game_id' => 1,
                'name' => '257 💎',
                'amount' => 257,
                'price' => 60000,
                'image' => '/img/ml.jpg',
                'is_popular' => true,
            ],
            [
                'game_id' => 1,
                'name' => '344 💎',
                'amount' => 344,
                'price' => 80000,
                'image' => '/img/ml.jpg',
                'is_popular' => false,
            ],
            [
                'game_id' => 1,
                'name' => '429 💎',
                'amount' => 429,
                'price' => 100000,
                'image' => '/img/ml.jpg',
                'is_popular' => false,
            ],

            // Free Fire
            [
                'game_id' => 2,
                'name' => '100 💎',
                'amount' => 100,
                'price' => 15000,
                'image' => '/img/ff.jpg',
                'is_popular' => false,
            ],
            [
                'game_id' => 2,
                'name' => '200 💎',
                'amount' => 200,
                'price' => 30000,
                'image' => '/img/ff.jpg',
                'is_popular' => false,
            ],
            [
                'game_id' => 2,
                'name' => '500 💎',
                'amount' => 500,
                'price' => 75000,
                'image' => '/img/ff.jpg',
                'is_popular' => true,
            ],
            [
                'game_id' => 2,
                'name' => '1000 💎',
                'amount' => 1000,
                'price' => 150000,
                'image' => '/img/ff.jpg',
                'is_popular' => false,
            ],

            // PUBG Mobile
            [
                'game_id' => 3,
                'name' => '60 UC',
                'amount' => 60,
                'price' => 12000,
                'image' => '/img/pubg.jpg',
                'is_popular' => false,
            ],
            [
                'game_id' => 3,
                'name' => '325 UC',
                'amount' => 325,
                'price' => 65000,
                'image' => '/img/pubg.jpg',
                'is_popular' => true,
            ],
            [
                'game_id' => 3,
                'name' => '660 UC',
                'amount' => 660,
                'price' => 132000,
                'image' => '/img/pubg.jpg',
                'is_popular' => false,
            ],

            // Genshin Impact
            [
                'game_id' => 4,
                'name' => '60 Primogems',
                'amount' => 60,
                'price' => 15000,
                'image' => '/img/gi.jpg',
                'is_popular' => false,
            ],
            [
                'game_id' => 4,
                'name' => '300 Primogems',
                'amount' => 300,
                'price' => 75000,
                'image' => '/img/gi.jpg',
                'is_popular' => true,
            ],
            [
                'game_id' => 4,
                'name' => '980 Primogems',
                'amount' => 980,
                'price' => 245000,
                'image' => '/img/gi.jpg',
                'is_popular' => false,
            ],

            // Call of Duty Mobile
            [
                'game_id' => 5,
                'name' => '100 CP',
                'amount' => 100,
                'price' => 20000,
                'image' => '/img/cod.jpg',
                'is_popular' => false,
            ],
            [
                'game_id' => 5,
                'name' => '500 CP',
                'amount' => 500,
                'price' => 100000,
                'image' => '/img/cod.jpg',
                'is_popular' => true,
            ],
            [
                'game_id' => 5,
                'name' => '1000 CP',
                'amount' => 1000,
                'price' => 200000,
                'image' => '/img/cod.jpg',
                'is_popular' => false,
            ],
        ];

        foreach ($diamonds as $diamond) {
            Diamond::create($diamond);
        }
    }
}
