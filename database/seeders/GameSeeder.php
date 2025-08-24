<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    public function run()
    {
        $games = [
            [
                'name' => 'Mobile Legends: Bang Bang',
                'slug' => 'mobile-legends',
                'description' => 'Mobile MOBA game with 5v5 battles',
                'image' => '/img/ml.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Free Fire',
                'slug' => 'free-fire',
                'description' => 'Battle Royale survival shooter game',
                'image' => '/img/ff.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'PUBG Mobile',
                'slug' => 'pubg-mobile',
                'description' => 'Battle Royale game with realistic graphics',
                'image' => '/img/pubg.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Genshin Impact',
                'slug' => 'genshin-impact',
                'description' => 'Open-world action RPG adventure',
                'image' => '/img/gi.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Call of Duty: Mobile',
                'slug' => 'cod-mobile',
                'description' => 'First-person shooter mobile game',
                'image' => '/img/cod.jpg',
                'is_active' => true,
            ],
        ];

        foreach ($games as $game) {
            Game::create($game);
        }
    }
}
