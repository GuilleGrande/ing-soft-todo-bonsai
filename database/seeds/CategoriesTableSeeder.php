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
        DB::table('categories')->insert(['name' => 'Bonsai Indoor Tropical']);
        DB::table('categories')->insert(['name' => 'Bonsai Indoor Subtropical']);
        DB::table('categories')->insert(['name' => 'Bonsai Outdoor Deciduous']);
        DB::table('categories')->insert(['name' => 'Bonsai Outdoor Evergreen']);
        DB::table('categories')->insert(['name' => 'Accessories']);
        DB::table('categories')->insert(['name' => 'Tools']);
        DB::table('categories')->insert(['name' => 'Soils & Fertilizers']);
    }
}