<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Article;
use App\User;
use App\Category;

Class ArticleTableSeeder extends Seeder{

  public function run(){

    DB::table('articles')->delete();

      $faker = Faker\Factory::create('it_IT');
      $articlesCount = 50;
      $categoriesIds = $this->getCategoriesIdsArray();

      for($c = 0; $c < $articlesCount; $c++){
        $title = $faker->sentence();
        $slug = Str::slug($title);

        $article = Article::create([
          'title' => $title,
          'slug' => $slug,
          'body' => '<p>'.$faker->paragraph(10).'</p>',
          'is_published' => $faker->boolean(80),
          'published_at' => $faker->dateTimeThisYear($max = 'now'),
          'meta_keys' => implode(',', $faker->words(5)),
          'meta_description' => $faker->sentence(),
          'user_id' => User::orderByRaw('RAND()')->first()->id,
        ]);
        $article->categories()->sync($faker->randomElements($categoriesIds, mt_rand(1, 2)));
      }
  }

  private function getCategoriesIdsArray()
    {
        $result = [];

        $categories = Category::all();
        foreach($categories as $category)
        {
            $result[] = $category->id;
        }

        return $result;
    }
}
