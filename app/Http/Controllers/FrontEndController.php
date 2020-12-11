<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Category;
use App\Post;
use App\Profile;
use App\Tag;
use App\Comment;
use Pusher\Laravel\Facades\Pusher;
class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome')
                   ->with('title', Setting::first()->site_name)
                   ->with('categories', Category::all())
                   ->with('first_post', Post::orderBy('created_at', 'desc')->first())
                   ->with('posts', Post::orderBy('created_at', 'desc')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function singlePost($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $post = Post::where('slug', $slug)->first();
        $next_id = Post::where('id', '>', $post->id)->min('id');
        $prev_id = Post::where('id', '<', $post->id)->max('id');

        return view('single')->with('post', $post)
        ->with('title', $post->title)
        ->with('settings', Setting::first())
        ->with('category', $category)
        ->with('categories', Category::take(4)->get())

        ->with('next', Post::find($next_id))
        ->with('prev', Post::find($prev_id))
        ->with('user', Profile::all())
        ->with('tags', Tag::all());


    }
    public function category($slug)
    {
      $category = Category::where('slug', $slug)->first();
      return view('category')->with('category', $category)
                             ->with('title', $category->name)
                             ->with('posts', $category->posts)
                             ->with('settings', Setting::first())

                             ->with('categories', Category::orderBy('created_at', 'desc')->get());

    }
    public function addComment()
     {
       $data = request()->post();
   Comment::moderate($data['comment']);
   $comment = Comment::create($data);
   Pusher::trigger('comments', 'new-comment', $comment, request()->header('X-Socket-Id'));
   return $comment;
     }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
