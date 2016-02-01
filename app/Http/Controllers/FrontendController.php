<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function getIndex(){    
      $articles = \App\Article::with('categories', 'user')
                              ->where('published_at', '<=', \Carbon\Carbon::now())
                              ->where('is_published', '=', 1)
                              ->orderBy('published_at', 'DESC')->paginate(5);

      return view('frontend.home', ['articles' => $articles]);
    }

    public function getArticolo($slug){
      $article = \App\Article::with('categories', 'user')->where('slug', '=', $slug)->first();

      return view('frontend.article', compact('article'));
    }

    public function getAutore($slug){
      $author = \App\User::where('slug', $slug)->first();
      $articles = $author->articles()
                ->where('is_published', '=', true)
                ->where('published_at', '<=', \Carbon\Carbon::now())
                ->orderBy('published_at', 'DESC')
                ->paginate(5);

      return view('frontend.author', compact('author', 'articles'));
    }

    public function getCategoria($slug){
      $currentCategory = \App\Category::where('slug', '=', $slug)->first();
      $articles = $currentCategory->articles()
                ->where('is_published', '=', true)
                ->where('published_at', '<=', \Carbon\Carbon::now())
                ->orderBy('published_at', 'DESC')
                ->paginate(5);

      return view('frontend.category', compact('currentCategory', 'articles'));
    }
}
