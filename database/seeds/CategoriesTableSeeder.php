<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ["Robbery", "Fire", "Shooting", "Calamity", "Harassment", "Abused"];
        for ($i = 0; $i < count($categories); $i++ ){
            $user = App\Category::create([
                'name' => $categories[$i]
            ]);
        }
    }
}
