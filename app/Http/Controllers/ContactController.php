<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Category;
use App\Post;

class ContactController extends Controller
{
  public function Contact()
  {
      return view('contact')     ->with('title', Setting::first()->site_name)
           ->with('categories', Category::all())
           ->with('first_post', Post::orderBy('created_at', 'desc')->first())
           ->with('posts', Post::orderBy('created_at', 'desc')->get());

  }
}
