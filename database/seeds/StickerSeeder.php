<?php

use Illuminate\Database\Seeder;
use App\Sticker;

class StickerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sticker::create([
            'album_name' => 'Pokemon',
            'sticker_number' => '33' ,
            'description' => 'En buen estado, como se ve en la foto.',
            'price' => '72',
            'category_id' => '2' ,
            'user_id' => '1',
        ]);

        Sticker::create([
            'album_name' => 'Dragon Ball Z',
            'sticker_number' => '12' ,
            'description' => 'En buen estado, como se ve en la foto.',
            'price' => '33',
            'category_id' => '5' ,
            'user_id' => '1',
        ]);

        Sticker::create([
            'album_name' => 'Frutillitas',
            'sticker_number' => '33' ,
            'description' => 'En buen estado, como se ve en la foto.',
            'price' => '24',
            'category_id' => '5' ,
            'user_id' => '1',
        ]);

        Sticker::create([
            'album_name' => 'Caballeros del zodiaco',
            'sticker_number' => '123' ,
            'description' => 'En buen estado, como se ve en la foto.',
            'price' => '90',
            'category_id' => '2' ,
            'user_id' => '2',
        ]);

        Sticker::create([
            'album_name' => 'Thundercats',
            'sticker_number' => '231' ,
            'description' => 'En buen estado, como se ve en la foto.',
            'price' => '123',
            'category_id' => '9' ,
            'user_id' => '2',
        ]);

        Sticker::create([
            'album_name' => 'Garfield',
            'sticker_number' => '45' ,
            'description' => 'En buen estado, como se ve en la foto.',
            'price' => '72',
            'category_id' => '7' ,
            'user_id' => '2',
        ]);
    }
}
