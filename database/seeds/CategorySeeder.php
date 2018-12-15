<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Category::create([
            'name' => 'Fútbol',
            'id' => 1,
        ]);
        Category::create([
            'name' => 'Manga',
            'id' => 2,
        ]);
        Category::create([
            'name' => 'Película animada',
            'id' => 3,
        ]);
        Category::create([
            'name' => 'Película de personajes',
            'id' => 4,
        ]);
        Category::create([
            'name' => 'Serie animada',
            'id' => 5,
        ]);
        Category::create([
            'name' => 'Serie de TV',
            'id' => 6,
        ]);
        Category::create([
            'name' => 'Dibujo animado',
            'id' => 7,
        ]);
        Category::create([
            'name' => '90s',
            'id' => 8,
        ]);
        Category::create([
            'name' => '80s',
            'id' => 9,
        ]);
    }
}
