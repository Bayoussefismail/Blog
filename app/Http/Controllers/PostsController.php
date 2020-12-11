<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use Session;
 use Illuminate\Support\Str;
use App\Tag;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index')->with('posts', Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categories = Category::all();
      $tags = Tag::all();
      if($categories->count() == 0 && $tags->count() == 0)
      {
        Session::flash('info', 'Your must have a category and tags before creating a post');
        return redirect()->back();
      }

        return view('admin.posts.create')->with('categories', $categories)
                                         ->with('tags', Tag::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'title' => 'required',
        'feature' => 'required|image',
        'content' => 'required',
        'category_id' => 'required',
        'tags' => 'required'
           ]);
       $feature = $request->feature;
       $feature_new_name = time().$feature->getClientOriginalName();
       $feature->move('uploads/posts', $feature_new_name);
       $post = Post::create([
         'title' => $request->title,
         'content' => $request->content,
         'feature' => 'uploads/posts/' . $feature_new_name,
         'category_id' => $request->category_id,
         'slug' => Str::slug($request->title)
       ]);
       $post -> tags()-> attach($request->tag);
       Session::flash('success', 'Post created successfully');
        return redirect()->route('posts');

    }

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
        $post = Post::find($id);
        return view('admin.posts.edit')->with('post', $post)
                                       ->with('categories', Category::all())
                                       ->with('tags', Tag::all());

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

        $this->validate($request, [
          'title' => 'required',
          'content' => 'required',
          'category_id' => 'required'
        ]);
         $post = Post::find($id);
        if($request->hasFile('feature'))
        {
      $feature = $request->feature;
      $feature_new_name = time() . $feature->getClientOriginalName();
      $feature->move('uploads/posts', $feature_new_name);
      $post->feature = 'uploads/posts/' . $feature_new_name;
        }
        $post->title = $request->title;
        $post->content = $request->content;
        $post->category_id = $request->category_id;
        $post->save();
        $post->tags()->sync($request->tags);
        Session::flash('success', 'Post updated succes');
        return redirect()->route('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post -> delete();
        Session::flash('success', 'The post was trashed.');
        return redirect()->back();
    }
    public function trashed() {
      $posts = Post::onlyTrashed()->get();
      return view('admin.posts.trashed')->with('posts', $posts);
    }
    public function kill($id) {
      $posts = Post::withTrashed()->where('id', $id)->first();
      $posts->forceDelete();
      Session::flash('success', 'Post deleted premenently');
       return redirect()->back();
    }
    public function restore($id) {
      $posts = Post::withTrashed()->where('id', $id)->first();
      $posts->restore();
      Session::flash('success', 'Post restore successfully');
       return redirect()->back();
    }

}
