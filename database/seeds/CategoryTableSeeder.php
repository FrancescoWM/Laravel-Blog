<?php

use Illuminate\Database\Seeder;
use App\Category;

Class CategoryTableSeeder extends Seeder{

  public function run(){
    DB::table('categories')->delete();

    $faker = Faker\Factory::create('it_IT');
    Category::create([
      'name' => 'News',
      'slug' => 'news',
      'description' => $faker->paragraph(3)
    ]);

    Category::create([
      'name' => 'Interviste',
      'slug' => 'interviste',
      'description' => $faker->paragraph(3)
    ]);

    Category::create([
      'name' => 'Reportage',
      'slug' => 'reportage',
      'description' => $faker->paragraph(3)
    ]);
  }
}
