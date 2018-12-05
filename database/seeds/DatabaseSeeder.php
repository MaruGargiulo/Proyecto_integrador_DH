<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Category;
use App\Sticker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(CategorySeeder::class);

        
        $categories = factory(Category::class)->times(10)->create();

        $users = factory(User::class)->times(20)->create();
        
        $stickers = factory(Sticker::class)->times(20)->create();    
        
        /*
        $stickers = factory(Sticker::class, 50)->create([
            'user_id' => $users->random()->id,
            'category_id' => $categories->random()->id
        ]);
        */


    }
}
