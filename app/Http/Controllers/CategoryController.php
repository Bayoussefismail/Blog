<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Post;
use App\Category;
class CategoryController extends Controller
{
  public function category($slug2)
  {

    $category = Category::where('slug2', $slug2)->first();
    return view('category')->with('category', $category)
                           ->with('title', $category->name)
                           ->with('settings', Setting::first())
                           ->with('posts', $category->posts)

                           ->with('categories', Category::orderBy('created_at', 'desc')->get());

  }
}
