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
        ]);
        Category::create([
            'name' => 'Manga',
        ]);
        Category::create([
            'name' => 'Película animada',
        ]);
        Category::create([
            'name' => 'Película de personajes',
        ]);
        Category::create([
            'name' => 'Serie animada',
        ]);
        Category::create([
            'name' => 'Serie de TV',
        ]);
        Category::create([
            'name' => 'Dibujo animado',
        ]);
        Category::create([
            'name' => '90s',
        ]);
        Category::create([
            'name' => '80s',
        ]);
    }
}
