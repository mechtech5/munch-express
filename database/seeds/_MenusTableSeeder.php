<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\MenuCategory::class, 5)->create()->each(function($category) {
            factory(\App\Models\Menu::class, 3)->create([
                'category_id' => $category->id
            ]);
        });
        
    }
}
